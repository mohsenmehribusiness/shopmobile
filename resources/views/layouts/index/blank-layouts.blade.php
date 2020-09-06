<!DOCTYPE html> 
<html lang="fa">
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= Url('index/index.css'); ?>" >
    @yield('head')
</head>
<body class="animsition">
<!-- header -->
@include('layouts.index.header')
<!--header -->
@include('layouts.index.slider')
<!-- Banner -->
@yield('body')
<!-- Footer -->
@include('layouts.index.footer')
<!-- end footer -->
<!-- Back to top -->
@include('layouts.index.back-to-top')
<!-- Back to top -->
<script type="text/javascript" src="<?= Url('index/js/index.js'); ?>" ></script>
@yield('script')
</body>
</html>