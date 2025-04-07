<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OCRController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/ocr-scaning',[OCRController::class,'index'])->name('ocr-scaning');
