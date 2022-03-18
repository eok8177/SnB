<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;

use App\Page;

class FrontendController extends Controller
{
    public function __construct(Request $request)
    {
        view()->share('lang', app()->getLocale() == 'ua' ? 'ua/' : '');
    }

    public function index()
    {
        return view('front.home');
    }

    public function sites()
    {
        return view('front.sites');
    }

    public function bots()
    {
        return view('front.bots');
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
          $m->from('eok8177@gmail.com', 'sitesandbots.com');

          $m->to('eok8177@gmail.com')->subject('S&B обращение клиента');
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
