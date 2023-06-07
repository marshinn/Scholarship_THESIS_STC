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
use App\Models\Annoucement;
class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function announcement()
    {
        
      

        $alls =  Annoucement::get();
        return view('backend.user.announcement', compact( 'alls'));
    }

    public function AddAnnouncement()
    {
        return view ('backend.user.AddAnnouncement');
    }

    public function pogs(Request $request)
    {
       
        $data['name_announcement'] = $request->name_announcement;
        $data['time'] = $request->time;
        $data['PDF'] = $request->PDF;
        if ($request->file('PDF')){
            $file = $request->file('PDF');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/reg'),$filename);
            $data['PDF'] = $filename;
        }
      
     Auth()->user()->annoucement()->create($data);




        $alls = Annoucement::get();
        return redirect()->route('announcement')->with(compact('alls'));
        
    }

}
