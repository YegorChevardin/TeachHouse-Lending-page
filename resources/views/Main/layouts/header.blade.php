<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Speakig club TeachHouse</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="csrf-token" content="{{ csrf_token() }}"/>
		<meta name="author" content="Yegor Chevardin, Andy Fedorchuk"/>
		<!--HERE WILL BE KEY WORD FOR WEBSITE-->
		<!--CSS FILES SECTION START-->
		@include('Main.layouts.css')
		<!--CSS FILES SECTION END -->
		<!--JQUERY SECTION START-->
		<script type="text/javascript" src="{{asset('Main/js/jquery/main_jquery.js')}}"></script>
		<!--JQUERY SECTION END-->
		<!--AJAX SECTION START-->
		<script type="text/javascript" src="{{ asset('Main/js/ajax/posts.js') }}"></script>
		<!--AJAX SECTION END-->
	</head>
	<body>
		<!--NAVBAR SECTION START-->
		<nav class="navbar fixed-top navbar-light bg-primary navbar-expand-xl navbar-template">
			<button id="contact-button" title="contacts" class="btn btn-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContacts" aria-controls="navbarSupportedContacts" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-header">
				<a class="navbar-brand" href="#">TeachHouse</a>
			</div>
			<button id="list-button" title="menu" class="btn btn-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
			</button>
			<!--SUPPORTED CONTENT SECTION START-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  	<li class="nav-item">
						<a class="nav-link" id="spoken-english-button" href="#spoken-english">Spoken English</a>
				  	</li>
					<li class="nav-item">
						<a class="nav-link" id="about-us-button" href="#about-us">About us</a>
				  	</li>
					<li class="nav-item">
						<a class="nav-link" id="news-button" href="#news">News</a>
				  	</li>
					<li class="nav-item">
						<a class="nav-link" id="email-button" href="#email">Email us</a>
				  	</li>
					<li class="nav-item">
						<a class="nav-link" id="sing-up-button" href="#sing-up">Sing up for our meeting</a>
				  	</li>
				</ul>
			</div>
			<!--SUPPORTED CONTENT SECTION END-->
			<!--SUPPORTED CONTACTS SECTION START-->
			<div class="collapse navbar-collapse" id="navbarSupportedContacts">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Telephone number: <span class="badge badge-light">+380999425174</span></a></li>
				  	<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Social media
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  		<a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100045901071364" target="_blank"><span class="badge badge-primary social-badge">Facebook</span></a>
					  		<a class="dropdown-item" href="https://instagram.com/teachhousenikopol?igshid=y5vg4zxlotjk" target="_blank"><span class="badge badge-instagram social-badge">Instagram</span></a>
						</div>
				  	</li>
				</ul>
			</div>
			<!--SUPPORTED CONTACTS SECTION END-->
		</nav>
		<!--NAVBAR SECTION END-->
		<!--HEADER SECTION START-->
		<header>
			<!--CARUSEL SECTION START-->
			<div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="5000">
				<ol class="carousel-indicators">
					<li data-target="#carousel1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel1" data-slide-to="1"></li>
					<li data-target="#carousel1" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{asset('Main/css/pictures/carousel/Montecristo.jpg')}}" class="d-block w-100" alt=""/>
						<div class="carousel-caption d-none d-md-block">
							<h2>Welcome to TeachHouse page!</h2>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{asset('Main/css/pictures/carousel/Andy.jpg')}}" class="d-block w-100" alt="..."/>
						<div class="carousel-caption d-none d-md-block">
							<h2 style="color: #4898ed">Here you can read some news about our meetings!</h2>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{asset('Main/css/pictures/carousel/logo.png')}}" class="d-block w-100" alt="..."/>
						<div class="carousel-caption d-none d-md-block">
							<h2>And, of course,sing up for our meeting!</h2>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--CARUEL SECTION END-->
		</header>
		<!--HEADER SECTION END-->