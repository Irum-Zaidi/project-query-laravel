<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student; // Ensure you import the Student model


class StudentController extends Controller
{

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

        // $students = DB::table('students')
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
        // ->sum('age');
        // return $students;

        // $students = DB::table('students')->get();
        // return view('allstudents', ['data' => $students]);

        // $students = DB::table('students')
        //     ->simplePaginate(4);
        // return view('allstudents', ['data' => $students]);

        // $students = DB::table('students')
        // ->orderBy('name')
        //     ->simplePaginate(4);
        // return view('allstudents', ['data' => $students]);


        // $students = DB::table('students')
        // ->where('city', 'Lahore')
        // ->orderBy('name')
        //     ->simplePaginate(4);
        // return view('allstudents', ['data' => $students]);



        // $students = DB::table('students')

        // ->orderBy('id')
        //     ->Paginate(4);
        // return view('allstudents', ['data' => $students]);




        // $students = DB::table('students')

        //     ->orderBy('id')
        //     // ->Paginate(4,2);
        //     ->Paginate(4, ['*'], 'p', 2);
        // // return $students;
        // return view('allstudents', ['data' => $students]);




        // $students = DB::table('students')

        //     ->Paginate(4)
        //     ->appends(['sort' => 'votes','test' => 'abc']);
        // return view('allstudents', ['data' => $students]);

        //  $students = DB::table('students')

        //     ->Paginate(4)
        //     ->fragment('users');
        // return view('allstudents', ['data' => $students]);


        $students = DB::table('students')
            ->orderBy('id')
            ->cursorPaginate(4);
        return view('allstudents', ['data' => $students]);
    }

    public function singleStudent(string $id)
    {
        $students = DB::table('students')->where('id', operator: $id)->get();
        // return $students;
        return view('student', ['data' => $students]);
    }

    // public function addStudent()
    // {
    // $students = DB::table('students')
    //     ->insert([
    //         'name' => 'tabish jafar',
    //         'email' => 'tabishjafar@email.com',
    //         'age' => 25,
    //         'city' => 'Lahore',
    //         // // 'created_at' => now(),
    //         // // 'updated_at' => now(),
    //     ]);
    // if ($students) {
    //     echo "Data inserted successfully";
    // } else {
    //     echo "Data insertion failed";
    // }

    // $students = DB::table('students')
    //     ->insert([
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahra@email.com',
    //             'age' => 22,
    //             'city' => 'Karachi',
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ],
    //         [
    //             'name' => 'ali zaidi',
    //             'email' => 'ali@email.com',
    //             'age' => 24,
    //             'city' => 'Karachi',
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ],
    //         [
    //             'name' => 'taqi zaidi',
    //             'email' => 'taqi@email.com',
    //             'age' => 34,
    //             'city' => 'Karachi',
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]
    //     ]);
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "Data insertion failed";
    // }

    // $students = DB::table('students')
    //     ->insert([
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahra@email.com',
    //             'age' => 22,
    //             'city' => 'Karachi',
    //             // 'created_at' => now(),
    //             // 'updated_at' => now()
    //         ]
    //     ]);
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "Data insertion failed";
    // }


    // $students = DB::table('students')
    //     ->insertOrIgnore([
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahra@email.com',
    //             'age' => 22,
    //             'city' => 'Karachi',
    //         ]
    //     ]);
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "<h3>Data already exists</h3>";
    // }


    // $students = DB::table('students')
    //     ->upsert(
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahra@email.com',
    //             'age' => 20,
    //             'city' => 'lahore',
    //         ],
    //         ['email']
    //     );
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "<h3>Data insertion failed Or Data already exists</h3>";
    // }

    //   $students = DB::table('students')
    //     ->upsert(
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahrazaidi@email.com',
    //             'age' => 20,
    //             'city' => 'lahore',
    //         ],
    //         ['email']
    //     );
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "<h3>Data insertion failed Or Data already exists</h3>";
    // }

    // $students = DB::table('students')
    //     ->upsert(
    //         [
    //             'name' => 'zahra zaidi',
    //             'email' => 'zahrazaidi@email.com',
    //             'age' => 20,
    //             'city' => 'islamabad',
    //         ],
    //         ['email'],
    //         ['city']
    //     );
    // if ($students) {
    //     echo "<h2>Data inserted successfully</h2>";
    // } else {
    //     echo "<h3>Data insertion failed Or Data already exists</h3>";
    // }


    // $students = DB::table('students')
    //     ->insertGetId(
    //         [
    //             'name' => 'zafar zaidi',
    //             'email' => 'zafar@email.com',
    //             'age' => 16,
    //             'city' => 'Quetta',
    //         ]
    //     );
    //     return $students; // This will return the ID of the inserted student


    // }

    // public function updateStudent()
    // {
    //     // $students = DB::table('students')
    //     //     ->where('id', 6)
    //     //     ->update([
    //     //         'city' => 'Lahore',
    //     //     ]);
    //     // $students = DB::table('students')
    //     //     ->where('id', 10)
    //     //     ->update([
    //     //         'city' => 'Islamabad',
    //     //         'age' => 20,
    //     //     ]);

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }

    //     //   $students = DB::table('students')
    //     //     ->where('id', 4)
    //     //     ->update([
    //     //         'city' => 'Islamabad',
    //     //         'age' => 40,
    //     //     ]);

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }


    //     // $students = DB::table('students')
    //     //     ->where('id', 4)
    //     //     ->updateOrInsert(
    //     //         [
    //     //             'city' => 'Gujranwala',
    //     //             'age' => 160,
    //     //             'email' => 'Zafarhassan@newemail.com',
    //     //         ],
    //     //         [
    //     //             'name' => 'Zafar Hassan',
    //     //         ]
    //     //     );

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }


    //     // $students = DB::table('students')
    //     // ->where('id', 3)
    //     //     // ->increment('age');
    //     //     ->increment('age',3);

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }


    //     // $students = DB::table('students')
    //     // ->where('id', 3)
    //     //     ->decrement('age');

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }

    //     // $students = DB::table('students')
    //     // ->where('id', 3)
    //     //     ->decrement('age',3);

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }


    //     // $students = DB::table('students')
    //     // ->where('id', 3)
    //     //     ->decrement('age',3, ['city' => 'Karachi']);

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }

    //     // $students = DB::table('students')
    //     //     ->where('id', 3)
    //     //     ->incrementEach(
    //     //         [
    //     //             'age' => 2,
    //     //             // votes => 1,
    //     //         ]
    //     //     );

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }


    //     // $students = DB::table('students')
    //     //     ->where('id', 3)
    //     //     ->decrementEach(
    //     //         [
    //     //             'age' => 2,
    //     //             // votes => 1,
    //     //         ]
    //     //     );

    //     // if ($students) {
    //     //     echo "<h2>Data updated successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data update failed</h3>";
    //     // }
    // }

    // public function deleteStudent()
    // {
    //     $students = DB::table('students')
    //         ->where('id', 14)
    //         ->delete();

    //     if ($students) {
    //         echo "<h2>Data deleted successfully</h2>";
    //     } else {
    //         echo "<h3>Data deletion failed</h3>";
    //     }



    //     // $students = DB::table('students')
    //     //     ->where('id', 3)
    //     //     ->forceDelete();

    //     // if ($students) {
    //     //     echo "<h2>Data deleted successfully</h2>";
    //     // } else {
    //     //     echo "<h3>Data deletion failed</h3>";
    //     // }


    // }   


    public function deleteStudent(string $id)
    {
        $students = DB::table('students')
            ->where('id', $id)
            ->delete();

        if ($students) {
            echo "<h2>Data deleted successfully</h2>";
            return redirect()->route('home'); // Redirect back to the previous page after deletion
        } else {
            echo "<h3>Data deletion failed</h3>";
        }
    }

    public function deleteAllStudent()
    {
        // $students = DB::table('students')
        // ->delete();

        $students = DB::table('students')
            ->truncate(); // This will delete all records from the table and reset the auto-incrementing ID

    }


    public function addStudent(Request $req)
    {
        // return $req;
        $students = DB::table('students')
            ->insert([
                'name' => $req->input('username'),
                'email' => $req->input('useremail'),
                'age' => $req->input('userage'),
                'city' => $req->input('usercity'),
            ]);

        if ($students) {
            // echo "Data inserted successfully";
            return redirect()->route('home'); // Redirect to the home route after successful insertion
        } else {
            echo "Data insertion failed";
        }
    }

    public function updatePage(string $id)
    {
        // Fetch the student data based on the provided ID
        // $student = DB::table('students')->where('id', $id)->get();
        // $student = DB::table('students')->find($id);
        // return $student;
        $student = DB::table('students')->find($id);
        return view('updatestudent', ['data' => $student]);
        // // Check if the student exists
        // if ($student) {
        //     // Return the view with the student data
        //     return view('updatepage', ['data' => $student]);
        // } else {
        //     // Handle the case where the student does not exist
        //     return redirect()->route('home')->with('error', 'Student not found');
        // }
    }

    public function updateStudent(Request $req, string $id)
    {
        // return $req;
        $students = DB::table('students')
            ->where('id', $id) // Assuming you pass the student
            ->update([
                'name' => $req->input('username'),
                'email' => $req->input('useremail'),
                'age' => $req->input('userage'),
                'city' => $req->input('usercity'),
            ]);

        if ($students) {
            // echo "Data updated successfully";
            return redirect()->route('home'); // Redirect to the home route after successful update
        } else {
            echo "Data update failed";
        }
    }
}
