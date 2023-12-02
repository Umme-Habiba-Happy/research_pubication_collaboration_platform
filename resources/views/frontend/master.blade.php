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
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->


			@include('frontend.partial.navbar')


			<!-- Collect the nav links, forms, and other content for toggling -->
			
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	</section>
	
 <section id="center">
  
 <div class="container">
	   
 @yield('content')


	  </div>  	
	  
	  </section>


 <section id="research">
@yield('research');

 </section>
 



 <!-- @include('frontend.partial.about');
 
 


 @include('frontend.partial.work'); -->

<!-- 
 <section id="business">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
     <div class="business_1">
	  <h6><a href="#">MAURIS MASSA</a></h6>
	  <h2>Fusce Nec Tellus Sed Augue</h2>
	 </div>
    <div class="col-sm-4 space_all">
	   <div class="business_3">
	    <div class="port effect-1">
		  <div class="image-box">
			<img src="{{url('/frontend/img/36.jpg')}}" alt="" class="img-responsive">
		  </div>
		  <div class="text-desc text-ed">
			<h6>Education</h6>
			<p>consectetur adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur 
			   adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur adipiscing elit. Integer nec odionec odio...</p>	
		  </div>
	     </div>
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="business_3">
	    <div class="port effect-1">
		  <div class="image-box">
			<img src="{{url('/frontend/img/36.jpg')}}" alt="" class="img-responsive">
		  </div>
		  <div class="text-desc text-ed">
			<h6>Education</h6>
			<p>consectetur adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur 
			   adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur adipiscing elit. Integer nec odionec odio...</p>	
		  </div>
	     </div>
	   </div>
	  </div>
	  <div class="col-sm-4 space_all">
	   <div class="business_3">
	    <div class="port effect-1">
		  <div class="image-box">
			<img src="img/38.jpg" alt="" class="img-responsive">
		  </div>
		  <div class="text-desc text-ed">
			<h6>Adipiscing</h6>
			<p>consectetur adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur 
			   adipiscing elit. Integer nec odionec odio Sed cursus ante dapibus.consectetur adipiscing elit. Integer nec odionec odio...</p>	
		  </div>
	     </div>
	   </div>
	  </div>
   </div>
  </div>
 </div>
</section>
  -->
 <!-- <section id="trending">
  <div class="container">
   <div class="row">
    <div class="col-sm-5 space_left">
	 <div class="trending_left">
	   <h4>POPULAR SEARCH</h4>
	   <h1>Duis sagittis  Fusce<br> nec tellus</h1>
	   <p>  Fusce nec tellus sed augue semper porta Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.</p>
	   <h5><a href="#">Read more</a></h5>
	 </div>
	</div>
	<div class="col-sm-7 space_right">
	  <div class="trending_right">
	    <div class="ih-item square effect8 scale_up"><a href="#">
                      <div class="img"><img src="img/3.jpg" alt="img"></div>
                      <div class="info">
                        <h3>Detail here</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero. Sed dignissim lacinia nunc.</p>
                      </div></a></div>
	  </div>
	</div>
   </div>
  </div>
 </section>
 
 <section id="detail_home">
  <div class="container">
   <div class="row">
    <div class="col-sm-3">
	 <div class="detail_home_1 text-center">
	  <h1><i class="fa fa-link"></i></h1>
	  <h2>3826</h2>
	  <hr>
	  <h3> Adipiscing Elit</h3>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="detail_home_1 text-center">
	  <h1><i class="fa fa-flask"></i></h1>
	  <h2>266</h2>
	  <hr>
	  <h3>Sed Cursus Ante</h3>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="detail_home_1 text-center">
	  <h1><i class="fa fa-sun-o"></i></h1>
	  <h2>427</h2>
	  <hr>
	  <h3> Nulla Quis Sem</h3>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="detail_home_1 text-center">
	  <h1><i class="fa fa-user"></i></h1>
	  <h2>3144</h2>
	  <hr>
	  <h3>Duis Sagittis Ipsum</h3>
	 </div>
	</div>
   </div>
  </div>
 </section> -->
 
 <!-- <section id="blog_home">
  <div class="container">
   <div class="row">
     <div class="research clearfix">
	 <h4 class="text-center">TRENDING BLOGS</h4>
	 <h1 class="text-center">Show About Our Popular Researches</h1>
	</div>
	 <div class="blog_home clearfix">
	   <div class="col-sm-4 space_left">
	    <div class="blog_home_1">
		  <div class="ih-item square colored effect15 left_to_right"><a href="#">
                      <div class="img"><img src="img/4.jpg" alt="img"></div>
                      <div class="info">
                        <h3>Detail here</h3>
                        <p>Specification goes here</p>
                      </div></a>
					  </div>
		</div>
		<div class="blog_home_2 clearfix text-center">
		   <h6>MAR 12, 2017</h6>
		  <h3><a href="#">New Researches…</a></h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero Sed nisi Nulla quis sem at nibh elementum imperdiet.</p>
		  <ul>
			  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			  <li><a href="#"><i class="fa fa-google"></i></a></li>
			  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			  <li><a href="#"><i class="fa fa-snapchat"></i></a></li>
	      </ul>
		</div>
	   </div>
	   <div class="col-sm-4 space_left">
	    <div class="blog_home_1">
		  <div class="ih-item square colored effect15 left_to_right"><a href="#">
                      <div class="img"><img src="img/5.jpg" alt="img"></div>
                      <div class="info">
                      <h3>Detail here</h3>
                        <p>Specification goes here</p>
                      </div></a></div>
		</div>
		<div class="blog_home_2 clearfix text-center">
		   <h6>MAR 12, 2017</h6>
		  <h3><a href="#">Popular Disease…</a></h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero Sed nisi Nulla quis sem at nibh elementum imperdiet.</p>
		   <ul>
			  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			  <li><a href="#"><i class="fa fa-google"></i></a></li>
	      </ul>
		</div>
	   </div>
	   <div class="col-sm-4 space_left">
	    <div class="blog_home_1">
		  <div class="ih-item square colored effect15 left_to_right"><a href="#">
                      <div class="img"><img src="img/6.jpg" alt="img"></div>
                      <div class="info">
                      <h3>Detail here</h3>
                        <p>Specification goes here</p>
                      </div></a></div>
		</div>
		<div class="blog_home_2 clearfix text-center">
		  <h6>MAR 12, 2017</h6>
		  <h3><a href="#">Science Progress…</a></h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero Sed nisi Nulla quis sem at nibh elementum imperdiet.</p>
		   <ul>
			  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			  <li><a href="#"><i class="fa fa-google"></i></a></li>
			  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			  <li><a href="#"><i class="fa fa-snapchat"></i></a></li>
	      </ul>
		</div>
	   </div>
	 </div>
   </div>
  </div>
 </section>
  -->

@yield('footer')

       
</body>
       
</html>