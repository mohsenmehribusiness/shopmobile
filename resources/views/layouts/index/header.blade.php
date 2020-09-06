<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <img src="index/images/icons/logo.png" alt="IMG-LOGO">
    </a>
    <!-- Menu -->
    <div class="wrap_menu rtlrtl">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="index.html">صفحه اصلی</a>
                </li>
                <li>
                    <a href="product.html">دسته بندی</a>
                    <ul class="sub_menu">
                        @foreach($categories as $category)
                            <li><a href="index.html">
                                {{$category->name}}
                            </a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="sale-noti">
                    <a href="product.html">دسته بندی</a>
                </li>

                <li>
                    <a href="cart.html">درباره ما</a>
                </li>

                <li>
                    <a href="blog.html">تماس با ما</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Header Icon -->
    <div class="header-icons">
        <a href="#" class="header-wrapicon1 dis-block">
            <img src="index/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
        </a>
        <span class="linedivide1"></span>
        <div class="header-wrapicon2">
            <!-- Header cart noti -->
            <img src="index/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">12</span>
            <!-- Header cart noti  -->
            <!-- Header cart noti hover -->
            <div  class="header-cart header-dropdown">
                <ul class="header-cart-wrapitem">
                    <li class="header-cart-item">
                        <div class="header-cart-item-img" >
                            <img src="index/images/item-cart-01.jpg" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt">
                            <a href="#" class="header-cart-item-name">
                                White Shirt With Pleat Detail Back
                            </a>
                            <span class="header-cart-item-info">
									1 x $19.00
								</span>
                        </div>
                    </li>
                    <li class="header-cart-item">
                        <div class="header-cart-item-img">
                            <img src="index/images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt">
                            <a href="#" class="header-cart-item-name">
                                Converse All Star Hi Black Canvas
                            </a>

                            <span class="header-cart-item-info">
									1 x $39.00
								</span>
                        </div>
                    </li>
                    <li class="header-cart-item">
                        <div class="header-cart-item-img">
                            <img src="index/images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt">
                            <a href="#" class="header-cart-item-name">
                                Nixon Porter Leather Watch In Tan
                            </a>

                            <span class="header-cart-item-info">
									1 x $17.00
								</span>
                        </div>
                    </li>
                </ul>

                <div class="header-cart-total">
                    Total: $75.00
                </div>
                <div class="header-cart-buttons">
                    <div class="header-cart-wrapbtn">
                        <!-- Button -->
                        <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                            View Cart
                        </a>
                    </div>

                    <div class="header-cart-wrapbtn">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header cart noti hover -->
        </div>
    </div>
    <!-- end-Header Icon -->
</div>
<!-- end-header fixed -->

<!-- Header -->
<header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-26" style="background-color:rgb(240,240,240);">
        <!-- menu maby remove -->
        <div class="topbar2" style="background-color:rgb(240,240,240);">
            <!-- menu icons facebook twitter -->
            <!-- end- menu icons facebook twitter -->
            <div class="topbar-child2" style="background-color:rgb(240,240,240);">
                <!--  -->
                <a href="#" class="header-wrapicon1 dis-block m-l-30">
                    <img src="index/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
                <span class="linedivide1"></span>
                <div class="header-wrapicon2 m-r-13">
                    <img src="index/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>
                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo2 -->
            <a href="index.html" class="logo2">
                <img src="index/images/icons/logo.png" alt="IMG-LOGO">
            </a>
            <!-- end-Logo2 -->

            <!-- shop cart noti and users -->
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>
            <!-- end-shop cart noti and users -->
        </div>
        <!-- end-menu maby remove -->
        <!-- menu top -- main -->
        <div class="wrap_header rtlrtl" style="background-color:rgb(240,240,240);">
            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.html">صفحه اصلی سایت</a>
                        </li>

                        <li>
                            <a href="product.html">شرکت</a>
                            <ul class="sub_menu">
                                <li><a href="index.html">شرکت اولی</a></li>
                                <li><a href="home-02.html">شرکت دومی</a></li>
                                <li><a href="home-03.html">Homepage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="cart.html">دسته بندی </a>
                            <ul class="sub_menu">
                                <li><a href="index.html">شرکت اولی</a></li>
                                <li><a href="home-02.html">شرکت دومی</a></li>
                                <li><a href="home-03.html">Homepage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="cart.html">درباره ما</a>
                        </li>
                        <li>
                            <a href="cart.html">تماس با ما</a>
                        </li>
                        <li>
                            <a href="cart.html">نقشه سایت</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Icon -->
        </div>
        <!-- end menu top -- main -->
    </div>
    <!-- end-Header desktop -->

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="index/images/icons/logo.png" alt="IMG-LOGO">
        </a>
        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="index/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
                <span class="linedivide2"></span>
                <div class="header-wrapicon2">
                    <img src="index/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>
                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-01.jpg" alt="IMG">
                                </div>
                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>
                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-02.jpg" alt="IMG">
                                </div>
                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="index/images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>
                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <a href="#" title="facebook" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" title="instagram" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" title="telegram" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    </div>
                </li>
                <!-- list mobile icon -->
                <li class="item-menu-mobile p-l-10">
                    <a href="index.html">دسته بندی2</a>
                    <ul class="sub-menu" style="background-color:rgb(230,85,64);">
                        <li class="p-l-15"><a style="color:white;" href="index.html">دسته بندی2-1</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-02.html">دسته بندی3-2</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-03.html">دسته بندی3-3</a></li>
                        <li class="p-l-15"><a style="color:white;" href="index.html">دسته بندی2-1</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-02.html">دسته بندی3-2</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-03.html">دسته بندی3-3</a></li>
                        <li class="p-l-15"><a style="color:white;" href="index.html">دسته بندی2-1</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-02.html">دسته بندی3-2</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-03.html">دسته بندی3-3</a></li>
                        <li class="p-l-15"><a style="color:white;" href="index.html">دسته بندی2-1</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-02.html">دسته بندی3-2</a></li>
                        <li class="p-l-15"><a style="color:white;" href="home-03.html">دسته بندی3-3</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="product.html">شرکت</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="product.html">Sale</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="cart.html">Features</a>
                </li>
                <li class="item-menu-mobile p-l-10">
                    <a href="blog.html">Blog</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- end-Menu Mobile -->
</header>

<!-- end header -->