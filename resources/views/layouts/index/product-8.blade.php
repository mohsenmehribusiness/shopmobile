<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
    <div class="container">
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                کالای ترین ها
            </h3>
        </div>
        <!-- Tab01 -->
        <div class="tab01 rtlrtl">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">بیشترین فروش</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#newpro" role="tab">جدیدترین</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#seenpro" role="tab">بیشترین بازدید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pricepro" role="tab">بیشترین تخفیف</a>
                </li>
            </ul>
            <!-- Nav tabs -->
            <!-- Tab panes -->
            <div class="tab-content p-t-35">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <div class="row">
                        @foreach($orders as $order)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            <!-- Block2 -->
                            <div class="block2 one-edge-shadow">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img  src="<?= url('/images/product/'.$order->images[0]->img) ?>" alt="IMG-PRODUCT" />
                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>
                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button onclick="add_cart({{$order->id}})" class="block2-btn-add-cart m-b-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                <span class="topbar-social-item fa fa-cart-plus"></span>
                                                سبد خرید
                                            </button>
                                            <button onclick="add_compare({{$order->id}})" class="block2-btn-add-wishlist flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                <span class="topbar-social-item fa fa-plus"></span>
                                                مقایسه
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block2-txt p-t-20">
                                    <a href="{{ route('product',['product'=>$order->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$order->name}}
                                    </a>
                                    <span class="block2-price m-text6 p-r-5">
											{{$order->price}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- - -->
                <div class="tab-pane fade" id="newpro" role="tabpanel">
                    <div class="row">
                        @foreach($news as $new)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img  src="<?= url('/images/product/'.$new->images[0]->img) ?>" alt="IMG-PRODUCT" />
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button onclick="add_cart({{$new->id}})" class="block2-btn-add-cart m-b-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    <span class="topbar-social-item fa fa-cart-plus"></span>
                                                    سبد خرید
                                                </button>
                                                <button onclick="add_compare({{$new->id}})" class="block2-btn-add-wishlist flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    <span class="topbar-social-item fa fa-plus"></span>
                                                    مقایسه
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt p-t-20">
                                        <a href="{{ route('product',['product'=>$new->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$new->name}}
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
											{{$new->price}}
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--  -->
                <div class="tab-pane fade" id="seenpro" role="tabpanel">
                    <div class="row">
                        @foreach($seens as $seen)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img  src="<?= url('/images/product/'.$seen->images[0]->img) ?>" alt="IMG-PRODUCT" />
                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button onclick="add_cart({{$seen->id}})" class="block2-btn-add-cart m-b-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    <span class="topbar-social-item fa fa-cart-plus"></span>
                                                    سبد خرید
                                                </button>
                                                <button onclick="add_compare({{$seen->id}})" class="block2-btn-add-wishlist flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    <span class="topbar-social-item fa fa-plus"></span>
                                                    مقایسه
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt p-t-20">
                                        <a href="{{ route('product',['product'=>$seen->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$seen->name}}
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
											{{$seen->price}}
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--  -->
                <div class="tab-pane fade" id="pricepro" role="tabpanel">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our product -->