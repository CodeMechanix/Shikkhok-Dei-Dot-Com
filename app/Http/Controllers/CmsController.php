<?php

namespace App\Http\Controllers;
class CmsController extends Controller
{
    public  function index()
    {
        return view('frontend.pages.home');
    }

    public function about_us()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function all_teachers()
    {
        return view('frontend.pages.teacher');
    }

    public function teacher_profile()
    {
        return view('frontend.pages.teacher_profile');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function signup()
    {
        return view('frontend.pages.signup');
    }

    public function lost_password()
    {
        return view('frontend.pages.lost_password');
    }
}
