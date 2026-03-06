
<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/even', function () {
    return view('even'); 
});

Route::get('/prime', function () {
    return view('prime'); 
});

Route::get('/home', function () {
    return view('home'); 
});

// Route::get('/multable', function () {
// $j = 6;
// return view('multable', compact('j')); 
// });

Route::get('/multable/{number?}', function($number = null) {
$j = $number??2;
return view('multable', compact('j')); 
});

// Route::get('/multable', function(Request $request) {
// $j = $request->number;
// return view('multable', compact('j')); 
// });

// Route::get('/multable', function (Request $request) {
// $j = $request->number;
// dd($request->all());
// return view('multable', compact('j')); 
// });

Route::get('/jquery', function() {
    return view('jquery-example'); 
});