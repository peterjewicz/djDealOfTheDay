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
        $deal = DB::table('deals')->orderBy('id', 'desc')->first();
        $deal->images = explode ( ',' , $deal->images ); // break apart the images into an array for display loop
        return view('home')->with('deal', $deal);
    }

    /**
     * returns the most recent deal as
     * a json string (used as api)
     * @return json string
     */
    public function mobile(){
        $deal = DB::table('deals')->orderBy('id', 'desc')->first();
        $deal->images = explode ( ',' , $deal->images ); // break apart the images into an array for display loop
        return json_encode($deal);
    }
}
