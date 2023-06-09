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


  <div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Personal Information</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="index.html">Student</a></li>
<li class="breadcrumb-item"><span> Add Student</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<form action= "{{URL::to('/editapply/'.$edits->id)}}"enctype="multipart/form-data" method="post" onsubmit="return submitForm(this);">
@csrf
<div class="form-group">
<label>Firstname</label>
<input type="text" class="form-control" name="Fname" id="Fname" value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Fname}}">
</div>
<div class="form-group">
<label>Email</label>
<input type="Email" class="form-control"  value="{{ auth()->user()->email }}"  disabled> 
</div>
  <!-- end of Dashboard :) 

<div class="form-group">
<label>Password</label>
<input type="password" class="form-control">
</div>

<div class="form-group">
<label>Subject</label>
<input type="text" class="form-control">
</div>
^_^ -->
<div class="form-group">
<label>Gender</label>
<select class="form-control" name="Gender" id="Gender">
<option>Male</option>
<option>Female</option>
</select>
</div>
<div class="form-group">
<label>Birth Date</label>
<input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker" name="Birthdate" id="Birthdate" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Birthdate}}">
</div>
 <!-- end of Dashboard :) 
<div class="form-group">
<label>Class</label>
<input type="text" class="form-control">
</div>
^_^ -->
<div class="form-group">
<label>Religion</label>
<input type="text" class="form-control" name="Religion" id="Religion" value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Religion}}">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Lastname</label>
<input type="text" class="form-control" name="Lname" id="Lname"  value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Lname}}">
</div>
 <!-- end of Dashboard :) 
<div class="form-group">
<label>Joining Date</label>
<input class="form-control datetimepicker-input datetimepicker" type="text" data-toggle="datetimepicker">
</div>
<div class="form-group">
<label>Comfirm Password</label>
<input type="password" class="form-control">
</div>
^_^ -->
<div class="form-group">
<label>Mobile number</label>
<input type="text" class="form-control"  name="Mobile_number" id="Mobile_number"  value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Mobile_number}}">
</div>
<div class="form-group">
<label>Nationality</label>
<input type="text" class="form-control" name="Nationality" id="Nationality" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Nationality}}">
</div>
<div class="form-group">
<label> School ID Number</label>
 <input type="text" class="form-control"  name="School_ID" id="School_ID" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->School_ID}}">
</div>
 <!-- end of Dashboard :) 
<div class="form-group">
<label>Section</label>
<input type="text" class="form-control">
</div>
^_^ -->

</div>
<div class="mt-4">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-title ml-3">Parents information</div>
</div>
</div>
</div>
<div class="card-body w-100 p-3">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Father Name</label>
<input type="text" class="form-control"   name="Father_name" id="Father_name" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Father_name}}">
</div>
<div class="form-group">
<label>Father Occupation</label>
<input type="text" class="form-control"   name="Father_job" id="Father_job"value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Father_job}}">
</div>
<div class="form-group">
<label> Parent Mobile number</label>
<input type="text" class="form-control"  name="Father_number" id="Father_number"  value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Father_number}}" >
</div>

<!--
<div class="form-group">
<label>Present Address</label>
<textarea class="form-control" rows="4"  name="Present_Address" id="Present_Address"></textarea>
</div>
    -->
    <div class="form-group">
<label>Permanent Address </label> <span class="text-danger">&nbsp;*</span>
<input class="form-control" rows="4" name="Permanent_Address" id="Permanent_Address"  value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Permanent_Address}}"></input>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Mother Name</label>
<input type="text" class="form-control"  name="Mother_name" id="Mother_name" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Mother_name}}">
</div>
<div class="form-group">
<label>Mother Occupation</label>
<input type="text" class="form-control"  name="Mother_job" id="Mother_job" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Mother_job}}">
</div>
<div class="form-group">
<label>Nationality</label>
<input type="text" class="form-control"  name="Parent_Nationlity" id="Parent_Nationlity"  value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Parent_Nationlity}}">
</div>
<div class="form-group">
<label>Parent Income </label><span class="text-danger">&nbsp;*</span> 
<input class="form-control" rows="4" name="Parent_Income" id="Parent_Income"  value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Parent_Income}}"></input>
</div>


</div>
</div>
</div>
<div class="mt-4">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-title ml-3">Academic Background:</div>
</div>
</div>
</div>
<div class="card-body w-100 p-3">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>School Name</label>
<input type="text" class="form-control" name="School_Name" id="School_Name" value="{{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->School_Name}}">
</div>
<!--
<div class="form-group">
<label>Honors, Awards, or Recognition Received</label>
<input type="text" class="form-control" name="Honor" id="Honor">
</div>
    -->

<div class="form-group">
<label>School Address</label>
<input class="form-control" rows="4"  name="School_Address" id="School_Address"  value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->School_Address}} "></input>
</div>

</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<!--
<div class="form-group">
<label>Extracurricular Activities or Leadership Positions</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label>Community Service or Volunteer Work</label>
<input type="text" class="form-control">
</div>
    -->
    <div class="form-group">
<label>Grade Point Average (GPA)</label> <span class="text-danger">&nbsp;*</span> 
<input type="text" class="form-control" name="GPA" id="GPA" value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->GPA}}">
</div>
<div class="form-group">
<label>School Year / Course</label>
<input type="text" class="form-control"  name="Year_Course" id="Year_Course"  value=" {{auth()->user()->student->firstwhere('scholarship_id', $edits->id)?->Year_Course}}">
</div>



</div>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Student Image</label>
<input type="file"   class="form-control" name="Student_Image" id="Student_Image" >
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Registration Form</label>
<input type="file"  class="form-control" name="Parent_Image" id="Parent_Image" >
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group text-center custom-mt-form-group">
<button type="submit" class="btn btn-primary mr-2" >Submit</button>
<a  href="/Scholarship" class="btn btn-secondary" type="reset">Cancel</a>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>





    
  <!-- end of Dashboard :) ^_^ -->












































  






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

<script type="text/javascript">
			( function() { // javascript document ready function
				var firstJavaScriptInput = document.getElementById( 'inputWarning' );
				var firstJavaScriptCheckbox = document.getElementById( 'customSwitch1' );
			
				
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