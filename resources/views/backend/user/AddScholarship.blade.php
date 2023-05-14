@extends('backend.layout.apps')
@section('content')
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
<h5 class="text-uppercase mb-0 mt-0 page-title">add Scholarship</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="">Home</a></li>
<li class="breadcrumb-item"><a href="">Scholarship</a></li>
<li class="breadcrumb-item"><span> Add Scholarship</span></li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<form action="/p" enctype="multipart/form-data" method="post">
@csrf
<div class="form-group">
<label>Scholarship Name</label>
<input type="text" class="form-control" name="title" id="title">
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
<textarea class="form-control" placeholder="Description" rows="4"  name="description" id="description" ></textarea>
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
<div class="custom-control custom-switch" >
<input type="checkbox" class="custom-control-input" id="customSwitch1" for="customSwitch1"  checked="checked" >
<label class="custom-control-label" for="customSwitch1">Location</label>
</div>
</div>
<div class="form-group">

<input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ..." disabled="disabled" name="address">
</div>

<div class="form-group">
                       
<div class="custom-control custom-switch">
<input type="checkbox" class="custom-control-input" id="customSwitch2" for="customSwitch2" checked="checked" >
<label class="custom-control-label" for="customSwitch2">GWA</label>
</div>
</div>
<div class="form-group">

<input type="text" class="form-control is-warning" id="inputWarning2" placeholder="Enter ..." disabled="disabled" name="grade">
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
    <script>  
@endsection