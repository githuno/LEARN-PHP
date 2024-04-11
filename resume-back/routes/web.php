<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/resume', 'App\Http\Controllers\ResumeController@store');


// CSRFトークンを含むクッキーを返すエンドポイントを追加
Route::get('/csrf-cookie', function () {
    return response()->json([
        'csrfToken' => csrf_token(),
    ]);
});

// postリクエストのテスト用エンドポイント
Route::post('/test', function () {
    return response()->json([
        'message' => 'post request success',
    ]);
});
