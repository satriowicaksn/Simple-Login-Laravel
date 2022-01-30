<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Sign In</title>
  
	<link rel="stylesheet" href="{{ url('assets/css/vendors_css.css') }}">
	  	<link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('css/skin_color.css') }}">	

</head>
	
<body class="hold-transition theme-primary bg-img">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
                                    <h2 class="text-primary text-center">
                                        <img src="https://media.istockphoto.com/vectors/white-lock-icon-on-blue-circle-safety-sign-security-locked-button-vector-id1139724620?k=20&m=1139724620&s=170667a&w=0&h=AEb6rnFjshGuBcNOhkedcVTlXb9oRHr57OAq8vxAfxM=" alt="login_icon" width="100">
                                    </h2>
								<p class="mb-0">Sign in to continue to Dashboard.</p>							
							</div>
							<div class="p-40">
								<form action="{{ url('login') }}" method="post">
                                {{ csrf_field() }}
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa fa-user"></i></span>
											<input type="text" name="username" class="form-control ps-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="fa-fa-key"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
                                    <div class="form-group">
										<button class="btn btn-sm btn-block btn-primary" type="submit">Sign In</button>
									</div>
								</form>		
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{url('js/vendors.min.js')}}"></script>
	<script src="{{url('js/pages/chat-popup.js')}}"></script>	
    <script src="https://use.fontawesome.com/8881079f7a.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
