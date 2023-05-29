<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Scholarship;
use App\Models\student_scholarship;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

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
            'Mother_name' => 'required',
            'Mother_job' => 'required',
            'Parent_Nationlity' => 'required',
            'Permanent_Address' => 'required',
            'Parent_Income' => 'required',
            



            'School_Name' => 'required',
            'GPA' => 'required',
            'School_Address' => 'required',
            'Year_Course' => 'required',
            


            'Student_Image' => ['required','image'],
            'Parent_Image' => ['required'],
         
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
            $file->move(public_path('upload/reg'),$filename);
            $data['Parent_Image'] = $filename;
        }

        $data['scholarship_id'] = $request->id;
    
       
        Auth()->user()->student()->create($data);
       
   

        $edit = Scholarship::where('id',$id)->first();

        $status = student::select('Status')->firstWhere('id', $id);

        if($data['Parent_Income'] == $edit['Parent_Income'] && (empty($edit->address))  &&  (empty($edit->grade)) ){
            $status   = 'Approve';
        }
        
        elseif($data['Parent_Income'] == $edit['Parent_Income'] &&   $data['Permanent_Address'] == $edit['address']  &&  (empty($edit->grade)) ){
            $status   = 'Approve';
        }
        
        elseif($data['Parent_Income'] == $edit['Parent_Income'] &&   $data['Permanent_Address'] == $edit['address']  &&  (($data['GPA'] == $edit['grade']) || (  ($data['GPA'] >= $edit['grade']) && ($data['GPA'] <= $edit['grade2']) )   ) ){
            $status   = 'Approve';
        }


        elseif((empty($edit->Parent_Income))  &&   $data['Permanent_Address'] == $edit['address'] &&  (($data['GPA'] == $edit['grade']) || (  ($data['GPA'] >= $edit['grade']) && ($data['GPA'] <= $edit['grade2']) )   ) ){
            $status   = 'Approve';
        }

        
        elseif((empty($edit->Parent_Income)) &&  (empty($edit->address)) &&  (($data['GPA'] == $edit['grade']) || (  ($data['GPA'] >= $edit['grade']) && ($data['GPA'] <= $edit['grade2']) )   ) ){
            $status   = 'Approve';
        }


        elseif((empty($edit->Parent_Income)) && $data['Permanent_Address'] == $edit['address'] &&   (empty($edit->grade)) ){
            $status   = 'Approve';
        }


        elseif($data['Parent_Income'] == $edit['Parent_Income']  &&(empty($edit->address)) &&  (($data['GPA'] == $edit['grade']) || (  ($data['GPA'] >= $edit['grade']) && ($data['GPA'] <= $edit['grade2']) )   ) ){
            $status   = 'Approve';
        }

       
        else{
            $status  =  'Pending';
        }

        Auth::user()->student->firstWhere('scholarship_id', $id)->update(['Status'=>$status]);

        $sana_all= student::get();
        return redirect()->route('Scholarship')->with(compact('sana_all'));
        
    }
    public function Remove($id)
    {
        $deletes = Auth::user()->student->firstWhere('scholarship_id', $id)->delete();
        if ($deletes) {
            $notifications = array
            (
                'messege' => 'Successfully User Disapprove',
                'alert-type' => 'success'

            );
            return redirect()->back()->with($notifications);
        }
    }


    public function Applicants($id)
    {   
        $wasted = student::where('Scholarship_id', $id)->get();
        return view ('backend.user.Applicants',  compact( 'wasted'));

    }

    public function status($id)
    {   
        $status = student::select('Status')->where('id', $id)->first();
        
        if($status->Status =='Pending'){
            $status = 'Approve';
        }
        
        
        else{
            $status = 'Pending';
        }
        student::where('id', $id)->update(['Status'=>$status]);
        $notifications = array
        (
            'messege' => 'Successfully Status Change',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notifications);

    }

    
    public function studentdetails($id)
    {
        $tada = Student::get()->where('id',$id)->first();
        $swabe = 'Not Active';
        return view ('backend.user.studentdetails',  compact('tada' , 'swabe'));
    }

    public function editStudent($id)
    {
        
        $edits =  student::get()->where('id',$id)->first();
       
        return view('backend.user.editStudent', compact('edits'));
    }

}
