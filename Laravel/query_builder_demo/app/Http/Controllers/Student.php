<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student extends Controller
{
    public function index(){
        $students = DB::table("students")->get();
        return view("index", ["students" => $students]);
    }

    public function create(){
        return view("create");
    }

    public function createStudent(Request $request){
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            DB::table('students')->insert(
                [
                    "name" => $request->name,
                    "email"=> $request->email,
                    "dob" => $request->dob,
                    "profile_image" => $request->file('profile')->storeAs('uploads', $filename)
                ]
            );
            return redirect("/");
        }else{
            echo "File Not Found, Upload Again!!";
        }
    }
    public function getStudentById($id){
        $student = DB::table('students')->find($id);
        return view("update", ["student" => $student]);
    }

    public function updateStudentById($id, Request $request){
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file->move(public_path('uploads'), $filename);

            DB::table('students')->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'dob' => $request->dob,
                // 'profile_image' => 'uploads/' . $filename,
                'profile_image' => $request->file('profile')->storeAs('uploads', $filename, 'public')
            ]);
            return redirect("/");
        }else{
            echo "File Not Found, Upload Again!!";
        }
    }

    public function deleteStudent($id){
        DB::table("students")->delete($id);
        return redirect("/");
    }
}