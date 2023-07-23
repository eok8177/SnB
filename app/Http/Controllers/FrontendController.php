<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;

use App\Models\Bot;
use App\Models\Site;
use App\Models\Page;

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
        $blocks = Site::where('show',1)->orderBy('order','asc')->get();
        return view('front.sites',['blocks'=>$blocks]);
    }

    public function bots()
    {
        $blocks = Bot::where('show',1)->orderBy('order','asc')->get();
        return view('front.bots',['blocks'=>$blocks]);
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

          $m->to('dasat107@gmail.com')->subject('S&B обращение клиента');
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
