--- PERFORMANCE INDEXES ---

-- find the posts of one member
CREATE INDEX post_member ON post USING btree (author);

-- find quickly the answers of one question
CREATE INDEX answer_question ON answer USING btree (question);

-- find quickly the comments of one answer
CREATE INDEX comment_answer ON comment USING btree (answer);

-- find categories of question quickly
CREATE INDEX category_question ON question_category USING btree (question);

-- find votes to one answer
CREATE INDEX vote_answer ON vote USING btree (voted);

-- find edit logs of one post
CREATE INDEX edit_post ON edit_log USING btree (post); 

-- find reports of one post
CREATE INDEX report_post ON report USING btree (reported);

-- find reports by their state
CREATE INDEX report_state ON report USING btree (state);

-- find notifications of one member
CREATE INDEX notif_member ON notification USING btree (notified);

-- find bookmarks of one member
CREATE INDEX bookmark_member ON bookmark USING btree (member);

--- FULL TEXT SEARCH


-- TODO TRIGGERS TO TSVECTOR SEARCH