DROP VIEW IF EXISTS "total_question";
DROP TABLE IF EXISTS "bookmark";
DROP TABLE IF EXISTS "administrator";
DROP TABLE IF EXISTS "vote_notif";
DROP TABLE IF EXISTS "post_notif";
DROP TABLE IF EXISTS "report_notif";
DROP TABLE IF EXISTS "notification";
DROP TABLE IF EXISTS "report";
DROP TABLE IF EXISTS "edit_log";
DROP TABLE IF EXISTS "vote";
DROP TABLE IF EXISTS "question_category";
DROP TABLE IF EXISTS "category";
DROP TABLE IF EXISTS "comment";
ALTER TABLE IF EXISTS "question"
DROP COLUMN IF EXISTS best_answer;
DROP TABLE IF EXISTS "answer";
DROP TABLE IF EXISTS "question";
DROP TABLE IF EXISTS "post";
DROP TABLE IF EXISTS "member";
DROP TYPE IF EXISTS "report_type";
DROP TYPE IF EXISTS "report_state";
DROP TYPE IF EXISTS "vote_type";

-- Types
CREATE TYPE report_type as ENUM( 
    'Inappropriate Language',
    'Offensive Towards Others',
    'Spreading Misinformation',
    'Spam',
    'Other'
);

CREATE TYPE report_state as ENUM(
    'Unread',
    'Approved',
    'Rejected'
);

CREATE TYPE vote_type as ENUM(
    'Upvote',
    'Downvote'
);

-- Tables
CREATE TABLE "member" (
    id SERIAL PRIMARY KEY,
    email text NOT NULL UNIQUE,
    "name" text NOT NULL,
    "password" text NOT NULL,
    photo_url text NOT NULL DEFAULT 'assets/profileImages/default.png',
    banned BOOLEAN NOT NULL DEFAULT FALSE,
    membership_date date DEFAULT now() NOT NULL, 
    score int NOT NULL DEFAULT 0
);

CREATE TABLE "post" (
    id SERIAL PRIMARY KEY,
    author integer REFERENCES "member" (id) NOT NULL,
    "date" TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
    text_body text NOT NULL
);

CREATE TABLE "question" (
    post INTEGER PRIMARY KEY REFERENCES "post"(id) ON DELETE CASCADE,
    title text NOT NULL
);

CREATE TABLE "answer" (
    post INTEGER PRIMARY KEY REFERENCES "post"(id) ON DELETE CASCADE,
    question INTEGER  NOT NULL REFERENCES "question" (post) ON DELETE CASCADE
);

ALTER TABLE "question"
ADD COLUMN best_answer INTEGER REFERENCES "answer"(post);

CREATE TABLE "comment" (
    post INTEGER PRIMARY KEY REFERENCES "post"(id) ON DELETE CASCADE,
    answer INTEGER NOT NULL REFERENCES "answer" (post) ON DELETE CASCADE
);

CREATE TABLE "category" (
    id SERIAL PRIMARY KEY,
    name text NOT NULL,
    color INTEGER NOT NULL
);
CREATE TABLE "question_category" (
    question INTEGER NOT NULL REFERENCES "question" (post) ON DELETE CASCADE,
    category INTEGER NOT NULL REFERENCES "category" (id) ON DELETE CASCADE,
    PRIMARY KEY (question, category) 
);

CREATE TABLE "vote" (
    voted INTEGER NOT NULL REFERENCES "answer" (post) ON DELETE CASCADE,
    voter INTEGER REFERENCES "member" (id) NOT NULL,
    "value" vote_type NOT NULL,
	PRIMARY KEY (voted, voter) 
);

CREATE TABLE "edit_log" (
    id SERIAL PRIMARY KEY,
    post INTEGER NOT NULL REFERENCES "post"(id) ON DELETE CASCADE,
    edit_date TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL ,
    old_body text NOT NULL
);

CREATE TABLE "report" (
    id SERIAL PRIMARY KEY,
    reported INTEGER REFERENCES "post"(id) NOT NULL,
    reporter INTEGER REFERENCES "member"(id) NOT NULL,
    "date" TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,
    "type" report_type NOT NULL,
    offense text,
    "state" report_state NOT NULL DEFAULT 'Unread'
);

CREATE TABLE "notification" (
    id SERIAL PRIMARY KEY,
    notified INTEGER NOT NULL REFERENCES "member"(id) ON DELETE CASCADE,
    "read" BOOLEAN DEFAULT FALSE NOT NULL,
    "date" TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL
);

CREATE TABLE "post_notif" (
    notif INTEGER PRIMARY KEY REFERENCES "notification"(id) ON DELETE CASCADE,
    post INTEGER NOT NULL REFERENCES "post"(id) ON DELETE CASCADE
);

CREATE TABLE "vote_notif" (
    notif INTEGER PRIMARY KEY REFERENCES "notification"(id) ON DELETE CASCADE,
    voted INTEGER NOT NULL REFERENCES "answer"(post) ON DELETE CASCADE,
    voter INTEGER NOT NULL REFERENCES "member"(id),
    FOREIGN KEY (voted,voter) REFERENCES "vote" ON DELETE CASCADE
);

CREATE TABLE "report_notif" (
    notif INTEGER PRIMARY KEY REFERENCES "notification"(id) ON DELETE CASCADE,
    report INTEGER NOT NULL REFERENCES "report"(id) ON DELETE CASCADE
);

CREATE TABLE "administrator" (
    id SERIAL PRIMARY KEY,
    email text NOT NULL UNIQUE,
    "name" text NOT NULL,
    "password" text NOT NULL
);

CREATE TABLE "bookmark" (
    member INTEGER NOT NULL REFERENCES "member"(id) ON DELETE CASCADE,
    bookmark INTEGER NOT NULL REFERENCES "question"(post) ON DELETE CASCADE,
    PRIMARY KEY (member, bookmark)
);

CREATE VIEW total_question AS 
    SELECT id, author, date, text_body, title 
    FROM post, question
    WHERE post.id = question.post;