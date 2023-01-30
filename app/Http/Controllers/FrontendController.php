<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class FrontendController extends Controller
{
    public function index() {
        $getQuestions = Question::with('catgeory','options')->get();
        // dd($getQuestions);
        return view('frontend.index',get_defined_vars());
    }
}
