<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Scholarship;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    public function __construct(Scholarship $Scholarship)
    {
        $this->middleware('auth');
    }

    public function Scholarship()
    {   
        
        return view ('backend.user.scholarship'); 

    }
}
