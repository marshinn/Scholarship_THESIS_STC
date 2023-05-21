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

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function announcement()
    {
        
        $details =  Scholarship::get()->first();

        $alls =  Scholarship::get();
        return view('backend.user.announcement', compact('details' , 'alls'));
    }
}
