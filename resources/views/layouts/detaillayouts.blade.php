<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>پنل مدیریت</title>
    <!-- Bootstrap CSS -->
	<link href="<?= Url('panel/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="<?= Url('panel/css/dash.css'); ?>" rel="stylesheet">
	<!-- me -->
	@yield('head')
      <link href="<?= Url('fonts/font.css'); ?>" rel="stylesheet">
	<!-- me -->
  </head>
  <body>
                <div>
                        @yield('up')
                </div>
                <div>
                    @yield('content')
                </div>
                <div>
                    @yield('down')
                </div>
          @include('layouts.end-detail-layouts')
    </body>
</html>