	
<div style = "display:none;" class  = "mobileMenu">
	<div class = "closeMobileMenu"></div>
	
	<a class="logo" href="{{ route('home') }}"></a>
	
	<ul class = "menu">
		@include('parts.menu')
	</ul>
	
	<div class = "hcontacts">
		
		<span class = "sb">
			@include('parts.soc_lnk')
		</span>
		
		<a class = "phone_in_head black_label" href = "tel:+79036330801">+7 903 633 08 01</a>
	</div>
</div>
	
<header>
		<a style = "@if (Route::currentRouteName() !== "home" ) display: block; @endif" class = "mini-logo" href = "{{ route('home') }}">
			
			<img src = "{{ route('home') }}/img/logo-mini.svg"/></a>
		<div class="hamburger">
		  <span class="hamburger-top"></span>
		  <span class="hamburger-middle"></span>
		  <span class="hamburger-bottom"></span>
		</div>
		
		
		<ul class = "menu">
			@include('parts.menu')
		</ul>
		<div class = "hcontacts">
			@include('parts.soc_lnk')
			<a class = "phone_in_head black_label" href = "tel:+79036330801">+7 903 633 08 01</a>
		</div>
</header>