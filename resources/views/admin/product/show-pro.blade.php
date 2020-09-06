@extends('layouts.detaillayouts')

@section('title')
   جزئیات
@endsection

@section('head')
    <!-- head_me -->
    <script src="<?= Url('panel/js/jssor.slider-27.1.0.min.js'); ?>"></script>
    <script src="<?= Url('panel/js/slider-product.js'); ?>"></script>
    <link href="<?= Url('panel/css/slider-product.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <!-- sweet-alert -->
    <!-- head_me -->
@endsection

@section('up')
    <div class="float-sm-right">
        <div style="padding: 8px;">
            <a href="{{ route('product.edit' , ['id' => $product->id]) }}">
                <button type="button" class="btn btn-sm btn-outline-dark"><span data-feather="edit"></span></button>
            </a>
        </div>
    </div>
    <div class="float-sm-left">
        <div style="padding: 8px;">
            {{$product->name}}
        </div>
    </div>
    <br>
    <br>
    <hr>
    <h5>
        <?php
        $tags = explode("-", $product->tag);
        ?>
        @foreach($tags as $tag)
                <span class="badge badge-secondary">{{$tag}}</span>
        @endforeach
        @foreach($product->categories as $category)
            <span class="badge badge-info">{{$category->name }}</span>
        @endforeach
    </h5>
@endsection

@section('down')
    <div class="container">
        <br>
        <p>
            {{$product->description_}}
        </p>
        <dl>
            <dt>قیمت کالا</dt>
            <dd style="padding-right: 80px;">
                {!! $product->newprice()[0] !!}
            </dd>
            <dt>شرکت</dt>
            <dd style="padding-right: 80px;">{{$product->company->name}}</dd>
            <dt>وضعیت باتری</dt>
            <dd style="padding-right: 80px;">{{$product->battery}}</dd>
            <dt>دوربین</dt>
            <dd style="padding-right: 80px;">{{$product->camera}}</dd>
            <dt>اینترنت</dt>
            <dd style="padding-right: 80px;">{{$product->internet}}</dd>
            <dt>کیفیت تصویر</dt>
            <dd style="padding-right: 80px;">{{$product->modality}}</dd>
            <dt>توضیحات کامل</dt>
            <dd style="padding-right:8px;">
                {!! $product->description !!}
            </dd>
        </dl>
    </div>
@endsection

@section('content')
    <!-- content_me -->
    @include('sweet::alert')
    <!-- slide slide slide slide -->
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= url('/panel/spin.svg') ?>" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            @foreach($product->images as $image)
                <div data-p="170.00">
                    <img data-u="image"  src="<?= url('/images/product/'.$image->img) ?>" />
                    <img data-u="thumb"  src="<?= url('/images/product/'.$image->img) ?>" />
                </div>
            @endforeach
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- content_me -->
@endsection
@section('body')
@endsection
