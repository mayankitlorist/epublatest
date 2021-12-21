<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('public/style.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

	<link rel="stylesheet" href="{{url('public/icons/fontawesome/css/fontawesome-all.min.css')}}"><!-- FontAwesome Icons -->
	<link rel="stylesheet" href="{{url('public/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css')}}"><!-- iconsmind.com Icons -->

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
					<h2>Admin Login</h2>
					<!-- <h6>Sign in to your account to continue</h6> -->
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
                	</div>
				</div>
			</div>
		</div>
	</div>




	<script src="{{url('public/js/libs/jquery-3.3.1.min.js')}}"></script>
	<script src="{{url('public/js/libs/popper.min.js')}}" defer></script>
	<script src="{{url('public/js/libs/bootstrap.min.js')}}" defer></script>

	<script src="{{url('public/js/navigation.js')}}" defer></script>
	<script src="{{url('public/js/jquery.flexslider-min.js')}}" defer></script>
	<script src="{{url('public/js/script.js')}}" defer></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#LoginModal').modal('show');
		});

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

				  if(data == 'success'){
					 window.location.replace('{{url("Dashboard_Home")}}');
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
