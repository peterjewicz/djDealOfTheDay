<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;

class DealController extends Controller
{
    public function addDeal(){
        $deal = new Deal;
        $deal->title = $_POST['title'];
        $deal->description = $_POST['description'];
        $deal->link = $_POST['link'];
        $deal->regularPrice = $_POST['regularPrice'];
        $deal->salePrice = $_POST['salePrice'];
        $deal->images = $_POST['images'];

        $deal->save();
        return view('admin/admin')->with('alert', 'Item Added!');
    }
}
