<div class="navbar-header page-scroll">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span> </button>
	<a class="navbar-brand" href="index.html"><i class="fa fa-flask"></i>Scientific Zone</a>
</div>
@guest
<a class="btn btn-info" href="{{route('user.login')}}"><i class=""></i>Login </a>

<a class="btn btn-info" href="{{route('user.registration')}}"><i class=""></i>Registration</a>
@endguest

@auth
<a class="btn btn-info" href="{{route('user.logout')}}"><i class=""></i>Logout</a>
<a href="{{route('Profile')}}">{{auth()->user()->name}}</a>
@endauth


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">
	
		<form action="{{route('search')}} " method = "get">
					<input type="text" placeholder="search">
					<button class="btn btn-info" type="submit">Search</button>
		</form>

		<li><a class="color_1 active_1" href="{{route('homepage')}}">Home</a></li>
		<li><a class="color_1" href="{{route('sponsor')}}">Sponsor</a></li>
		
		<!-- <li ><a class=" color_1" href="blog.html">Category</a></li> -->
		<li><a class=" color_1" href="{{route('research')}}">Research</a></li>
		<li><a class="color_1" href="gallery.html">Research Apply</a></li>
		<li><a class="color_1" href="contact.html">Paper</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle color_1" data-toggle="dropdown">Category<b class="caret"></b></a>
			<ul class="dropdown-menu">
			@foreach($cat as $item)
				<li><a href="">{{$item->categoryName}}</a></li>
			@endforeach	
			</ul>

		</li>
	</ul>
</div>
<div>
</div>