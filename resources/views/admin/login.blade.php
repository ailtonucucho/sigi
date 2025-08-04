
<!DOCTYPE html>
<html lang="pt">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin - Login</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/admin/assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/font-awesome.min.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/style.css')}}">

		<!--[if lt IE 9]>
			<script src="{{asset('template/admin/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('template/admin/assets/js/respond.min.js')}}"></script>
		<![endif]-->

    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="page-wrappers login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Admin Login Panel</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<!-- Form -->
								<form method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group">
										<input class="form-control" name="email" type="text" placeholder="Email">
                                        @error('email')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password">
                                        @error('password')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="login" type="submit">Entrar</button>
									</div>
								</form>


							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('template/admin/assets/js/jquery-3.2.1.min.js')}}"></script>
		<!-- Bootstrap Core JS -->
        <script src="{{asset('template/admin/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('template/admin/assets/js/bootstrap.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('template/admin/assets/js/script.js')}}"></script>

    </body>

</html>