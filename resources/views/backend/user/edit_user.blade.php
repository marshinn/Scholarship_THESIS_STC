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





  <script src="sweetalert.min.js"></script>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">add user</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Exam list</a></li>
<li class="breadcrumb-item"><span> Add User</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content1">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">


<form role="form" action="{{URL::to('/Update-user/'.$edit->id)}}"  method="post" onsubmit="return submitForm(this);">
@csrf
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="name" value="{{$edit->name}}">
</div>
<div class="form-group">
<label>Role</label>
<select class="form-control" name="role" id="exampleFormControlSelect1">
<option value="Admin" {{'Admin' == $edit-> role ? 'selected' : ''}}>Admin</option>
<option value="Student" {{'Student' == $edit-> role ? 'selected' : ''}}>Student</option>
</select>
</div>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="email" value="{{$edit->email}}">
</div>

<div class="form-group">
<label>Password</label>
<input type="Password" class="form-control" name="password" value="{{$edit->password}}">
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="Password" class="form-control" value="{{$edit->password}}">
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary mr-2" type="submit">Submit</button>
<a href="/User" class="btn btn-secondary" type="reset">Cancel</a>
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