<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Preschool - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="{{('assets/img/favicon.png')}}">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="../../assets/css/fullcalendar.min.css">

<link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="../../assets/plugins/morris/morris.css">

<link rel="stylesheet" href="../../assets/css/style.css">

<link rel="stylesheet" href="../../assets/toaster/toastr.min.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
      /* Loader styles */
      .loader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        background-color: #f2f2f2;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
      }
      
      .loader img {
        height: 50px;
        width: 50px;
        animation:  shake 0.5s ease-in-out infinite;
      }
       
      @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
      }
      
      
      /* Content styles */
      .content {
        display: none;
      }
    </style>
</head>
<body>

<div class="main-wrapper">


<div class="loader">
      <img src="../../assets/img/logo1.png" alt="Loader">
    </div>


<div class="header-outer">
<div class="header">
<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
<a id="toggle_btn" class="float-left" href="javascript:void(0);">
<img src="../../assets/img/sidebar/icon-21.png" alt="">
</a>

<ul class="nav float-left">
<li>
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.html">
<input class="form-control" type="text" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>
<li>
<a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="../../assets/img/logo1.png" alt="" width="30" height="30"></a>
</li>
</ul>

@if(auth()->user()-> role == 'Student')







<li class="nav-item dropdown d-none d-sm-block">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<img src="../../assets/img/sidebar/icon-22.png" alt="">
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span>Notifications</span>
</div>
<div class="drop-scroll">
<ul class="notification-list">
  
@foreach(auth()->user()->student as $Scholarship)
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="../../assets/img/user-06.jpg" class="img-fluid rounded-circle">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title"><b>You</b> </span> submitted a scholarship application for <b> {{ $Scholarship -> Scholarship->title}} </b> and it was  <b> {{ $Scholarship ->Status}}</b></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
@endforeach
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>



@endif

 <li class="nav-item dropdown has-arrow">
<a href="#" class=" nav-link user-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="../../assets/img/user-06.jpg" width="30" alt="Admin">
<span class="status online"></span></span>
<span>{{auth()->user()->name}}</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right"> 
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!-- Start of Side BAR kaya mo yan  :) ^_^ -->


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<div class="header-left">


<a href="" class="logo">
<img src="../../assets/img/logo1.png" width="40" height="40" alt="">
<span class="text-uppercase">Scholarship</span>
</a>
</div>
<ul class="sidebar-ul">
<li class="menu-title">Menu</li>


<li >
<a href="{{URL::to('/home')}}"><img src="../../assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
</li>


   @if(auth()->user()->role=='Admin')


<li>
<a href="{{URL::to('/User')}}"><img src="../../assets/img/sidebar/icon-2.png" alt="icon"> <span>Users</span></a>
</li>
<li>
@endif

 



 <!-- Scholarship Side :) ^_^ -->


 <li>
<a href="{{URL::to('/Scholarship')}}"><img src="../../assets/img/sidebar/icon-12.png" alt="icon"> <span> Scholarship</span></a>
</li>


<!--Announcement Side :) ^_^ -->


<li>
<a href="{{URL::to('/announcement')}}"><img src="../../assets/img/sidebar/icon-22.png" alt="icon"> <span class="badge badge-pill bg-primary float-right">!</span> <span>Announcement</span></a>
</li>
<li>



 <!--Calendar Side :) ^_^ 


 <li>
<a href="{{URL::to('/calendar')}}"><img src="assets/img/sidebar/icon-6.png" alt="icon"> <span>Calendar</span></a>
</li>
<li>

-->


 <!--Message Side :) 


 <li>
<a href=""><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span class="badge badge-pill bg-primary float-right">5</span><span>Message</span></a>
</li>
<li>

^_^ -->

 <!-- Accounts Side :) ^_^ -->

<li class="submenu">
<a href="#"><img src="../../assets/img/sidebar/icon-10.png" alt="icon"><span> Accounts </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="invoices.html"><span>Profile</span></a></li>
<li><a href="payments.html"><span>Change Password</span></a></li>

</ul>
</li>



 <!-- Settings Side :) ^_^ -->

<li>
<a href="{{ route('logout') }}"     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                     <img src="../../assets/img/sidebar/icon-14.png" alt="icon"> <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

</li>


</div>
</div>
</div>

  <!-- End of Side BAR kaya mo yan  :) ^_^ -->




  <!-- Start of Dashboard :) ^_^ -->





  <script src="sweetalert.min.js"></script>

  <style>
    .image-frame {
      border: 1px solid black;
      padding: 5px;
    }
    .image-frame img {
        max-height: 150px;
         width: 150px;
         height: 150px;
    }
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Edit Scholarship</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="">Home</a></li>
<li class="breadcrumb-item"><a href="">Scholarship</a></li>
<li class="breadcrumb-item"><span> Edit Scholarship</span></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<form action="{{URL::to('/updates/'.$edit->id)}}" enctype="multipart/form-data" method="post" onsubmit="return submitForm(this);">
@csrf
<div class="form-group">
<label>Scholarship Name</label>
<input type="text" class="form-control" name="title" id="title" value="{{$edit->title}}" >
</div>
<div class="form-group">
<label>Scholarship Image</label>
<input type="file" name="image" accept="image/*" class="form-control" id="image">

@if ($errors->has('image'))
            
                <strong>{{ $errors->first('image')}}</strong>
          
        @endif
<small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>

</div>
<div class="form-group">
              <img id="showImage"  class="image-frame">
              
              </div>
<div class="row">
</div>
<div class="form-group">
<label>Scholarship Description</label>
<textarea class="form-control" placeholder="Description" rows="4"  name="description" id="description" value="{{$edit->description}}"  ></textarea>
</div>
<div class="form-group">
<label>Scholarship Slots</label>
<input type="number" class="form-control" name="Slot" id="Slot" value="{{$edit->Slot}}" >
</div>


<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<h4>Scholarship Criteria</h4>
</div>
</div>
<div class="form-group">
                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Set a Criteria</label>
                        <p>You can set one or more criteria to find the right applicants </p>
                        </div>



                        <div class="form-group">
  <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="checked">
    <label class="custom-control-label" for="customSwitch1">Location</label>
  </div>
</div>

<div class="form-group">
  <select class="form-control is-warning" id="provinceSelect" onchange="updateCityOptions()" disabled="disabled">
    <option value="">Select a province in Calabarzon</option>
	<option value="Batangas">Batangas</option>
    <option value="Cavite">Cavite</option>
  <option value="Laguna">Laguna</option>
  
  <option value="Rizal">Rizal</option>
  <option value="Quezon">Quezon</option>
    <!-- Add other provinces here -->
  </select>
<p></p>
  <select class="form-control is-warning" id="citySelect" name="address" disabled="disabled">
    <option value="">Select a city</option>
    <!-- City options will be populated dynamically -->
  </select>
</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch2" for="customSwitch2" checked="checked" >
<label class="custom-control-label" for="customSwitch2">GWA  </label>
</div>
</div>
<div class="form-group">

<input type="text" class="form-control is-warning" id="inputWarning2" placeholder="Enter First Number" disabled="disabled" name="grade">
</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch5" for="customSwitch5" checked="checked" >
<label class="custom-control-label" for="customSwitch5">UP TO </label>
</div>
</div>
<div class="form-group">

<input type="text" class="form-control is-warning" id="inputWarning5" placeholder="Enter Second Number" disabled="disabled" name="grade2">
</div>


<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch3" for="customSwitch3" checked="checked" >
<label class="custom-control-label" for="customSwitch3">Parent Income Monthly</label>
</div>
</div>
<div class="form-group">

<input type="number" class="form-control is-warning" id="inputWarning3" placeholder="Enter ..." disabled="disabled" name="Parent_Income">
</div>


<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch4" for="customSwitch4" checked="checked" >
<label class="custom-control-label" for="customSwitch4">Single Parent (Ulilang lubos)</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning4"  name="Single_Parent" id="Single_Parent" disabled="disabled" >


<option value="YES">Activate </option>


</select>

</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch11" for="customSwitch11" checked="checked" >
<label class="custom-control-label" for="customSwitch11">Gender</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning11"  name="Gender" id="Single_Parent" disabled="disabled" >


<option value="Male">Male Only</option>
<option  value="Female">Female Only</option>

</select>

</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch12" for="customSwitch12" checked="checked" >
<label class="custom-control-label" for="customSwitch12">Course</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning12"  name="Course" id="Single_Parent" disabled="disabled" >

<option value="">-- Select a Course --</option>
    <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
    <option value="Bachelor of Engineering">Bachelor of Engineering</option>
    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
    <option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
    <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
    <option value="Bachelor of Education">Bachelor of Education</option>
    <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
    <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
    <option value="Bachelor of Science in Architecture">Bachelor of Science in Architecture</option>
    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
    <option value="Bachelor of Arts in Communication Arts">Bachelor of Arts in Communication Arts</option>
    <option value="Bachelor of Science in Tourism and Hospitality Management">Bachelor of Science in Tourism and Hospitality Management</option>
    <option value="Bachelor of Fine Arts">Bachelor of Fine Arts</option>
    <option value="Bachelor of Science in Agriculture">Bachelor of Science in Agriculture</option>
    <option value="Bachelor of Science in Pharmacy">Bachelor of Science in Pharmacy</option>
    <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
    <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
    <option value="Bachelor of Science in Social Sciences">Bachelor of Science in Social Sciences</option>
    <option value="Bachelor of Science in Environmental Science">Bachelor of Science in Environmental Science</option>
    <option value="Bachelor of Science in Marine Biology">Bachelor of Science in Marine Biology</option>
  </select>

</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch15" for="customSwitch15" checked="checked" >
<label class="custom-control-label" for="customSwitch15">Year</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning15"  name="Year" id="Single_Parent" disabled="disabled" >

<option value="">-- Select a Year --</option>
<option value="1st Year">1st Year </option>
<option value="2nd Year">2nd Year </option>
<option value="3rd Year">3rd Year </option>
<option value="4th Year">4th Year </option>
<option value="5th Year">5th Year </option>
</select>

</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch13" for="customSwitch13" checked="checked" >
<label class="custom-control-label" for="customSwitch13">Working Student</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning13"  name="Working_Student" id="Single_Parent" disabled="disabled" >


<option value="YES">Activate </option>


</select>

</div>


<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch16" for="customSwitch16" checked="checked" >
<label class="custom-control-label" for="customSwitch16">Varsities of different sports</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning16"  name="Varsity"  disabled="disabled" >


<option value="YES">Activate </option>


</select>

</div>


<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch17" for="customSwitch17" checked="checked" >
<label class="custom-control-label" for="customSwitch17">PWD</label>
</div>
</div>
<div class="form-group">

<select class="form-control is-warning" id="inputWarning17"  name="PWD"  disabled="disabled" >


<option value="YES">Activate </option>


</select>

</div>
<div class="m-t-20 text-center">
<button type="submit" class="btn btn-primary mr-2">Add Scholarship</button>
<a href="/Scholarship" class="btn btn-secondary" type="reset">Cancel</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<script>  
function submitForm(form) {
        swal({
            title: "Are you sure?",
            text: "This form will be submitted",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });
        return false;
    }
</script>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
<div class="topnav-dropdown-header">
<span>Messages</span>
</div>
<div class="drop-scroll msg-list-scroll">
<ul class="list-box">
 <li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item new-message">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Ruth C. Gault</span>
<span class="message-time">1 Aug</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
 </div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">D</span>
</div>
<div class="list-body">
<span class="message-author"> Domenic Houston </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">B</span>
</div>
<div class="list-body">
<span class="message-author"> Buster Wigton </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author"> Rolland Webber </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Claire Mapes </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Melita Faucher</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Jeffery Lalor</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">L</span>
</div>
<div class="list-body">
<span class="message-author">Loren Gatlin</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author">Tarah Shropshire</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
 </ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.html">See all messages</a>
</div>
</div>
</div>
</div>
</div>

</div>









































<script src="../../assets/js/jquery-3.6.0.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/js/jquery.slimscroll.js"></script>
 
<script src="../../assets/js/select2.min.js"></script>
<script src="../../assets/js/moment.min.js"></script>

<script src="../../assets/js/fullcalendar.min.js"></script>
<script src="../../assets/js/jquery.fullcalendar.js"></script>

<script src="../../assets/plugins/morris/morris.min.js'"></script>
<script src="../../assets/plugins/raphael/raphael-min.js"></script>
<script src="../../assets/js/apexcharts.js"></script>
<script src="../../assets/js/chart-data.js"></script>

<script src="../../assets/js/jquery.dataTables.min.js"></script>

<script src="../../assets/js/dataTables.bootstrap4.min.js"></script>

<script src="../../assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../assets/js/app.js"></script>
<script src="../../assets/sweetalert.min.js"></script>
<script>
      // Hide the loader and show the content when the page is loaded
      setTimeout(function() {
        var loader = document.querySelector('.loader');
        var content = document.querySelector('.content');
        loader.style.display = 'none';
        content.style.display = 'block';
      }, 250);
    </script>
<!-- Start Toaster & Sweetalert -->
<script src="../../assets/toaster/toastr.min.js"></script>
<script src="../../assets/toaster/sweetalert.min.js"></script>


<script>
  function updateCityOptions() {
    var provinceSelect = document.getElementById("provinceSelect");
    var citySelect = document.getElementById("citySelect");
    var selectedProvince = provinceSelect.value;

    // Clear existing city options
    citySelect.innerHTML = "";

    if (selectedProvince === "Batangas") {
      var batangasCities = [
        "Agoncillo", "Alitagtag", "Balayan", "Balete", "Batangas City", "Bauan",
        "Calaca", "Calatagan", "Cuenca", "Ibaan", "Laurel", "Lemery", "Lian",
        "Lipa City", "Lobo", "Mabini", "Malvar", "Mataasnakahoy", "Nasugbu",
        "Padre Garcia", "Rosario", "San Jose", "San Juan", "San Luis", "San Nicolas",
        "San Pascual", "Santa Teresita", "Santo Tomas", "Taal", "Talisay",
        "Tanauan City", "Taysan", "Tingloy", "Tuy"
      ];

      // Populate city options for Batangas
      for (var i = 0; i < batangasCities.length; i++) {
        var cityOption = document.createElement("option");
        cityOption.value = batangasCities[i];
        cityOption.text = batangasCities[i];
        citySelect.appendChild(cityOption);
      }
    }
  }

  (function() {
    var provinceSelect = document.getElementById('provinceSelect');
    var citySelect = document.getElementById('citySelect');
    var checkbox = document.getElementById('customSwitch1');

    checkbox.addEventListener('change', function() {
      var isChecked = this.checked;

      provinceSelect.disabled = isChecked;
      citySelect.disabled = isChecked;
    });

    provinceSelect.addEventListener('change', function() {
      citySelect.selectedIndex = 0; // Reset the city select when changing province
    });
  })();
</script>


    <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning2' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch2' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
		  <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning5' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch5' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning3' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch3' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>


</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning4' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch4' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>



</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning11' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch11' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning12' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch12' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning13' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch13' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning15' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch15' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning16' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch16' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>
</script>
        <script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning17' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch17' );
			
				
				firstJavaScriptCheckbox.addEventListener( 'click', function() { // do things when the checkbox gets clicked
					if ( this.checked ) { // check box is checked so disable input and select
					
						firstJavaScriptInput.disabled = 'disabled';
					} else { // checkbox is not checked, make input and select editable
					
						firstJavaScriptInput.disabled = '';
					}
 				} );
			} )();
		</script>







        <script type="text/javascript">
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);  
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
    </script>


</body>
</html>