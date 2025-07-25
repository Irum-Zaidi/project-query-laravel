<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $json = File::get('database/json/students.json');

        // $json = File::get('database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function ($student) {

            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'age' => $student->age,
                'city' => $student->city,
            ]);
        });
    }
}
