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
        // $items = DB::table("items")->get();
        // view()->share('items', $items);


        $pdf = PDF::loadView('pdf.pdf');

        $path = public_path('pdf/');
        $fileName =  'test'.'.'. 'pdf' ;
        $pdf->save($path . '/' . $fileName);

        $pdf = public_path('pdf/'.$fileName);
        return response()->download($pdf);




        //     $pdf = PDF::loadView('pdfview');
        //     return $pdf->download('pdfview.pdf');



        // return view('pdfview');
    }

    public function pdfview() {

        return view('pdf.pdf');
    }
}
