@extends('backend.layout.apps')
@section('content')


<style>

      .texxt {
        display: block;

  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
        
  max-width: 200ch;">
      }
      
      
    </style>



<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Scholarship</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i> Menu</a></li>

<li class="breadcrumb-item"><span> Scholarship</span></li>
</ul>
</div>
</div>
</div>

@if(auth()-> user() ->role=='Admin')
<div class="row">
<div class="col-lg-12 col-sm-12 col-12 text-right add-btn-col">
<a class="btn btn-primary btn-rounded float-right" href="{{ URL::to('/AddScholarship') }}" ><i class="fas fa-plus"></i> Add Scholarship</a>
</div>
@endif

</div>


<div class="row">
@foreach($alls as $Scholarship)
<div class="col-sm-6 col-md-6 col-lg-4">
<div class="blog grid-blog">
<div class="blog-image">
<a href="{{ URL::to('/Scholarship-details/'.$Scholarship->id) }}"><img class="img-fluid" src="{{(!empty($Scholarship->image))? url('upload/image/'.$Scholarship->image):url('upload/no_image.jpg')}}" alt=""></a>
</div>
<div class="blog-content">
<h3 class="blog-title"><a href="{{ URL::to('/Scholarship-details/'.$Scholarship->id) }}">{{ $Scholarship->title}}</a></h3>
<span  class="texxt" >{{ $Scholarship->description}}</span>
<a href="{{ URL::to('/Scholarship-details/'.$Scholarship->id) }}" class="read-more"><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> Read More</a>
<div class="blog-info clearfix">
<div class="post-left">
<ul>   @if($Scholarship->student->contains('user_id' , auth::id()))



@if($Scholarship->Status == 'Pending')
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<p class="badge badge-danger-border ">{{auth()->user()->student->firstwhere('scholarship_id', $Scholarship->id)?->Status}}</p>
@else
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p class="badge badge-success-border ">{{auth()->user()->student->firstwhere('scholarship_id', $Scholarship->id)?->Status}}</p>
@endif
@endif
<li><a href="{{ URL::to('/Scholarship-details/'.$Scholarship->id) }}"><i class="far fa-calendar-alt" aria-hidden="true"></i> <span>{{ date('M  d,  Y', strtotime($Scholarship->created_at))}}</span></a></li>
</ul>
</div>
@if(auth()-> user() ->role=='Student')
@if($Scholarship->student->contains('user_id' , auth::id()))
<div class="post-right">
<a class="btn btn-white btn-rounded float-right" href="{{URL::to('/Remove/'.$Scholarship->id)}}" id="sed" ><i class="fas fa-book"></i> View   &nbsp; </a>  
<a class="btn btn-white btn-rounded float-right" href="{{URL::to('/Remove/'.$Scholarship->id)}}" id="sed" ><i class="fas fa-moon"></i> cancel  &nbsp; </a> 
</div>

@else
@if(($Scholarship->Slot - $Scholarship->Student->where('Status', 'Approve')->count()) == 0)
<button class="btn btn-rounded btn-warning float-right" href="/Scholarship" disabled ><i class="fas fa-arrow-right" ></i>&nbsp; &nbsp; Full &nbsp; &nbsp; </button>
@else
<div class="post-right">
<a class="btn btn-dark btn-rounded float-right" href="  {{ URL::to('/Apply/'.$Scholarship->id) }}" ><i class="fas fa-moon"></i> Apply  &nbsp; </a> 
</div>

@endif

@endif
@endif
@if(auth()-> user() ->role=='Admin')

<div class="post-right">
<a class="btn btn-white btn-rounded float-right" href="{{ URL::to('/Applicants/'.$Scholarship->id) }}"  ><i class="fas fa-star"></i> View Applicants  &nbsp; </a> 
</div>

@endif
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
































































@endsection