<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Category;

class QuestionController extends Controller
{
    private function checkcategory($categ){
        $ob = new Category();
        $response = $ob->allCategories("");
        for($i = 0; $i < count($response); ++$i){
            if ($response[$i]['name'] == $categ){
                return true;
            }
        }
        return false;
    }

    public function addQuestion(){

        if (Auth::check()) {
            return view('pages.newQuestion');
        } else{
            return redirect('login');
        }
    }

    public function store(Request $request){
        $check = false;
        for($i = 1; $i < 5; $i++){
            if(!$this->checkcategory($request->input('category'.$i)) && $request->input('category'.$i) != ''){
                //print_r($response);
                return back()->with('errorMessage' , $request->input('category'.$i).' is not a valid category!'.$request->input('category'.$i));
            }
            if($request->input('category'.$i)  != ''){
                $check = true;
            }
        }
        if (!$check){
            return back()->with('errorMessage' , 'please insert a valid category');
        }
            $this->authorize('create', Question::class);

            DB::select('SELECT add_question(:param1, :param2, :param3)', [
            'param1' => Auth::user()->id, 
            'param2' => $request->input('text_body'), 
            'param3' => $request->input('title')]);
            return redirect('/');
        
    }

    public function view($question) {
        $obj = new Question();
        $info = $obj->getAllInfo($question);
        return view('pages.question', ['question' => $info['question'], 'answers' => $info['answers'] ]);
    }
}
