<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>پنل مدیریت</title>
    <!-- Bootstrap core CSS -->
	<link href="<?= Url('panel/admin.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
	<!-- me -->
	@yield('head')
      <link href="<?= Url('fonts/font.css'); ?>" rel="stylesheet">
	<!-- me -->
  </head>
  <body>
  <div class="header_progress sticky-top">
      <div class="progress-container_progress">
          <div class="progress-bar_progress" id="myBar"></div>
      </div>
  </div>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3  col-md-2 mr-0" href="#">موبایل</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{route('logout')}}">خروج</a>
        </li>
      </ul>
    </nav>
	<!-- -->
    <div class="container-fluid">
      <div class="row">
		@include('layouts.nav-right')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h3">
				@yield('head-content')
			</h1>
          </div>
				@yield('content')
        </main>
	  </div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= Url('panel/admin.js'); ?>"></script>
    <script>
      feather.replace()
    </script>
	<!-- me -->
	@yield('script')
  <script>
      // When the user scrolls the page, execute myFunction
      window.onscroll = function() {myFunction()};
      function myFunction() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("myBar").style.width = scrolled + "%";
      }
  </script>
	<!-- me -->
  </body>
</html>