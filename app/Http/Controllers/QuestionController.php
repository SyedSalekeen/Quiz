<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuestionAnswer;


class QuestionController extends Controller
{
    public function index() {
        $getQuestions = Question::with('catgeory')->get();

        return view('question.index',get_defined_vars());
    }

    public function create() {
        $questionCatgeory = Category::all();

        return view('question.create',get_defined_vars());
    }

    public function store(Request $request) {

        $store = new Question();
        $store->QuestionText = $request->question;
        $store->CatID = $request->category_id;
        $store->save();

        foreach($request->options as $item){
            $answer = new QuestionAnswer();
            $answer->QuestionID = $store->id;
            $answer->answer = $item;
            $answer->save();
        }

        $getAllQuestionAnswer = QuestionAnswer::where('QuestionID',$store->id)->get();

        foreach($request->correct_answer as $item2) {

                if($item2 == "option_1") {
                    $correct_answer = new Answer();
                    $correct_answer->QuestionID = $store->id;
                    $correct_answer->Answer = $getAllQuestionAnswer[0]->id;
                    $correct_answer->save();
                }

                if($item2 == "option_2") {
                    $correct_answer = new Answer();
                    $correct_answer->QuestionID = $store->id;
                    $correct_answer->Answer = $getAllQuestionAnswer[1]->id;
                    $correct_answer->save();
                }

                if($item2 == "option_3") {
                    $correct_answer = new Answer();
                    $correct_answer->QuestionID = $store->id;
                    $correct_answer->Answer = $getAllQuestionAnswer[2]->id;
                    $correct_answer->save();
                }

                if($item2 == "option_4") {
                    $correct_answer = new Answer();
                    $correct_answer->QuestionID = $store->id;
                    $correct_answer->Answer = $getAllQuestionAnswer[3]->id;
                    $correct_answer->save();
                }

                if($item2 == "option_5") {
                    $correct_answer = new Answer();
                    $correct_answer->QuestionID = $store->id;
                    $correct_answer->Answer = $getAllQuestionAnswer[4]->id;
                    $correct_answer->save();
                }

        }

        return redirect()->route('questions')->with('success','Question added successfully');
    }
}
