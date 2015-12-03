<?php namespace App\Http\Controllers;

class HomeController extends Controller {


    public function login() {
        //
        return view('auth/login');
    }

    public function register() {
        //
        return view('auth/register');
    }

    public function studentInfo() {
        return view('studentInfo');
    }

}