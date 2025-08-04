
<!DOCTYPE html>
<html lang="pt">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{asset('template/admin/assets/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('template/admin/assets/css/style.css')}}">
		
		<!--[if lt IE 9]>
			<script src="{{asset('template/admin/assets/js/html5shiv.min.js')}}')}}"></script>
			<script src="{{asset('template/admin/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
  <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="{{asset('template/admin/assets/img/rsadmin.png')}}" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="{{asset('template/admin/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->

				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>



				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Right Menu -->
				<ul class="nav user-menu">


					<!-- User Menu -->
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="{{asset('template/admin/assets/img/profiles/avatar-02.png')}}" width="31" alt="{{Auth::user()->name}}"></span>
						</a>

						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="{{asset('template/admin/assets/img/profiles/avatar-01.png')}}" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{Auth::user()->name}}</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Perfil</a>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Sair</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
						</div>
					</li>

					<!-- /User Menu -->

				</ul>
				<!-- /Header Right Menu -->

            </div>

			<!-- header --->



						<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Main</span>
							</li>
							<li>
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>

							<!-- <li class="menu-title">
								<span>Authentication</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Entrar </a></li>
									<li><a href="register.php"> Registrar </a></li>

								</ul>
							</li> -->
							<li class="menu-title">
								<span>Usuários</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span>Usuários </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/admin/users?role=admin"> Administrador </a></li>
									<li><a href="/admin/users?role=user"> Usuário </a></li>
									<li><a href="/admin/users?role=agent"> Agentes </a></li>
									<li><a href="/admin/users?role=builder"> Construtores </a></li>
								</ul>
							</li>

							<li class="menu-title">
								<span>Cidades e Bairros</span>
							</li>

							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Cidades e Bairros</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									{{-- <li><a href="/admin/cities"> Cidade </a></li> --}}
									<li><a href="/admin/districts"> Bairro </a></li>
								</ul>
							</li>

							<li class="menu-title">
								<span>Gestão Propriedade</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Propriedade</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Adicionar</a></li>
									<li><a href="propertyview.php"> Verificar </a></li>

								</ul>
							</li>



							<li class="menu-title">
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Contact </a></li>
									<li><a href="feedbackview.php"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title">
								<span>About</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> About Page </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="aboutadd.php"> Add About Content </a></li>
									<li><a href="aboutview.php"> View About </a></li>
								</ul>
							</li>

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
