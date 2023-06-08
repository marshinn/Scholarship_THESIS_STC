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
<input class="form-control" placeholder="Description" rows="4"  name="description" id="description" ></input>
</div>
<div class="form-group">
<label>Scholarship Slots</label>
<input type="number" class="form-control" name="Slot" id="Slot">
</div>

<div class="form-group">
<label>Scholarship Deadline</label>
<input type="datetime-local" class="form-control" name="deadline" id="deadline">
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
    <script>  
@endsection