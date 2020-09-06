<!DOCTYPE html> 
<html lang="fa">
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= Url('index/index.css'); ?>" >
    <meta name="csrf-token" content="{{csrf_token()}}" >
    @yield('head')
    <style>
        .shadow-all
        {
            -moz-box-shadow:    inset 0 0 10px #000000;
            -webkit-box-shadow: inset 0 0 10px #000000;
            box-shadow:         inset 0 0 10px #000000;
        }
        .header-fix-box-shadow{
            -webkit-box-shadow: inset 4px -13px 25px -20px rgba(0,0,0,0.75);
            -moz-box-shadow: inset 4px -13px 25px -20px rgba(0,0,0,0.75);
            box-shadow: inset 4px -13px 25px -20px rgba(0,0,0,0.75);
        }
        .header-top-box-shadow{
            webkit-box-shadow: inset 0px 11px 232px -121px rgba(0,0,0,0.75);
            -moz-box-shadow: inset 0px 11px 232px -121px rgba(0,0,0,0.75);
            box-shadow: inset 0px 11px 232px -121px rgba(0,0,0,0.75);
        }
        .effect1{
            -webkit-box-shadow: 0 10px 6px -6px #777;
            -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
        }
        .shadow-box-me {
            -moz-box-shadow:    inset 0 0 10px #000000;
            -webkit-box-shadow: inset 0 0 10px #000000;
            box-shadow:         inset 0 0 10px #000000;
        }
        .one-edge-shadow {
            box-shadow: 0 8px 6px -6px black;
        }
        .shadow {
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
            -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
            box-shadow:         3px 3px 5px 6px #ccc;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
        }
        /*==================================================
         * Effect 5
         * ===============================================*/
        .effect5
        {
            position: relative;
        }
        .effect5:before, .effect5:after
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 25px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: #777;
            -webkit-box-shadow: 0 35px 20px #777;
            -moz-box-shadow: 0 35px 20px #777;
            box-shadow: 0 35px 20px #777;
            -webkit-transform: rotate(-8deg);
            -moz-transform: rotate(-8deg);
            -o-transform: rotate(-8deg);
            -ms-transform: rotate(-8deg);
            transform: rotate(-8deg);
        }
        .effect5:after
        {
            -webkit-transform: rotate(8deg);
            -moz-transform: rotate(8deg);
            -o-transform: rotate(8deg);
            -ms-transform: rotate(8deg);
            transform: rotate(8deg);
            right: 10px;
            left: auto;
        }
        .effect6
        {
            position:relative;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }
        .effect6:before, .effect6:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
            -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
            box-shadow:0 0 20px rgba(0,0,0,0.8);
            top:50%;
            bottom:0;
            left:10px;
            right:10px;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        .effect6:after
        {
            right:10px;
            left:auto;
            -webkit-transform:skew(8deg) rotate(3deg);
            -moz-transform:skew(8deg) rotate(3deg);
            -ms-transform:skew(8deg) rotate(3deg);
            -o-transform:skew(8deg) rotate(3deg);
            transform:skew(8deg) rotate(3deg);
        }
        .effect7
        {
            position:relative;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }
        .effect7:before, .effect7:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
            -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
            box-shadow:0 0 20px rgba(0,0,0,0.8);
            top:0;
            bottom:0;
            left:10px;
            right:10px;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        .effect7:after
        {
            right:10px;
            left:auto;
            -webkit-transform:skew(8deg) rotate(3deg);
            -moz-transform:skew(8deg) rotate(3deg);
            -ms-transform:skew(8deg) rotate(3deg);
            -o-transform:skew(8deg) rotate(3deg);
            transform:skew(8deg) rotate(3deg);
        }
        .box-shadow-just-top-insert
        {
            -webkit-box-shadow: inset 0px 156px 24px -164px rgba(0,0,0,0.75);
            -moz-box-shadow: inset 0px 156px 24px -164px rgba(0,0,0,0.75);
            box-shadow: inset 0px 156px 24px -164px rgba(0,0,0,0.75);
        }
        .box-shadow-just-bottom-insert
        {
            -webkit-box-shadow: inset 0px -155px 50px -150px rgba(0,0,0,0.75);
            -moz-box-shadow: inset 0px -155px 50px -150px rgba(0,0,0,0.75);
            box-shadow: inset 0px -155px 50px -150px rgba(0,0,0,0.75);
        }
        .box-shadow-just-bottom-outer
        {
            -webkit-box-shadow:0px -155px 50px -150px rgba(0,0,0,0.75);
            -moz-box-shadow:0px -155px 50px -150px rgba(0,0,0,0.75);
            box-shadow:0px -155px 50px -150px rgba(0,0,0,0.75);
        }

    </style>
</head>
<body class="animsition">
<!-- header -->
<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4 header-fix-box-shadow">
    <!-- Logo -->
    <a href="{{route('about')}}" class="logo">
        <img src="<?= Url('index/images/icons/logo.png'); ?>" alt="IMG-LOGO">
    </a>
    <!-- Menu -->
    <div class="wrap_menu rtlrtl">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="{{ route('index')}}" >صفحه اصلی</a>
                </li>
                <li>
                    <a href="{{ route('product_all')}}" >کالاها</a>
                </li>
                <li>
                    <a href="{{route('company_all')}}">شرکت</a>
                    <ul class="sub_menu">
                        @foreach($companies as $company)
                            <li><a href="{{ route('company',['company'=>$company->id]) }}">
                                    {{$company->name}}
                                </a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a>دسته بندی</a>
                    <ul class="sub_menu">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category',['category'=>$category->id]) }}">
                                    {{$category->name}}
                                </a>
                                @if(subcat($category->id))
                                    <ul class="sub_menu">
                                        @foreach(subcat($category->id) as $subcat)
                                            <li>
                                                <a href="{{ route('category',['category'=>$subcat->id]) }}">
                                                    {{$subcat->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{ route('about')}}">درباره ما</a>
                </li>
                <li>
                    <a href="{{ route('callme')}}">تماس با ما</a>
                </li>
                <li>
                    <a href="{{ route('webmap')}}">نقشه سایت</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header-icons">
        <!-- Header-top compare noti -->
        @include('layouts.index.compare')
        <!-- end Header-top compar noti -->
        <span class="linedivide1"></span>
        <!-- user icon -->
        <!-- Header-fixed cart noti -->
        @include('layouts.index.cart')
        <!-- end Header-fixed cart noti -->
    </div>
    <!-- end-Header Icon -->
</div>
<!-- end-header fixed -->
<!-- Header -->
<header class="header2">
    <!-- Header top -->
    <div class="container-menu-header-v2 p-t-26 box-shadow-just-top-insert">
        <!-- menu maby remove -->
        <div class="topbar2">
            <!-- menu icons facebook twitter -->
            <!-- end- menu icons facebook twitter -->
            <div class="topbar-child2">
                <!-- Header-top compare noti -->
                @include('layouts.index.compare')
                <!-- end Header-top compar noti -->
                <span class="linedivide1"></span>
                <!-- Header-top cart noti -->
                @include('layouts.index.cart')
                <!-- end Header-top cart noti -->
            </div>
            <!-- Logo2 -->
            <a href="{{route('about')}}" class="logo2">
                <img src="<?= Url('index/images/icons/logo.png'); ?>" alt="IMG-LOGO">
            </a>
            <!-- end-Logo2 -->
            <!-- shop cart noti and users -->
            <div class="topbar-social">
                <a href="{{route('about')}}" class="topbar-social-item fa fa-facebook"></a>
                <a href="{{route('about')}}" class="topbar-social-item fa fa-instagram"></a>
                <a href="{{route('about')}}" class="topbar-social-item fa fa-telegram"></a>
                <a href="{{route('callme')}}" class="topbar-social-item fa fa-phone"></a>
                <a href="{{route('callme')}}" class="topbar-social-item fa fa-map-marker"></a>
            </div>
            <!-- end-shop cart noti and users -->
        </div>
        <!-- end-menu maby remove -->
        <!-- menu top -- main -->
        <div class="wrap_header rtlrtl">
            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{route('index')}}">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="{{route('product_all')}}">کالاها</a>
                        </li>
                        <li>
                            <a href="{{route('company_all')}}">شرکت</a>
                            <ul class="sub_menu">
                                @foreach($companies as $company)
                                    <li>
                                        <a href="{{ route('company',['company'=>$company->id]) }}">
                                            {{$company->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a>دسته بندی</a>
                            <ul class="sub_menu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('category',['category'=>$category->id]) }}">
                                            {{$category->name}}
                                        </a>
                                        @if(subcat($category->id))
                                            <ul class="sub_menu">
                                                @foreach(subcat($category->id) as $subcat)
                                                    <li>
                                                        <a href="{{ route('category',['category'=>$subcat->id]) }}">
                                                            {{$subcat->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('about')}}">درباره ما</a>
                        </li>
                        <li>
                            <a href="{{route('callme')}}">تماس با ما</a>
                        </li>
                        <li>
                            <a href="{{route('webmap')}}">نقشه سایت</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Icon -->
        </div>
        <!-- end menu top -- main -->
    </div>
    <!-- end-Header top -->
    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="{{route('index')}}" class="logo-mobile">
            <img src="<?= Url('index/images/icons/logo.png'); ?>" alt="IMG-LOGO">
        </a>
        <!-- end Logo moblie -->
        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <!-- Header-top compare noti -->
                @include('layouts.index.compare')
                <!-- end Header-top compar noti -->
                <span class="linedivide2"></span>
                <!-- header mobile cart noti -->
                 @include('layouts.index.cart')
                <!-- end header mobile cart noti -->
            </div>
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
    </div>
    <!-- end-Header Mobile -->
    <!-- Menu Mobile -->
    <div class="wrap-side-menu rtlrtl" >
        <nav class="side-menu">
            <ul class="main-menu">
                <!-- list mobile icon -->
                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="{{route('about')}}" class="topbar-social-item fa fa-facebook"></a>
                        <a href="{{route('about')}}" class="topbar-social-item fa fa-instagram"></a>
                        <a href="{{route('about')}}" class="topbar-social-item fa fa-telegram"></a>
                        <a href="{{route('callme')}}" class="topbar-social-item fa fa-phone"></a>
                        <a href="{{route('callme')}}" class="topbar-social-item fa fa-map-marker"></a>
                    </div>
                </li>
                <!-- list mobile icon -->
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('index')}}">صفحه اصلی</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('product_all')}}">کالاها</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('company_all')}}">شرکت</a>
                    <ul class="sub-menu" style="background-color:rgb(230,85,64);">
                        @foreach($companies as $company)
                            <li class="p-l-15">
                                <a style="color:white;" href="{{route('company',['$company'=>$company->id])}}">
                                    {{$company->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a >دسته بندی</a>
                    <ul class="sub-menu" style="background-color:rgb(230,85,64);">
                        @foreach($categories as $categor)
                            <li class="p-l-15">
                                <a style="color:white;" href="{{route('category',['$category'=>$categor->id])}}">
                                    {{$categor->name}}
                                </a>
                                @if(subcat($categor->id))
                                    <ul class="sub-menu" style="background-color:rgb(230,85,64);">
                                        @foreach(subcat($categor->id) as $sub)
                                            <li class="p-l-15">
                                                <a style="color:rgb(215,215,215);" href="{{route('category',['$category'=>$sub->id])}}">
                                                    {{$sub->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('callme')}}">تماس با ما</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('about')}}">درباره ما</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="{{route('webmap')}}">نقشه سایت</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- end-Menu Mobile -->
</header>
<!-- end header -->
<!--header -->
<!-- Banner -->
@yield('body')
<!-- Footer -->
<!-- Footer -->
<footer class="bg6 p-t-5 p-b-5 p-l-5 p-r-5 rtlrtl">
    <div class="flex-w p-b-30">
        <div class="w-size6 p-t-20 p-l-15 p-r-15 respon4">
            <div class="row">
                <h4 class="s-text12 p-b-5">
                    ارتباط با ما
                </h4>
            </div>
            <hr>
            <table class="s-text7">
                <tbody>
                <tr>
                    <td class="p-r-50">شماره ثابت</td>
                    <td class="p-l-50">
                        {{$about->phone_}}
                    </td>
                </tr>
                <tr>
                    <td class="p-r-50">شماره همراه</td>
                    <td class="p-l-50">
                        {{$about->phone}}
                    </td>
                </tr>
                <tr>
                    <td class="p-r-50">فکس</td>
                    <td class="p-l-50">
                        {{$about->fax}}
                    </td>
                </tr>
                </tbody>
                <!-- shop cart noti and users -->
            </table>
            <hr style="width:50px;margin-right:80px;">
            <p>{{$about->address}}</p>
            <div class="p-l-70" style="bottom:0;">
                <a href="{{route('callme')}}" title="تماس با ما" class="topbar-social-item fa fa-phone"></a>
                <a href="{{route('about')}}" title="درباره ما" class="topbar-social-item fa fa-map-marker"></a>
                <a  href="{{$about->telegram}}" title="تلگرام" class="topbar-social-item fa fa-telegram"></a>
                <a href="{{$about->instagram}}" title="اینستاگرام" class="topbar-social-item fa fa-instagram"></a>
            </div>
        </div>
        <div class="w-size6 p-t-20 p-l-15 p-r-15 respon4">
            <div class="row" >
                <h4 class="s-text12 p-b-5">
                    دسته ها
                </h4>
            </div>
            <hr>
            <div class="row" >
                    <div  class="col p-l-20">
                        <ul>
                            @foreach($categories as $category)
                                <li class="p-b-9 p-l-10">
                                    <a href="{{ route('category',['category'=>$category->id]) }}" class="s-text7">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
            </div>
        </div>
        <div class="w-size5 p-t-10 p-l-10 p-r-10 respon3" style="margin-left:0px;" >
            <div id="mapp" >
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- end footer -->
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>
<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<!-- Modal Video 01-->
<!-- Back to top -->
<script type="text/javascript" src="<?= Url('index/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/animsition.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/popper.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/select2.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/s1.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/slick.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/slick-custom.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/countdowntime.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/sweetalert.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/s2.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/parallax100.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('index/js/s3.js'); ?>"></script>
<script src="<?= Url('index/js/main.js'); ?>"></script>
<script src="<?= Url('index/js/s4.js'); ?>"></script>
<!-- js-show-header-dropdown-compare -->
<script>
    /*[ this is me ]
===========================================================*/
    /*[ Show header dropdown ]
    ===========================================================*/
    $('.js-show-header-dropdown-compare').on('click', function(){
        $(this).parent().find('.header-dropdown-compare')
    });
    var menu = $('.js-show-header-dropdown-compare');
    var sub_menu_is_showe_compare = -1;
    for(var i=0; i<menu.length; i++){
        $(menu[i]).on('click', function(){

            if(jQuery.inArray( this, menu ) == sub_menu_is_showe_compare){
                $(this).parent().find('.header-dropdown-compare').toggleClass('show-header-dropdown');
                sub_menu_is_showe_compare = -1;
            }
            else {
                for (var i = 0; i < menu.length; i++) {
                    $(menu[i]).parent().find('.header-dropdown-compare').removeClass("show-header-dropdown");
                }
                $(this).parent().find('.header-dropdown-compare').toggleClass('show-header-dropdown-compare');
                sub_menu_is_showe_compare = jQuery.inArray( this, menu );
            }
        });
    }
    $(".js-show-header-dropdown-compare, .header-dropdown-compare").click(function(event){
        event.stopPropagation();
    });
    $(window).on("click", function(){
        for (var i = 0; i < menu.length; i++) {
            $(menu[i]).parent().find('.header-dropdown-compare').removeClass("show-header-dropdown");
        }
        sub_menu_is_showe_compare = -1;
    });
</script>
<!-- js-show-header-dropdown-compare -->
<!-- compare -->
<?php $url_add_compare=Url('/add_compare'); ?>
<?php $url_del_compare=Url('/del_compare'); ?>
<script type="text/javascript" >
    add_compare=function (id)
    {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_add_compare ?>',
            type : "POST",
            data:'id='+id,
            success:function (data)
            {
                $("#compare").html(data);
            },
            error:function () {
                alert(error);
            }
        });
    };
    del_compare=function (id)
    {
        $("li#"+id+"_compare").remove();
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_del_compare ?>',
            type : "POST",
            data:'id='+id,
            success:function (data)
            {
                $("li#"+id+"_compare").remove();
            },
            error:function () {
                alert(error);
            }
        });
    };
</script>
<!-- compare -->
<!-- cart -->
<?php $url_add=Url('/add'); ?>
<?php $url_plus=Url('/plus'); ?>
<?php $url_min=Url('/min'); ?>
<?php $url_del=Url('/del_cart'); ?>
<script type="text/javascript" >
    add_cart=function (id)
    {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_add ?>',
            type : "POST",
            data:'id_pro='+id,
            success:function (data)
            {
                $("#cart").html(data);
            }
        });
    };
    plus_cart=function (id)
    {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_plus ?>',
            type : "POST",
            data:'id_pro='+id,
            success:function (data)
            {
                alert('success');
                $("#special").remove();

            }
        });
    };
    min_cart=function (id)
    {
        /*
        var hol=$("span#"+id+"_span").text();
        var holl=parseInt(hol);
        var strin=String(holl-1);
        $("span#"+id+"_span").remove();
        var ssj="<span id=\" "+id+"_span\"> "+strin+"</span>";
        $("span#"+id+"_span_mother").append(ssj);
        */
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_min ?>',
            type : "POST",
            data:'id_pro='+id,
            success:function (data)
            {
                $("#cart").html(data);
            }
        });
    };
    del_cart=function (id)
    {
        $("li#"+id).remove();
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }});
        $.ajax({
            url : '<?= $url_del ?>',
            type : "POST",
            data:'id_pro='+id,
            success:function (data)
            {
                $("li#"+id).remove();
            }
        });
    };
</script>
<!-- cart -->
    @yield('script')
</body>
</html>

<?php
use App\Category;
function subcat($id)
{
    return Category::where('cat_id',$id)->get();
}
?>