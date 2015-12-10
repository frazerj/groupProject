<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Request;
use App\Http\Requests;

class AdminController extends Controller {

    public function showStudents() {

        $user = Auth::user();

        if($user['admin'] != 'true' ){
            return redirect('home');
        }

        $students = User::where('admin', '!=', 'true')->get();

        return view('showStudents')->with('students', $students);

    }

    public function createTeams() {

        $user = Auth::user();

        if($user['admin'] != 'true' ){
            return redirect('home');
        }

        $students = User::where('admin', '!=', 'true')->get();

        //$students = User::all();
        $input = Request::all(); //inputs = min, max

        $numStudents = count($students);
        $numTeams  = $numStudents/$input['max'];

        if (!is_int($numTeams)) {
            $numTeams = $numTeams + 1;
        }
        $count = 1;
        foreach($students as $student) {

            $student->update(['teamID' => $count] );

            //$student['teamID'] = $count;
            $count++;
            if ($count > $numTeams) {
                $count = 1;
            }
        }

        //return $input['max'];
        return view('showTeams')->with('students', $students)
            ->with('numTeams', $numTeams);

    }

    public function show($id)
    {
        $user = Auth::user();

        if($user['admin'] != 'true' ){
            return redirect('home');
        }

        $student = User::findOrFail($id);

        return view('showStudentInfo')->with('student', $student);

    }

    public function teams()
    {
        $user = Auth::user();

        if($user['admin'] != 'true' ){
            return redirect('home');
        }

        $students = User::where('admin', '!=', 'true')->get();

        $student = User::where('admin', '!=', 'true')->orderby('teamID','desc')->first();

        $numTeams = $student['teamID'];

        return view('showTeams')->with('students', $students)
            ->with('numTeams', $numTeams);
    }

    public function edit($id)
    {
        $user = Auth::user();

        if($user['admin'] != 'true' ){
            return redirect('home');
        }

        $student = User::findOrFail($id);

        $input = Request::all();

        $student->update($input);

        return redirect('home');
    }
}