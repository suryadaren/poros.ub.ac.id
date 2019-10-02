<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('css/style1.css')}}">
	<title>Login</title>
</head>
<body>

	<body class="body_login">	

      <div class="row">
            <a href="{{ url('/')}}">
              <div class="col-md-12 text-right" style="color: red;padding-left: 20px;" id="login_brand">
              <img src="{{ url('img/poros.png')}}" style="width: 50px">
              </div>
            </a>
      </div>
			<div class="container">
				<div class="row row-login">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="login text-center">
							<div class="label"><h2 class="shadow"><span class="glyphicon glyphicon-user"></span> LOGIN</h2> <hr class="shadow"></div>
							
			                <form action="{{ url('loginCheck')}}" method="post" class="form">
											
			                    <div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username or E-mail" required="">
								</div>
								<div class="form-group">
									<input type="Password" class="form-control" name="password" placeholder="Password" required="">
								</div>
								<br>
								<div class="form-group">
									<input type="submit" class="btn btn-default" value=" LOGIN " style="width: 40%">
								</div>
								{{csrf_field()}}

								@if($errors->has('pesan'))
									<p>{{$errors->first('pesan')}}</p>
								@endif
							</form>
              
						</div>
					</div>
					<div class="col-md-4"></div>				
				</div>
			</div>
	</body>
</html>

</body>
</html>