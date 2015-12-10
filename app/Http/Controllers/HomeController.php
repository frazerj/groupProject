<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Request;
use App\Http\Requests;

class HomeController extends Controller {


    public function login() {

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

        $user = Auth::user();

        if($user['admin'] == 'true' ){
            return redirect('showStudents');
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

    public function teamInfo() {

        if(Auth::guest())
        {
            return redirect('/');
        }

        $user = Auth::user();

        $teamid = $user['teamID'];

        $students = User::where('teamID', '=', $teamid )->get();

        return view('teamInfo')->with('students', $students)
                               ->with('teamid', $teamid);
    }

    public function update()
    {

        $user = Auth::user();

        $input = Request::all();

        $input = array_add($input, 'admin', 'false');

        $user->update($input);

        return redirect('home');
    }
}