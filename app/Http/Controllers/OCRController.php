<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class OCRController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image=$request->image;

        $ocr=new TesseractOCR($image);

        $text = $ocr->lang('eng')->run();

        return back()->with('text',$text);
    }
}
