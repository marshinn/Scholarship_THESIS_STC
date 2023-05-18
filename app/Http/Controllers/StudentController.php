<?php

namespace App\Http\Controllers;
use App\Models\student_scholarship;
use App\Models\User;
use App\Models\Scholarship;
use App\Models\Student;
use DB;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Apply($id)
    {
        $data = Scholarship::get()->where('id',$id)->first();
        return view ('backend.user.applyscholarship',  compact('data'));
    }

    public function applying(Request $request, $id)
    {
       
        $data = $request->validate([
            'Fname' => 'required',
            'Lname' => 'required',
            'Gender' => 'required',
            'Birthdate' => 'required',
            'Religion' => 'required',
            'Mobile_number' => 'required',
            'Nationality' => 'required',
            'School_ID' => 'required',




            'Father_name' => 'required',
            'Father_job' => 'required',
            'Father_number' => 'required',
            'Present_Address' => 'required',
            'Mother_name' => 'required',
            'Mother_job' => 'required',
            'Parent_Nationlity' => 'required',
            'Permanent_Address' => 'required',




            'School_Name' => 'required',
            'Honor' => 'required',
            'GPA' => 'required',
            'School_Address' => 'required',
            'Year_Course' => 'required',
            


            'Student_Image' => ['required','image'],
            'Parent_Image' => ['required','image'],
         
        ]);
        if ($request->file('Student_Image')){
            $file = $request->file('Student_Image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['Student_Image'] = $filename;
        }
        if ($request->file('Parent_Image')){
            $file = $request->file('Parent_Image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['Parent_Image'] = $filename;
        }

        $data['scholarship_id'] = $request->id;
    
       
        Auth()->user()->student()->create($data);
       
   




        $sana_all= student::get();
        return redirect()->route('Scholarship')->with(compact('sana_all'));
        
    }

}
