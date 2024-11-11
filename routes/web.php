<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get ('/', function ()
    {

    $result =DB::table ('categories')->get ();
    dd($result);
    return view('welcome');
});
