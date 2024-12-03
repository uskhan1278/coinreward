	<header class="header">
		<div class="top-bar d-block d-xl-none">
			<ul class="list-inline text-right m-0">
				<li class="list-inline-item">
					<a class="nav-link" href="{{route('login')}}"><?php if(session('email')){ echo "Sign out";}else {echo "Sign in";}?></a>
				</li>	
				<li class="list-inline-item">
					<a class="nav-link" href="{{route('register')}}">Get Started</a>
				</li>
				<li class="list-inline-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Language</a>
					<div id="langmenu" class="dropdown-menu">
						<div class="dropdown-item active" data-text="English"><i class="icon warning flag"></i>English</div>
						<a href="" class="dropdown-item" data-lang="in" data-text="Hindi"><i class="icon flag"></i>Hindi</a>
						<a href="" class="dropdown-item" data-lang="it" data-text="Indonesian"><i class="icon flag"></i>Indonesian</a>
						<a href="" class="dropdown-item" data-lang="ru" data-text="Russian"><i class="icon flag"></i>Russian</a>
					</div>
				</li>
			</ul>
		</div>	
	
		<!-- Main navigation -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top">
			<div class="container-fluid wide">
				<!-- Brand -->
				<a href="{{route('index')}}"  class="navbar-brand">
					<img src="{{URL::asset('public/site_assets/images/logo.png')}}"/>
				</a>

				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('index')}}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('about')}}">About Coin Reward</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('howitworks')}}">How it works</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('affiliates')}}">Affiliates</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="{{route('gethelp')}}">Get help</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('faq')}}">Faq</a></li>
								<li><a class="dropdown-item" href="{{route('news')}}">News</a></li>
								<li><a class="dropdown-item" href="{{route('blog')}}">Blog</a></li> 
								<li><a class="dropdown-item" href="#">Contact us </a></li>
							</ul>
						</li>
						<li class="nav-item highlighted">
							<a class="nav-link" href="{{route('login')}}"><?php if(session('email')){ echo "Sign out";}else {echo "Sign in";}?></a>
						</li>
						<li class="nav-item highlighted">
							<a class="nav-link" href="{{route('register')}}">Get Started</a>
						</li>
						<li class="nav-item highlighted blue dropdown">
							<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Language</a>
							<div id="langmenu" class="dropdown-menu">
								<div class="dropdown-item active" data-text="English"><i class="icon warning flag"></i>English</div>
								<a href="" class="dropdown-item" data-lang="in" data-text="Hindi"><i class="icon flag"></i>Hindi</a>
								<a href="" class="dropdown-item" data-lang="it" data-text="Indonesian"><i class="icon flag"></i>Indonesian</a>
								<a href="" class="dropdown-item" data-lang="ru" data-text="Russian"><i class="icon flag"></i>Russian</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Main navigation end -->
	</header>