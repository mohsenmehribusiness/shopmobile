@extends('layouts.index.index-simple')

@section('script')
    <script type="text/javascript" >
        $(document).ready(function(){
            image_modal=function (id)
            {
                var modal = document.getElementById('myModal');
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById(id);
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                };
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            };
        });
        //hello hello hello
    </script>
@endsection


@section('head')
    <?php
    $tags = explode("-", $product->tag);
    ?>
    @foreach($tags as $tag)
        <meta name="keywords" content="{{$tag}}">
    @endforeach
    <style>
        /* Style the Image Used to Trigger the Modal */
        .momi {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .momi:hover {opacity: 0.7;}
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }
        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            margin-top: 55px;
            width: 35%;
            max-width:700px;
        }
        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }
        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }
        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }
        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
@endsection


@section('body')
    <!-- modal image -->
    <div id="myModal" class="modal">
        <!-- The Close Button -->
        <span class="close">&times;</span>
        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">
        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- modal image -->
    <!-- deatil -->
    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>
                    <div class="slick3">
                        @foreach($product->images as $image)
                            <div class="border item-slick3" data-thumb="<?= url('/images/product/'.$image->img) ?>">
                                <div class="wrap-pic-w">
                                    <img title="برای بزرگی کامل دوبار بر روی عکس کلیک کنید" id="{{$image->id}}" class="momi" onclick="image_modal({{$image->id}})" src="<?= url('/images/product/'.$image->img) ?>" alt="{{$product->name}}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-size14 p-t-30 respon5 rtlrtl">
                <div class="row">
                    <div class="col">
                        <h4 class="product-detail-name m-text16 p-b-13">
                            {{$product->name}}
                        </h4>
                    </div>
                    <div class="col-3">
                         <span class="s-text8 m-r-35">
                        <?php $v = new \Hekmatinasser\Verta\Verta($product->created_at);?>
                             {!! $v->format('%B %d، %Y'); !!}
                    </span>
                    </div>
                </div>
                <span class="m-text17">
					{!! number_format($product->newprice()[0]) !!}
				</span><span>تومان</span>
                <p class="s-text8 p-t-10">
                    {{$product->description_}}
                </p>
                <hr style="width:80px;margin-left:380px;">
                <div class="row">
                    <div class="col">
                        <div class="p-b-25 p-l-10" >
                            <span class="s-text8">شرکت</span>
                            <span style="font-family:Montserrat-Regular;font-size:13px;line-height:1.8;color:rgb(230,85,64);" >{{$product->company->name}}</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-b-25 p-l-10" >
                            <span class="s-text8">وضعیت باتری</span>
                            <span style="font-family:Montserrat-Regular;font-size:13px;line-height:1.8;color:rgb(230,85,64);" >{{$product->battery}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="p-b-25 p-l-10" >
                            <span class="s-text8">ایتترنت</span>
                            <span style="font-family:Montserrat-Regular;font-size:13px;line-height:1.8;color:rgb(230,85,64);" >{{$product->internet}}</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-b-25 p-l-10" >
                            <span class="s-text8">کیفیت تصویر</span>
                            <span style="font-family:Montserrat-Regular;font-size:13px;line-height:1.8;color:rgb(230,85,64);" >{{$product->modality}}</span>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        توضیحات بیشتر
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8 text-justify">
                            {!!$product->description!!}
                        </p>
                    </div>
                </div>
                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        برچسب ها
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="wrap-tags flex-w">
                            @foreach($tags as $tag)
                                <a href="{{ route('tag',['tag'=>$tag])}}" class="tag-item">
                                   #{{$tag}}
                                </a>
                            @endforeach
                        </p>
                    </div>
                </div>
                <!-- -->
                <div class="p-t-33 p-b-60 rtlrtl">
                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="btn-addcart-product-detail size9 trans-0-4 m-b-10">
                                <!-- Button -->
                                <button onclick="add_cart({{$product->id}})"  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-right:-2px;">
                                    <span class="topbar-social-item fa fa-cart-plus"></span>
                                    سبد خرید
                                </button>
                            </div>
                            <div class="btn-addcart-product-detail size9 trans-0-4 m-b-10">
                                <!-- Button -->
                                <button onclick="add_compare({{$product->id}})"  class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    <span class="topbar-social-item fa fa-cart-plus"></span>
                                    مقایسه
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.index.comments')
    </div>
    <!-- deatil -->
    @include('layouts.index.products_similar')
    @include('layouts.index.instagram')
@endsection
