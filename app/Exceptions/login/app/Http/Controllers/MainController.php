<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login() {

        return view ('form.login');

    }

    function register() {

        return view('form.register');
    } 
}
