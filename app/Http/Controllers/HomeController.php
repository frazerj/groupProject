<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Request;
use App\Http\Requests;

class HomeController extends Controller {


    public function login() {
        //
        return view('auth/login');
    }

    public function register() {
        //
        return view('auth/register');
    }

    public function home() {

        if(Auth::guest())
        {
            return redirect('/');
        }

        return view('home');
    }

    public function studentInfo() {

        if(Auth::guest())
        {
            return redirect('/');
        }

        $user = Auth::user();

        return view('studentInfo', compact('user'));
    }

    public function update() {
        //$id=Auth::User()->id;
        //$id=1;

        //$user = User::findOrFail($id);

        //$input = Request::all();

        //$user->update($input);

        return view('studentInfo');
    }
}