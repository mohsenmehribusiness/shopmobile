<!-- similar product -->
<section class="relateproduct bgwhite p-t-45 p-b-138" style="background-color: rgb(240,240,240);">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                کالاهای مرتبط
            </h3>
        </div>
        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
            @foreach($product->company->products as $product  )
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative" >
                            <img src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG-PRODUCT">
                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>
                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button onclick="add_cart({{$product->id}})" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        <span class="topbar-social-item fa fa-cart-plus"></span>
                                        سبد خرید
                                    </button>
                                    <button onclick="add_compare({{$product->id}})" class="m-t-2 block2-btn-add-wishlist flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        <span class="topbar-social-item fa fa-plus"></span>
                                        مقایسه
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block2-txt p-t-20">
                            <a href="{{ route('product',['product'=>$product->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                {{$product->name}}
                            </a>
                            <span class="block2-price m-text6 p-r-5">
									{!! number_format($product->newprice()[0]) !!}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
<!-- similar product -->