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

<ul class="nav user-menu float-right">
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
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="../../assets/img/user-06.jpg" class="img-fluid rounded-circle">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">L</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">G</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.html">View all Notifications</a>
</div>
</div>
</li>
<li class="nav-item dropdown d-none d-sm-block">
<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="../../assets/img/sidebar/icon-23.png" alt=""> </a>
</li>
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





 <!--Calendar Side :) ^_^ -->


 <li>
<a href="calendar.html"><img src="../../assets/img/sidebar/icon-6.png" alt="icon"> <span>Calendar</span></a>
</li>
<li>


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

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Scholarship </h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Scholarship</a></li>
<li class="breadcrumb-item"><span> Scholarship Details</span></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="blog-view">
<article class="blog blog-single-post">
<div class="col-sm-12 d-flex justify-content-between">
  
<h3 class="blog-title">{{$detail->title}}</h3>
@if(auth()-> user() ->role=='Admin')

<a class="btn btn-dark  float-right" href="{{ URL::to('/AddScholarship') }}" > <h5></h5><i class="fas fa-wrench"></i> &nbsp; Edit </a> 
@endif
    </div>
<div class="blog-info clearfix">
<div class="post-left">
<ul>
<li><a href=""><i class="far fa-calendar-alt" aria-hidden="true"></i> <span>{{ date('M  d,  Y', strtotime($detail->created_at))}}</span></a></li>
<li><a href=""><i class="fas fa-user" aria-hidden="true"></i><span>&nbsp;By: {{$detail->user?->name}}</span>  </a></li>
</ul>
</div>
<div class="post-right"><a href=""><i class="far fa-heart" aria-hidden="true"></i>&nbsp;21 &nbsp;</a> <a href=""><i class="fas fa-eye" aria-hidden="true"></i>&nbsp;8&nbsp;</a> <a href=""><i class="fas fa-comment" aria-hidden="true"></i>&nbsp;17 &nbsp;</a></div>
</div>
<div class="blog-image">
<a href="#"><img alt="" src="{{(!empty($detail->image))? url('upload/image/'.$detail->image):url('upload/no_image.jpg')}}" class="img-fluid"></a>
</div>
<div class="blog-content">
<p > {{$detail->description}} </p>

    <p> {{$detail->description}} </p>
</div>
</article>














<div class="widget author-widget clearfix">
<h3>About author</h3>
<div class="about-author">
<div class="about-author-img">
<div class="author-img-wrap">
<img class="img-fluid rounded-circle" alt="" src="assets/img/user.jpg">
</div>
</div>
<div class="author-details">
<span class="blog-author-name">{{$detail->user?->name}}</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noftrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>
<div class="widget blog-comments clearfix">
<h3>Comments (3)</h3>
<ul class="comments-list">
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/user.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">Diana Bailey</span>
<span class="float-right">
<span class="blog-reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
 <span class="blog-date">December 6, 2018</span>
</div>
</div>
<ul class="comments-list reply">
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/user.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">Henry Daniels</span>
<span class="float-right">
<span class="blog-reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
<span class="blog-date">December 6, 2018</span>
</div>
</div>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/user.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">Diana Bailey</span>
<span class="float-right">
<span class="blog-reply"> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
<span class="blog-date">December 7, 2018</span>
</div>
</div>
</li>
</ul>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/user.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">Marie Wells</span>
<span class="float-right">
<span class="blog-reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<span class="blog-date">December 11, 2018</span>
</div>
 </div>
</li>
<li>
<div class="comment">
<div class="comment-author">
<img class="avatar" alt="" src="assets/img/user.jpg">
</div>
<div class="comment-block">
<span class="comment-by">
<span class="blog-author-name">Pamela Curtis</span>
<span class="float-right">
<span class="blog-reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span>
</span>
</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<span class="blog-date">December 13, 2018</span>
</div>
</div>
</li>
</ul>
</div>
<div class="widget new-comment clearfix">
<h3>Leave Comment</h3>
<form>
<div class="row">
<div class="col-sm-8">
<div class="form-group">
<label>Name <span class="text-red">*</span></label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label>Your email address <span class="text-red">*</span></label>
<input type="email" class="form-control">
</div>
<div class="form-group">
<label>Comments</label>
<input type="text" class="form-control">
</div>
<div class="comment-submit">
<input type="submit" value="Submit" class="btn">
</div>
</div>
</div>
</form>
</div>
</div>
</div>


<aside class="col-md-4">




<div class="widget category-widget">
<h5>Scholarship Criteria</h5>
<ul class="categories">
<li><a href=""><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i><b> Grades:</b><i class="blog-author-name"> &nbsp;{{(!empty($detail->grade))? $detail->grade:$swabe}}</i></a>@if(auth()-> user() ->role=='Student') <h5 class="badge badge-pill bg-primary float-right">{{(!empty($detail->grade)) && ($detail->grade) == (auth()->user()->student->firstwhere('scholarship_id', $detail->id)?->grade) ?  'ok':''}}</h5> @endif </li>
<li><a href=""><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i><b> Address:</b> <i class="blog-author-name">  {{(!empty($detail->address))? $detail->address . ' '. 'Only':$swabe}} </i></a>@if(auth()-> user() ->role=='Student') <h5 class="badge badge-pill bg-primary float-right">{{(!empty($detail->Address)) && ($detail->Address) == (auth()->user()->student->firstwhere('scholarship_id', $detail->id)?->Address) ?  'ok':''}}</h5> @endif </li>
<li><a href="" ><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> <b >Parent Income:</b> <i class="blog-author-name"> {{(!empty($detail->Parent_Income))? $detail->Parent_Income. ' '. 'Pesos':$swabe}}  </i></a> @if(auth()-> user() ->role=='Student') <h5 class="badge badge-pill bg-primary float-right">{{(!empty($detail->Parent_Income)) && ($detail->Parent_Income) == (auth()->user()->student->firstwhere('scholarship_id', $detail->id)?->Parent_Income) ?  'ok':''}}</h5>
<h5 class="badge badge-pill bg-danger fa fa-times-circle float-right">{{(!empty($detail->Parent_Income)) && ($detail->Parent_Income) != (auth()->user()->student->firstwhere('scholarship_id', $detail->id)?->Parent_Income) ?  ' ':''}}</h5>@endif</li>
<li>  <p> <center>If you meet the required criteria, the system will automatically approve your application and you will be invited to an interview. </center></p>  </li>

</ul>
</div>

<div class="widget search-widget">

<form class="search-form">

<div class="input-group">
@if(auth()-> user() ->role=='Student')
@if($detail->student->contains('user_id' , auth::id()))

<a class="btn btn-dark" href="  {{ URL::to('/Apply/'.$detail->id) }}" ><i class="fas fa-arrow-right"></i>&nbsp; &nbsp; Status: {{auth()->user()->student->firstwhere('scholarship_id', $detail->id)?->Status}}  &nbsp; &nbsp; </a>    &nbsp; 
<a class="btn btn-info" href="/Scholarship" ><i class="fas fa-ban"></i>&nbsp; &nbsp;  Cancel My Application &nbsp; &nbsp; </a>     &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; 

@else
<a class="btn btn-secondary" href="  {{ URL::to('/Apply/'.$detail->id) }}" ><i class="fas fa-arrow-right"></i>&nbsp; &nbsp; Apply &nbsp; &nbsp; </a>   &nbsp; &nbsp; &nbsp; 
<a class="btn btn-info" href="/Scholarship" ><i class="fas fa-ban"></i>&nbsp; &nbsp;  Cancel &nbsp; &nbsp; </a>   &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; 
@endif
<p></p>
<h2></h2>

@endif
<i>Number of Slots Left : 23</i>

<div class="input-group-append">

</div>
</div>
</form>
</div>
@if(auth()-> user() ->role=='Admin')
<div class="widget tags-widget">
<h5>View the applied Applicants</h5>
<a class="btn btn-info" href="{{ URL::to('/Applicants/'.$detail->id) }}" ><i class="fas fa-user"></i>&nbsp; &nbsp;  View &nbsp; &nbsp; </a> 

<p></p>
<h5>Find suitable student for the scholarship </h5>
<a class="btn btn-warning" href="{{ URL::to('/AddScholarship') }}" ><i class="fas fa-search fa-fw"></i>&nbsp; &nbsp;  Find Student &nbsp; &nbsp; </a> 

</div>
@endif

</aside>
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


  
  <!-- Start of Dashboard :) ^_^ -->






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
            @if(Session::has('messege'))
              var type="{{Session::get('alert-type','info')}}"
              switch(type){
                  case 'info':
                       toastr.info("{{ Session::get('messege') }}");
                       break;
                  case 'success':
                      toastr.success("{{ Session::get('messege') }}");
                      break;
                  case 'warning':
                     toastr.warning("{{ Session::get('messege') }}");
                      break;
                  case 'error':
                      toastr.error("{{ Session::get('messege') }}");
                      break;
              }
            @endif
         </script>  


<script>  
             $(document).on("click", "#sed", function(e){
                 e.preventDefault();
                 var link = $(this).attr("href");
                    swal({
                      title: "Are you Want to delete your appllication?",
                      text: "Once Delete, This will be Permanently Delete!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                           window.location.href = link;
                      } else {
                        swal("The Data has been saved !!");
                      }
                    });
                });
        </script>
<script>  
             $(document).on("click", "#delete", function(e){
                 e.preventDefault();
                 var link = $(this).attr("href");
                    swal({
                      title: "Are you Want to delete?",
                      text: "Once Delete, This will be Permanently Delete!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                           window.location.href = link;
                      } else {
                        swal("The Data has been saved !!");
                      }
                    });
                });
        </script>

</body>
</html>