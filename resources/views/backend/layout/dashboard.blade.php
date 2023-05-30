@extends('backend.layout.apps')
@section('content')
<style>
    .red-text {
      color: red;
    }
  </style>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-md-6">
<h3 class="page-title mb-0">Dashboard</h3>
</div>
<div class="col-md-6">
<ul class="breadcrumb mb-0 p-0 float-right">
<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><span>Dashboard</span></li>
</ul>
</div>
</div>
</div>



@if(auth()-> user() ->role=='Student')


<div class="row staff-grid-row">
  @foreach($done as $lucky)
<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
<div class="profile-widget">
<div class="profile-img">
<a href="profile.html" class="avatar"> <img src="assets/img/dash/dash-2.png" alt="" width="80"></a>
</div>
<div class="dropdown profile-action">

</div>
<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html">{{$lucky->title}} </a></h4>
<div class="text-muted ">No. of Slot :{{$lucky->Slot - $lucky->Student->where('Status', 'Approve')->count() }} left </div>
@if(($lucky->Slot - $lucky->Student->where('Status', 'Approve')->count()) == 0)


<div class="red-text small" >No Slot</div>


<button class="btn btn-warning" href="/Scholarship" disabled ><i class="fas fa-arrow-right" ></i>&nbsp; &nbsp; Full &nbsp; &nbsp; </button>
@else


<div class=" small text-muted text-primary">Status:  Open</div>
<a class="btn btn-info" href="/Scholarship" ><i class="fas fa-arrow-right"></i>&nbsp; &nbsp; Apply &nbsp; &nbsp; </a>


@endif
</div>

</div>
@endforeach

@endif































































@if(auth()-> user() ->role=='Admin')

<div class="row">
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
<div class="dash-widget-info text-right">
<span>Number of Users </span>
<h3>{{auth()-> user()->count()}}</h3>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<div class="dash-widget-info text-left d-inline-block">
<span>Students Who Currently Have Scholarships</span>
<h3>{{$student->where('Status', 'Approve')->count()}}</h3>
</div>
<span class="float-right"><img src="assets/img/dash/dash-2.png" width="80" alt=""></span>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<span class="float-left"><img src="assets/img/dash/dash-3.png" alt="" width="80"></span>
<div class="dash-widget-info text-right">
<span>Number of Scholarships</span>
<h3>{{auth()-> user()->where('role', 'Student')->count()}}</h3>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
<div class="dash-widget dash-widget5">
<div class="dash-widget-info d-inline-block text-left">
<span>Students Who Currently Have not yet Scholarships</span>
<h3>{{$student->where('Status', 'Pending')->count()}}</h3>
</div>
<span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
</div>
</div>
</div>



<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
 <div class="page-title">
 All Students who currently have scholarships.
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class=" mt-sm-0 mt-2">

<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Name </th>
<th>Student ID</th>
<th>School Name</th>
<th>Year & Course</th>
<th>Scholarship Name</th>
<th>Status</th>
<th class="text-right">Date when the application is approved.</th>
</tr>
</thead>
<tbody>
@foreach($student as $students)
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="{{(!empty($student->Student_Image))? url( '../../upload/image/'.$student->Student_Image):url('../../upload/no_image.jpg')}}"  alt=""></a><a href="profile.html">{{ $students->Fname}} {{ $students->Lname}} <span></span></a></h2>
</td>
<td> {{ $students->School_ID}}</td>
<td>{{ $students->School_Name}}</td>
<td>{{ $students->Year_Course}}</td>
<td>{{ $students->Scholarship->title}}</td>
<td>{{ $students->Status}}</td>
<td class="text-right">
{{ date('M  d,  Y', strtotime($students->updated_at))}}
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="page-title">
New Registered Students
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class=" mt-sm-0 mt-2">

<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Name </th>

<th>Role</th>
<th>Email</th>
<th>Verified Email</th>
<th>Date Registered</th>

</tr>
</thead>
<tbody>
    @foreach($all as $key=>$row)
<tr>
<td>
<h2><a href="profile.html" class="avatar text-white"><img src="{{(!empty($student->Student_Image))? url( '../../upload/image/'.$student->Student_Image):url('../../upload/no_image.jpg')}}" alt=""></a><a href="profile.html">{{ $row->name}} <span></span></a></h2>
</td>

<td>{{ $row->role}}</td>
<td>{{ $row->email}}</td>
<td>{{ $row->email_verified_at}} </td>
<td>{{ date('M  d,  Y', strtotime($row->created_at))}}</td>


</tr>

@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endif
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


@endsection