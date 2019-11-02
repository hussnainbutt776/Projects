<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class all_pages extends Controller
{
    public function get_main_page()
    {

        return view('main_page');
    }
    public function get_signin()
    {

        return view('signin');
    }
    public function get_donate_form()
    {

        return view('donate_form');
    }
}
