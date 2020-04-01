<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Page;

class FrontendController extends Controller
{
    public function index()
    {
        return view('front.home', [
            'page' => Page::first()
        ]);
    }

}
