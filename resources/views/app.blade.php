<!doctype html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="{{{ asset('/css/bootstrap.min.css') }}}">
		<link rel="stylesheet" href="{{{ asset('/style.css') }}}">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="{{{ asset('/icons/fontawesome/css/fontawesome-all.min.css') }}}"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="{{{ asset('/icons/Iconsmind__Ultimate_Pack/Lineicons/styles.min.css') }}}"><!-- iconsmind.com Icons -->
        
        <script src="{{{ asset('/js/libs/jquery-3.3.1.min.js') }}}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
        
		
		
		{!! SEO::generate() !!}
        
  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
  </script>

</head>
<body>

		<div id="sidebar-bg">
			
      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="dashboard-home.html"><img src="/images/logo-video-layout.png" alt="Logo"></a></div>
			
			<div id="video-search-header">
				<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
			</div><!-- close .video-search-header -->
			
			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
			
			@guest
			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<div id="header-username">Guest</div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->
            @else
            			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<div id="header-username">{{ Auth::user()->name }}</div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->
            @endguest
			
			
			
			
			<div class="clearfix"></div>
			
			<nav id="mobile-navigation-pro">
			
				<ul id="mobile-menu-pro">
	            <li>
	              <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
	                TV Series
	              </a>
	            <li>
	            <li>
	              <a href="dashboard-movies.html">
						<span class="icon-Reel"></span>
	                Movies
	              </a>
	            </li>
				</ul>
				<div class="clearfix"></div>
				
				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				</div>
				
			</nav>
			
      </header>
		<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
            <ul id="vertical-sidebar-nav" class="sf-menu">
              <li class="normal-item-pro">
                <a href="dashboard-home.html">
						<span class="icon-Old-TV"></span>
                  Series
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="dashboard-movies.html">
						<span class="icon-Reel"></span>
                  Movies
                </a>
              </li>
            </ul>
				<div class="clearfix"></div>
		</nav>

@yield('content')


<script src="{{{ asset('/js/libs/popper.min.js') }}}" defer></script>
<script src="{{{ asset('/js/libs/bootstrap.min.js') }}}" defer></script>
<script src="{{{ asset('/js/navigation.js') }}}" defer></script>
<script src="{{{ asset('/js/jquery.flexslider-min.js') }}}" defer></script>
<script src="{{{ asset('/js/jquery-asRange.min.js') }}}" defer></script>
<script src="{{{ asset('/js/circle-progress.min.js') }}}" defer></script>
<script src="{{{ asset('/js/afterglow.min.js') }}}" defer></script>
<script src="{{{ asset('/js/script.js') }}}" defer></script>
<script src="{{{ asset('/js/script-dashboard.js') }}}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.15.0/lazyload.min.js"></script>
<script src="https://cdn.jsdelivr.net/webtorrent/latest/webtorrent.min.js"></script>
		
		
</body>
</html>