<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use PDF;

class FrontendController extends Controller
{
    public function index()
    {
        $getQuestions = Question::with('catgeory', 'options')->get();
        // dd($getQuestions);
        return view('frontend.index', get_defined_vars());
    }

    public function download_file()
    {
        $pdf = PDF::loadView('pdf.pdf');
        $path = public_path('pdf/');
        $fileName =  'test'.'.'. 'pdf' ;
        $pdf->save($path . '/' . $fileName);
        $pdf = public_path('pdf/'.$fileName);
        return response()->download($pdf);

    }

    public function pdfview() {
        return view('pdf.pdf');
    }
}
