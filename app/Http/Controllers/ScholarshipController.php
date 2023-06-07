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

class ScholarshipController extends Controller
{
    public function __construct(Scholarship $Scholarship)
    {
        $this->middleware('auth');
    }

    public function Scholarship()
    {   
        
        $id = Auth::user()->id;


        

        $alls =  Scholarship::get();
  
        return view ('backend.user.scholarship', compact('alls')); 
   

    }


    public function AddScholarship()
    {
        return view ('backend.user.Addscholarship');
    }

    public function store(Request $request)
    {
       
        $data = $request->validate([
          
            'image' => ['required','image'],
        ]);
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['address'] = $request->address;
        $data['grade'] = $request->grade;
        $data['grade2'] = $request->grade2;
        $data['Parent_Income'] = $request->Parent_Income;
        $data['Slot'] = $request->Slot;
        $data['deadline'] = $request->deadline;
        if ($request->file('image')){
            $file = $request->file('image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image'] = $filename;
        }
      
     Auth()->user()->Scholarship()->create($data);




        $alls = scholarship::get();
        return redirect()->route('Scholarship')->with(compact('alls'));
        
    }

    
    public function Scholarshipdetails($id)
    {
        
        $detail =  Scholarship::get()->where('id',$id)->first();
        $swabe = 'Not Active';
        return view('backend.user.scholarshipdetails', compact('detail', 'swabe'));
    }


    public function editScholarship($id)
    {
        
        $edit =  Scholarship::get()->where('id',$id)->first();
       
        return view('backend.user.editScholarship', compact('edit'));
    }

    public function updates(request $request, $id)
    {
       
        
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['address'] = $request->address;
        $data['grade'] = $request->grade;
        $data['grade2'] = $request->grade2;
        $data['Parent_Income'] = $request->Parent_Income;
        $data['Slot'] = $request->Slot;
        if ($request->file('image')){
            $file = $request->file('image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/image'),$filename);
            $data['image'] = $filename;
        }
        Auth()->user()->Scholarship()->where('id', $id)->update($data);
        if($data)
        {
           $notifications = array
           (
            'messege'=>'Successfully User Inserted',
            'alert-type'=>'success'

           );
           return redirect()->route('Scholarshipdetails', $id )->with($notifications);

        }
        else
        {
            $notifications = array
           (
            'messege'=>'Something is wrong,please try again',
            'alert-type'=>'error'

           );
           return redirect()->route('Scholarshipdetails')->with($notifications);
        }
    }

  
}
