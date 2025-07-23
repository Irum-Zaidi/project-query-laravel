<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student; // Ensure you import the Student model


class StudentController extends Controller
{
    //
    public function showStudents()
    {
        // Logic to show students
        // $students = DB::table('students')->get();
        // return $students; // Return the students data, or pass it to a view
        // dd($students); // For debugging, you can use dd() to dump and die
        // dump($students); // Use dump() to display the students data

        // $students = DB::table('students');
        // dd($students); // For debugging, you can use dd() to dump and die
        // dump($students); // Use dump() to display the students data
        // return view('students.index', compact('students')); // Assuming you have a view to display students

        // $students = DB::table('students')->get();
        // foreach ($students as $student) {
        //     // Process each student
        //     // For example, you can echo the student's name
        //     // echo $student . "<br>";
        //     echo $student->name . '<br>';


        // $students = DB::table('students')->get();
        // return view('allstudents', ['data'=> $students]);
        // return $students;



        // $students = DB::table('students')->where('id',2)->get();
        // return view('allstudents', ['data'=> $students]);


        // $students = DB::table('students')->find(4);
        // return $students;

        // $students = DB::table('students')->get();
        // return view('allstudents', ['data'=> $students]);

        // $students = DB::table('students')->find(4);
        // return view('allstudents', ['data'=> $students]);

        $students = DB::table('students')
            // ->select('name','age', 'email as user_email')
            // ->select('city')
            // add unlimited where conditions
            // ->where('city','lahore')
            // ->where('age','<', 20)
            // ->select('name')
            // ->where('name','like', 'A%')

            // ->distinct()

            // ->where([
            //     // ['city', '=', 'lahore'],
            //     ['age', '<', 35],
            //     ['name', 'like', 'A%']
            // ])

            // ->where('city', 'lahore')
            // ->orWhere('age', '<', 22)


            // ->whereBetween('id', [2, 4])
            // ->whereNotBetween('id', [2, 4])
            // ->whereIn('id', [1, 4, 5])
            // ->whereNotIn('id', [1, 4, 5])
            // ->OrWhereNotIn('id', [1, 4, 5])
            // ->WhereNull('email')
            // ->WhereNotNull('email')
            // ->whereDate('created_at', '2025-07-25')
            // ->whereMonth('created_at', '06')
            // ->whereDay('created_at', '06')
            // ->whereYear('created_at', '06')
            // ->whereTime('created_at', '18:12:40')

            // ->orderBy('id', 'desc')
            // ->orderBy('name', 'asc')
            // ->get();
            // return view('allstudents', ['data' => $students]);
            
            
            // ->latest()
            // ->oldest()
            // ->inRandomOrder()
            // ->first();
            // return $students;
            
            // ->limit(1)
            // ->offset(2)
            // ->take(2)
            // ->skip(2)
            
            // ->get();
            // return view('allstudents', ['data' => $students]);
            // ->max('age');
            // ->min('age');
            // ->avg('age');
            ->sum('age');
            return $students;
        }
        
    public function singleStudent(string $id)
    {
        $students = DB::table('students')->where('id', operator: $id)->get();
        // return $students;
        return view('student', ['data' => $students]);
    }
}



// RESUME FROM WHERE DATA SHOW IN TABLE AND TEACHER ADDING HEADING. ELSE YOU WILL GET ERRORS