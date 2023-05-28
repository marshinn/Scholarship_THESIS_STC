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
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">{{$tada->Fname}} &nbsp; {{$tada->Lname}}</h5>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i> Dashboard</a></li>

</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="aboutprofile-sidebar">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-12">
<div class="aboutprofile">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="aboutprofile-pic">
<img class="card-img-top" src="{{(!empty($tada->Student_Imag))? url(  'upload/image/'.$tada->Student_Image):url('upload/no_image.jpg')}}"
                        alt="Card image">
</div>
<div class="aboutprofile-name">
<h5 class="text-center mt-2">Full Name : &nbsp; {{$tada->Fname}} &nbsp; {{$tada->Lname}}</h5>
<p class="text-center">School Name :&nbsp;  {{$tada->School_Name}}</p>
</div>
<ul class="list-group list-group-flush">

</ul>
</div>
</div>
</div>
</div>
</div>
<div class="aboutme-profile">
<div class="card">
<div class="card-header">
<h4 class="page-title">
Scholarship Criteria
</h4>
</div>
<div class="card-body">

<ul class="categories">
<center><p>Scholarship Name &nbsp;: &nbsp; <b>{{$tada->Scholarship->title}}</b> </p></center>
<li><a href=""><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i><b> Grades:</b><i class="blog-author-name"> &nbsp;{{(!empty($tada->Scholarship->grade))? $tada->Scholarship->grade:$swabe}} {{(!empty($tada->Scholarship->grade2))? '-'.' '.$tada->Scholarship->grade2.' '.'Average'.' '.'Range':$swabe}}   </i></a> <p class="blog-author-name text-dark badge badge-pill bg-primary float-right">{{ ($tada->GPA) == ($tada->Scholarship->grade) || (($tada->GPA) >= ($tada->Scholarship->grade)  && ($tada->GPA) <= ($tada->Scholarship->grade2)  ) ?   'ok':''}}</p> 
<p class="blog-author-name text-danger badge badge-pill  float-right fa fa-times-circle  ">{{(!empty($tada->Scholarship->grade)) && (  ($tada->GPA) != ($tada->Scholarship->grade) && !(($tada->GPA) >= ($tada->Scholarship->grade) && ($tada->GPA) <= ($tada->Scholarship->grade2)) ) ?  ' ':''}}</p>  </li>

<li><a href=""><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i><b> Address:</b><i class="blog-author-name"> &nbsp;{{(!empty($tada->Scholarship->address))? $tada->Scholarship->address . ' '. 'Only' :$swabe}}</i></a> <p class="blog-author-name text-dark badge badge-pill bg-primary float-right">{{($tada->Permanent_Address) == ($tada->Scholarship->address) ?  'ok':''}}</p> 
<p class="blog-author-name text-danger badge badge-pill  float-right fa fa-times-circle  ">{{(!empty($tada->Scholarship->address)) && ($tada->Permanent_Address) != ($tada->Scholarship->address) ?  '':''}}</p>  </li>


<li><a href=""><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i><b> Parent Income:</b><i class="blog-author-name"> &nbsp;{{(!empty($tada->Scholarship->Parent_Income))? $tada->Scholarship->Parent_Income . ' '. 'Pesos':$swabe}}</i></a> <p class="blog-author-name text-dark badge badge-pill bg-primary float-right">{{($tada->Parent_Income) == ($tada->Scholarship->Parent_Income) ?  'ok':''}}</p> 
<p class="blog-author-name text-danger badge badge-pill  float-right fa fa-times-circle  ">{{(!empty($tada->Scholarship->Parent_Income)) && ($tada->Parent_Income) != ($tada->Scholarship->Parent_Income) ?  ' ':''}}</p>  </li>



</ul>
</div>
</div>
</div>
<div class="aboutprofile-address">
<div class="card">
<div class="card-header">
<h4 class="page-title post-left">Status</h4>
<i class= "post-right">Current : &nbsp; {{$tada->Status}}</i>
</div>
<div class="card-body">
<a class="btn btn-success" href="/Scholarship" ><i class="fas fa-arrow-right"></i>&nbsp; &nbsp; Approve &nbsp; &nbsp; </a> 
<a class="btn btn-danger float-right" href=" " ><i class="fas fa-ban"></i>&nbsp; &nbsp; Remove &nbsp; &nbsp; </a> 
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
<div class="profile-content">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="page-title">
 &nbsp;Personal Information
</h4>
</div>

<div class="card-body">
<div id="biography" class="biography">
<div class="row">
<div class="col-md-3 col-6"> <strong>Full Name</strong>
<p class="text-muted">{{$tada->Fname}} &nbsp; {{$tada->Lname}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Mobile</strong>
<p class="text-muted">{{$tada->Mobile_number}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Email</strong>
<p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543e31323226312d14312c35392438317a373b39">[email&#160;protected]</a></p>
</div>
<div class="col-md-3 col-6"> <strong>Address</strong>
<p class="text-muted">{{$tada->Permanent_Address}}</p>
</div>
</div>
<hr>
<hr>
<div class="row">
<div class="col-md-3 col-6"> <strong>Birthdate</strong>
<p class="text-muted"> {{ date('M  d,  Y', strtotime($tada->Birthdate))}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Gender</strong>
<p class="text-muted">{{$tada->Gender}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Religion</strong>
<p class="text-muted">{{$tada->Religion}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Nationality</strong>
<p class="text-muted">{{$tada->Nationality}}</p>
</div>
</div>
<hr>


<div class="card-header">
<h4 class="page-title">
Education
</h4>
</div>
<hr>
<div class="row">
<div class="col-md-3 col-6"> <strong>School Name</strong>
<p class="text-muted">{{$tada->School_Name}}</p>
</div>
<div class="col-md-3 col-6"> <strong>School Address</strong>
<p class="text-muted">{{$tada->School_Address}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Grade</strong>
<p class="text-muted">{{$tada->GPA}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Year and Course</strong>
<p class="text-muted">{{$tada->Year_Course}}</p>
</div>
</div>
<hr>
<hr>
<div class="row">
<div class="col-md-3 col-6"> <strong>Registration Form</strong>
<p></p>
<span class="name" ><b>Download :  &nbsp;</b>  </span>
<a  href= "{{$tada->Parent_Image}}" class="btn btn-outline-danger mr-2" download> <img src="../../assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></a>

</div>



</div>
<hr>
<div class="card-header">
<h4 class="page-title">
Parent Information
</h4>
</div>
<hr>
<div class="row">
<div class="col-md-3 col-6"> <strong>Father Name</strong>
<p class="text-muted">{{$tada->Father_name}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Father Occupation</strong>
<p class="text-muted">{{$tada->Father_job}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Mother Name</strong>
<p class="text-muted">{{$tada->Mother_name}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Mother Occupation</strong>
<p class="text-muted">{{$tada->Mother_job}}</p>
</div>
</div>
<hr>
<hr>
<div class="row">
<div class="col-md-3 col-6"> <strong>Parent Income Monthly</strong>
<p class="text-muted">{{$tada->Parent_Income}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Parent Nationality</strong>
<p class="text-muted">{{$tada->Parent_Nationlity}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Present Address</strong>
<p class="text-muted">{{$tada->Present_Address}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Parent Number</strong>
<p class="text-muted">{{$tada->Mobile_number}}</p>
</div>
</div>
<hr>
</div>
</div>
</div>
</div>
</div>
</div>
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