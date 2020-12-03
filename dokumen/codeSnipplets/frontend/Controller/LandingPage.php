<?php namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index() : string {
        return view('LandingPage/index');
    }

    public function about() : string {
        return view('LandingPage/about');
    }

    public function career() : string {
        return view('LandingPage/career');
    }

    public function contact() : string {
        return view('LandingPage/contact');
    }

    public function gallery() : string {
        return view('LandingPage/gallery');
    }

    public function login() : string {
        return view('LandingPage/login');
    }

    public function news() : string {
        return view('LandingPage/news');
    }

    public function services() : string {
        return view('LandingPage/services');
    }

}
