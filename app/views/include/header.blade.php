<div class="contain-to-grid">
	<nav class="top-bar pickup-top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1><a href="{{url('/')}}"><img src="{{asset('assets/images/logo_PU_white.png')}}" alt="pickup" width="150"></a></h1>
			</li>
			 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				@if(Auth::check())
					<li><a href="{{url('users'.'/'.Auth::user()->id)}}" class="button tiny alert"><i class="fi-torso"></i> {{Auth::user()->realname}}</a></li>
					<li><a href="{{url('logout')}}">LOGOUT</a></li>
				@else
					<li><a href="{{url('login')}}" class="button tiny">LOGIN</a></li>
				@endif
				
			</ul>

			<!-- Left Nav Section -->
			<ul class="left">
				<li><a href="{{url('search')}}">RENT A CAR</a></li>
				<li><a href="{{url('administrator')}}">ADMINISTRATOR</a></li>
			</ul>
		</section>
	</nav>
</div>