<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Page;

class FrontendController extends Controller
{
    public function index()
    {
        $page = Page::first();
        if (!$page) {
            $page = new Page;
        }
        return view('front.home', [
            'page' => $page
        ]);
    }

    public function bots()
    {
        $page = Page::first();
        if (!$page) {
            $page = new Page;
        }
        return view('front.bots', [
            'page' => $page
        ]);
    }

}
