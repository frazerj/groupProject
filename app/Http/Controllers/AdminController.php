<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Request;
use App\Http\Requests;

class AdminController extends Controller {

    public function showStudents() {
        $students = User::all();

        return view('showStudents')->with('students', $students);

    }

    public function createTeams() {
        $students = User::all();
        $input = Request::all(); //inputs = min, max

        $numStudents = count($students);
        $numTeams  = $numStudents/$input['max'];

        if (!is_int($numTeams)) {
            $numTeams = $numTeams + 1;
        }
        $count = 1;
        foreach($students as $student) {
            $student['teamID'] = $count;
            $count++;
            if ($count > $numTeams) {
                $count = 1;
            }
        }

        //return $input['max'];
        return view('showTeams')->with('students', $students)
                                ->with('numTeams', $numTeams)
                                ->with('count', 1);


    }

}