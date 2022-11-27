<?php

namespace App\Http\Controllers;

use App\Models\Publisher;

class PublisherController extends Controller
{
    //

    public function index()
    {
        $publisher = Publisher::find(1);
        return view('publisher', compact('publisher'));
    }
}
