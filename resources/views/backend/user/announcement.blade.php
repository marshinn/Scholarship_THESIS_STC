@extends('backend.layout.apps')
@section('content')



<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Annoucement</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>

<li class="breadcrumb-item"><span>Annoucement</span></li>
</ul>
</div>
</div>
</div>

@if(auth()->user()-> role == 'Admin')
<div class="row">
<div class="col-lg-12 col-sm-12 col-12 text-right add-btn-col">
<a class="btn btn-info btn-rounded float-right" href="{{ URL::to('/AddScholarship') }}" ><i class="fas fa-bell"></i>  &nbsp;Add Annoucement</a>
</div>
@endif

</div>
<div class="row">
<div class="col-md-12">
<div class="activity">
<div class="activity-box">
<ul class="activity-list">


@foreach($alls as $Scholarship)
<li>

<div class="activity-user">
<a href="profile.html" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">L</a>
</div>
<div class="activity-content">
<div class="timeline-content">
<a href="" class="name"> {{ $Scholarship->user->name}}</a> added a <a href="{{ URL::to('/Scholarship-details/'.$Scholarship->id) }}" class="name"> {{ $Scholarship->title}}</a> and it has  <a href="" class="name">  Scholarship Criteria</a> of <a href=""> Average Grades is {{(!empty($Scholarship->grade))? $Scholarship->grade: '' }} , Living in   {{(!empty($Scholarship->address))? $Scholarship->address: '' }}   and has Parent Income of maximum    {{(!empty($Scholarship->Parent_Income))? $Scholarship->Parent_Income: '' }} pesos  </a>
<span class="time">6 mins ago</span>
</div>
</div>
</li>

@endforeach











<li>
<div class="page-title ml-3">Notifications</div>

</li>

@if(auth()->user()-> role == 'Student')

<li>
<div class="activity-user">
<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>

<div class="activity-content">

<div class="timeline-content">
<a href="" class="name"> <b>You</b> </a> submitted a new scholarship request for <b>{{auth()->user()->student->firstwhere('scholarship_id', $details?->id)?->Scholarship->title}} </b> 
<span class="time"> {{ date('M  d,  Y', strtotime($details?->created_at))}}</span>
</div>

</div>

</li>





<li>
<div class="activity-user">
<a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
<img alt="Bernardo Galaviz" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>
<div class="activity-content">
<div class="timeline-content">
<a href="" class="name">You </a> submitted a scholarship application for <b>{{auth()->user()->student->firstwhere('scholarship_id', $details?->id)?->Scholarship->title}} </b>  and it was <b>{{auth()->user()->student->firstwhere('scholarship_id', $details?->id)?->Status}} </b> . 
<span class="time">{{ date('M  d,  Y', strtotime($details?->updated_at))}}</span>
</div>
</div>
</li>

@endif
@if(auth()->user()-> role == 'Admin')

@foreach($alls as $Scholarship)

<li>
<div class="activity-user">
<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>

<div class="activity-content">

<div class="timeline-content">
<a href="" class="name"> <b>You</b> </a> only have   <b>{{ $Scholarship->Slot}}</b>  slot left   for {{ $Scholarship->title}}
<span class="time"> {{ date('M  d,  Y', strtotime($details->created_at))}}</span>
</div>

</div>

</li>
@endforeach
@foreach($alls as $Scholarship)
<li>
<div class="activity-user">
<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
</a>
</div>

<div class="activity-content">

<div class="timeline-content">
<a href="" class="name"> <b>You</b> </a> have been approve    <b>{{$Scholarship->student()->where('Status', 'Approve')->count()}}</b>  Student and only  {{$Scholarship->student()->where('Status', 'Pending')->count()}} for pending
<span class="time"> {{ date('M  d,  Y', strtotime($details->created_at))}}</span>
</div>

</div>

</li>

@endforeach
@endif

</ul>
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
@endsection