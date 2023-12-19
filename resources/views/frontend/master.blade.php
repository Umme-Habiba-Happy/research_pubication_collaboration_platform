<!DOCTYPE html>
<html lang="en">
  <head>
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

  </head>
  
<body>
 <section id="header">
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



 



@yield('footer')

       
</body>
       
</html>