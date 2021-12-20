<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Woods</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{url('frontend/images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{url('frontend/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
@include('website.fixed.header')
		

@yield('content')
	

@include('website.fixed.footer')
	<!-- copyright section start -->	
	<div class="copyright">
		<div class="container">
			<p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
		</div>
	</div>
	<!-- copyright section end -->	

      <!-- Javascript files-->
      <script src="{{url('frontend/js/jquery.min.js')}}"></script>
      <script src="{{url('frontend/js/popper.min.js')}}"></script>
      <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('frontend/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{url('frontend/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         </script>	

</body>
</html>