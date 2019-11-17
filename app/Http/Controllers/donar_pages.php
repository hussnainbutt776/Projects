<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donar_pages extends Controller
{

                     //donar pages


    public function get_donar_main_page()
    {

        return view('donar_folder/donar_main_page');
    }

    public function get_donar_registration()
    {

        return view('donar_folder/donar_registration');
    }

    public function get_donar_signin()
    {

        return view('donar_folder/donar_signin');
    }
    public function get_update_donar_record()
    {

        return view('donar_folder/update_donar_record');
    }

    public function get_receiver_all_record()
    {

        return view('donar_folder/receiver_all_records');
    }
}
