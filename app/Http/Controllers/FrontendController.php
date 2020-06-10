<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;

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

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function email(Request $request)
    {
        $text = implode(', ', $request->all());

        Mail::send('email.callme', ['text' => $text], function ($m) use ($text) {
          $m->from('eok1877@gmail.com', 'snb.ks.ua');

          $m->to('sitesnbotssocial@gmail.com')->subject('S&B обращение клиента');
        });

        return 'success';
    }


    public function page(Request $request, $slug)
    {
        $page = Page::where('slug',$slug)->firstOrFail();
        return view('front.page', [
            'page' => $page
        ]);
    }
}
