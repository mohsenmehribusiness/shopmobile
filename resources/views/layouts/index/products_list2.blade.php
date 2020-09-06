<!-- breadcrumb -->
<div class="rtlrtl bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm"  >
    <a href="{{ route('index')}}" class="s-text16">
        صفحه اصلی
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    <a href="{{route('product_all')}}" style="color:rgb(85,85,85);" class="s-text16">
        کالا ها
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    @if($asl=="category")
    <a style="color:rgb(85,85,85);" class="s-text16">
        دسته بندی
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    @elseif($asl=="company")
        <a href="{{route('company_all')}}" style="color:rgb(85,85,85);" class="s-text16">
            شرکت
            <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
        </a>
    @elseif($asl=="tag")
    <a href="{{ route('tag',['tag'=>$tag_value])}}" style="color:rgb(85,85,85);" class="s-text16">
        برچسب {{$tag_value }}
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    @endif
    @if($asl=="category")
        @if($category->cat_id!='-')
            <a href="{{ route('category',['category'=>$category->mother()->id]) }}" class="s-text16">
                {{$category->mother()->name}}
                <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
            </a>
        @endif
    <a href="{{ route('category',['category'=>$category->id]) }}" class="s-text16">
        {{$category->name}}
    </a>
    @elseif($asl=="company")
        <a href="{{route('company',['$company'=>$company->id])}}" class="s-text16">
            {{$company->name}}
        </a>
    @endif
</div>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65 rtlrtl">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    @if($asl=="category")
                            @if($category->sub_cat())
                                <h4 class="m-text14 p-b-7">
                                    دسته های مرتبط
                                </h4>
                                <ul class="p-b-54">
                                    @foreach($category->sub_cat() as $subcat)
                                        <li class="p-t-4">
                                            <a href="{{ route('category',['category'=>$subcat->id]) }}" class="s-text13">
                                                {{$subcat->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                             @endif
                        <hr>
                    @endif
                    @include('layouts.index.new_product_nav_right')
                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="">
                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative ">
                                    <img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG-PRODUCT" />
                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>
                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button onclick="add_cart({{$product->id}})" class="block2-btn-add-cart m-b-2 flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                <span class="topbar-social-item fa fa-cart-plus"></span>
                                                سبد خرید
                                            </button>
                                            <button onclick="add_compare({{$product->id}})" class="block2-btn-add-wishlist flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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
                                    تومان
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                {{$products->links()}}
                <br>
            </div>
        </div>
    </div>
</section>
<!-- end content page -->