<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    /**
     * Shows the main screen and
     * passes the most current deal to it.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump(env('DB_HOST'));
        var_dump(env('DB_DATABASE'));
        var_dump(env('DB_USERNAME'));
        var_dump(env('DB_PASSWORD'));
    die;

        $deal = DB::table('deals')->orderBy('id', 'desc')->first();
        $deal->images = explode ( ',' , $deal->images ); // break apart the images into an array for display loop
        return view('home')->with('deal', $deal);
    }
}
