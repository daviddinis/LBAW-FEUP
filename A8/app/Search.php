<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Search extends Model
{
    public $timestamps  = false;
    protected $table = "total_question";

    public function search($search) {
        $result = DB::select(DB::raw("select q.id, q.date as qdate, text_body, title, q.name as qname, q.photo_url as qphoto, 
                                        a.answer, a.date as adate, a.name as aname, a.photo_url as aphoto, a.membership_date, a.score,ts_rank_cd(textsearch, query) AS rank 
                                    from (total_question as q LEFT JOIN total_answer as a ON q.best_answer = a.id),
                                        to_tsquery(:search) AS query, to_tsvector(title || ' ' || text_body) AS textsearch
                                    where query @@ textsearch
                                    order by rank desc"),
                        array("search" => $search,));
        return collect($result)->map(function($x) {return (array) $x; })->toArray();
    }
}
