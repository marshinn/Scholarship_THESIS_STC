<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title> Register</title>

<link rel="shortcut icon" href="{{('design2/img/favicon.png')}}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{('design2/plugins/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{('design2/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{('design2/plugins/icons/flags/flags.css')}}">

<link rel="stylesheet" href="{{('design2/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{('design2/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{('design2/css/style.css')}}">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="{{('design2/img/login.png')}}" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Sign Up</h1>
<p class="account-subtitle">Enter details to create your account</p>

<form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="form-group">
<label>Username <span class="login-danger">*</span></label>
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
<span class="profile-views"><i class="fas fa-user-circle"></i></span>
</div>
<div class="form-group">
<label>Email <span class="login-danger">*</span></label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
<span class="profile-views"><i class="fas fa-envelope"></i></span>
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
<span class="profile-views feather-eye toggle-password"></span>
</div>
<div class="form-group">
<label>Confirm password <span class="login-danger">*</span></label>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
<span class="profile-views feather-eye reg-toggle-password"></span>
</div>
<div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Register</button>
</div>
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or"></span>
</div>


</div>
</div>
</div>
</div>
</div>
</div>




<script src="{{('design2/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{('design2/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{('design2/js/feather.min.js')}}"></script>

<script src="{{('design2/js/script.js')}}"></script>
</body>
</html>