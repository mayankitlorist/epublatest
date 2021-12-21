<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('style.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

	<link rel="stylesheet" href="{{url('icons/fontawesome/css/fontawesome-all.min.css')}}"><!-- FontAwesome Icons -->
	<link rel="stylesheet" href="{{url('icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css')}}"><!-- iconsmind.com Icons -->

	<title>Book3</title>
	<style media="screen">
	.modal-body-pro .registration-social-login-container{
		width: 100%
	}
	.registration-social-login-container{border-radius: 0}
		.registration-steps-page-container {
			box-shadow: none;
			border: 0;
			padding: 25px;
		}
	.wrapperCheck{
		display: grid;
		grid-gap: 1rem;
		justify-items: stretch;
		text-align: center;
		grid-template-columns: repeat(auto-fit, minmax(150px,1fr))
	}
		.inteGen {
			border: 1px solid #000000;
			background: #ffffff;
			padding: 15px;
			width: 100%;
			border-radius: 10px;
			text-align: center;
			white-space: nowrap;
			margin: 15px 20px
		}

		.checkClass:checked+label {
			border: 2px solid #3db13d;
			color: #3db13d;

		}

		input[type=checkbox],
		input[type=radio] {
			display: none
		}

		#usererror{

			color:red;
			text-align:center;
		}
		#msg{
			color:red;
			text-align:center;
			}
	</style>
</head>

<body>




	<div class="modal fade" id="LoginModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header-pro">
					<h2>Welcome Back</h2>
					<h6>Sign in to your account to continue</h6>
				</div>
				<span id="msg"></span>
				<div class="modal-body-pro social-login-modal-body-pro">

					<div class="registration-social-login-container">
						
							<div class="form-group">
								<input type="text" class="form-control" id="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-green-pro btn-display-block login">Sign In</button>
							</div>
							<div class="container-fluid">
								<div class="row no-gutters">
									<div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
									<div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
								</div>
							</div>

						
                	</div>
				
				</div>
				<a class="not-a-member-pro" href="{{url('Dashboard_Home')}}" data-toggle="modal" data-dismiss="modal" data-target="#LoginModal1">Not a member? <span>Join Today!</span></a>
			</div>
		</div>
	</div>


	<div class="modal fade" id="LoginModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="LoginModal1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header-pro">
					<h2>Welcome</h2>
					<h6>Sign Up</h6>
				</div>
				<span id="usererror"></span>
				<div class="modal-body-pro social-login-modal-body-pro">

					<div class="registration-steps-page-container">

							<div class="registration-social-login-container">
								<div class="form-group">
									<label for="School-name" class="col-form-label">School Name*</label>
									<input type="text" class="form-control" id="School_name" placeholder="Search here..." list="fileSearch1" autocomplete="off" required>
									
									<datalist id="fileSearch1" class="schoolchose">

                            		</datalist>
								</div>
								<div class="form-group">
									<label for="Role" class="col-form-label">Role Type*</label>
									<select class="form-control" id="role" required>
										<option value="">Select Roletype</option>/>
										@foreach ($role as $roles)
										<option value="{{ $roles->id }}">
											{{ $roles->role_name }}
										</option>
										@endforeach
									</select>

								</div>
								<div class="form-group">
									<label for="Role" class="col-form-label">Mother Language*</label>
									<select class="form-control" id="language" name="language" required>
										<option value="">Select Language</option>/>
										@foreach ($language as $languages)
										<option value="{{ $languages->id }}">
											{{ $languages->language_name }}
										</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="Role" class="col-form-label">Grade*</label>
									<select class="form-control" id="grade" name="grade" required>
										<option value="">Select grade</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
	
									</select>
								</div>
								<div class="form-group">
									<label for="full-name" class="col-form-label">First Name*</label>
									<input type="text" class="form-control" id="first_name" placeholder="John Doe" required>
								</div>
								<div class="form-group">
									<label for="full-name" class="col-form-label">Last Name*</label>
									<input type="text" class="form-control" id="last_name" placeholder="John Doe" required>
								</div>
								<div class="form-group">
									<label for="full-name" class="col-form-label">Email*</label>
									<input type="email" class="form-control" id="email" placeholder="John Doe" required>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label for="password" class="col-form-label">Password*</label>
											<input type="password" class="form-control" id="newpassword" placeholder="Password" required>
										</div>
										<div class="col">
											<label for="confirm-password" class="col-form-label">&nbsp;</label>
											<input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
										</div>
									</div>
								</div>

							</div>
						
							<div class="form-group last-form-group-continue">
								
								<button type="submit" class="btn btn-primary regsubmit">Continue</button>
								<span class="checkbox-remember-pro"><input type="checkbox" id="checkbox-terms"><label for="checkbox-terms" class="col-form-label">By clicking "Continue", you agree to our <a href="#!">Terms of Use</a> and


							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="LoginModal2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="LoginModal2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header-pro">
					<h2>Welcome</h2>
					<h4>Select Genre</h4>
				</div>
				<div class="modal-body-pro social-login-modal-body-pro">
				<form method="post" action="{{ url('adduserbook') }}">
              	@csrf
				  <input type="hidden" name="user_id" id="userid" value="userid" >
				   	<div class="registration-steps-page-container">
						<div class="container-fluid wrapper wrapperCheck">
							@foreach($book as $books)
								<div class="">
									<input type="checkbox" class="checkClass booksub" name="bookid[]" id="box_{{$books->id}}" value="{{$books->id}}"/>
									<label class="inteGen" for="box_{{$books->id}}">{{$books->book_name}}</label>
								</div>
							@endforeach	
						</div>

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-green-pro btn-display-block">Continue</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="{{url('js/libs/jquery-3.3.1.min.js')}}"></script>
	<script src="{{url('js/libs/popper.min.js')}}" defer></script>
	<script src="{{url('js/libs/bootstrap.min.js')}}" defer></script>

	<script src="{{url('js/navigation.js')}}" defer></script>
	<script src="{{url('js/jquery.flexslider-min.js')}}" defer></script>
	<script src="{{url('js/script.js')}}" defer></script>
	<script type="text/javascript">

		$(document).ready(function() {
			$('#LoginModal').modal('show');

			$(document).bind("contextmenu",function(e){
					return false;
			}); 
		});


		$('#School_name').keypress(function() {
            var value = document.getElementById('School_name').value;
		
            if(value){
              $.ajax({
                url: "{{ url('/getschool') }}",
                method: 'POST',
                data: { "_token" : "{{csrf_token()}}", 'schoolvalue': value},
                success: function(data){
                  console.log(data)
				   $('.schoolchose').empty();
                    $.each(data , function (index, value){
						console.log(value.school_name)
						var sname =  '<option value="'+value.school_name+'">'+value.school_name+'</option>';
						$('.schoolchose').append(sname);
					});
                }
              });


            }
        });

		$(document).on('change','.schoolchose',function(){
			var school = $(this).attr('data-name');
			$('#School_name').val(school);
		});

		$(document).on('click', '.regsubmit', function(){

			var schoolid = $('#School_name').val();
			var role = $('#role').val();
			var first_name = $('#first_name').val();
			var last_name = $('#last_name').val();
			var email = $('#email').val();
			var password = $('#newpassword').val();
			var confirmpassword = $('#confirm-password').val();
			var language = $('#language').val();
			var grade = $('#grade').val();

              $.ajax({
                url: "{{ url('/adduser') }}",
                method: 'POST',
                data: { "_token" : "{{csrf_token()}}", 'schoolid': schoolid, 'role':role, 'first_name':first_name, 'email':email, 'password':password, 'confirmpassword':confirmpassword, 'language':language, 'last_name':last_name, 'grade':grade},
                success: function(data){
                  console.log(data)
                  if(data == 'error'){
					$("#usererror").html("Something went wrong!");
				  }else{
					$("#userid").val(data);
					$("#LoginModal1").modal('hide')
					$("#LoginModal2").modal('show')
				  }
                }
              });

		})

		$(document).on('click', '.login', function(){
			
			var username = $('#username').val();
			var password = $('#password').val();
			
			if(username || password){
				$.ajax({
                url: "{{ url('/login') }}",
                method: 'POST',
                data: { "_token" : "{{csrf_token()}}", 'username': username, 'password':password},
                success: function(data){
                  console.log(data)

				  if(data == 'admin'){
					 window.location.replace('{{url("admin/")}}');
				  }else if(data == 'success'){
					 window.location.replace('{{url("Home")}}');
				  }else{
					$('#msg').html("Check your email and password !");
				  }
				}
              });
			}else{
				$('#msg').html("Both Field are required");
			}

		})
	</script>
</body>

</html>
