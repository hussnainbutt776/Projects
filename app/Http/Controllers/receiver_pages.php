<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class receiver_pages extends Controller
{
    public function get_main_page()
    {

        return view('/receiver_folder/main_page');
    }
    public function get_receiver_signin()
    {

        return view('receiver_folder/receiver_signin');
    }
    public function get_receiver_registration_form()
    {

        return view('receiver_folder/receiver_regist_form');
    }
    public function get_search()
    {

        return view('receiver_folder/receiver_search');
    }
}
