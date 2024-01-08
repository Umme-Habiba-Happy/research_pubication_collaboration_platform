<!DOCTYPE html>
<html lang="en">
<head>
@notifyCss
	<meta name="robots" content="noindex,nofollow" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ScholarLink</title>
	<link href="{{url('/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('/frontend')}}/css/style.css" rel="stylesheet">
	<link rel="{{url('/frontend')}}/stylesheet" type="text/css" href="{{url('/frontend')}}/css/font-awesome.min.css" />
	<script src="{{url('/frontend')}}/js/jquery-2.1.1.min.js"></script>
	<script src="{{url('/frontend')}}/js/bootstrap.min.js"></script>
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2Fz71n4ZmN73gpj0bRLb9BQFDuP1F1kt" crossorigin="anonymous">
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-ggOA2sFz7MHlSSxjJ5RMEc933xkd94TywF2go/gmTw2G9tZI7MfEFKouN/JUn5Zj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2Fz71n4ZmN73gpj0bRLb9BQFDuP1F1kt" crossorigin="anonymous"></script>
		<style>
		.user-profile {
			display: flex;
			align-items: center;
			/* Center items vertically */
		}
		.profile-link {
			display: inline-block;
			overflow: hidden;
			border-radius: 50%;
		}
		.profile-image {
			display: block;
			width: 50px;
			/* Set your desired width */
			height: 50px;
			/* Set your desired height */
			object-fit: cover;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<section id="header col-12">
		<nav class="navbar navbar-default navbar-fixed-top nav_home">
			<!-- Brand and toggle get grouped for better mobile display -->
			@include('frontend.partial.navbar')
			<!-- Collect the nav links, forms, and other content for toggling -->
			<!-- /.navbar-collapse -->
			<!-- /.container-fluid -->
		</nav>
	</section>
	


	
	<section id="center">
		<div class="container">
			@yield('content')
		</div>
	</section>

	<x-notify::notify />
	
	@notifyJs
	@yield('footer')
</body>
</html>