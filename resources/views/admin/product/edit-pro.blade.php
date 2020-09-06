@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
<script src="<?= Url('panel/js/ckeditor/ckeditor.js'); ?>"></script>
<!-- head_me -->
<style>
    .zoom {
        transition: transform .2s; /* Animation */
    }
    .zoom:hover {
        z-index: +1;
        transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    .inputcolor{
        color: lightgray;
    }
</style>
<link href="<?= Url('panel/selectjquery/querysctipttop.css" rel="stylesheet'); ?>" type="text/css">
<link rel="<?= Url('panel/selectjquery/stylesheet" href="BsMultiSelect.css'); ?>">
@endsection

@section('script')
    <script src="<?= Url('panel/selectjquery/popper.min.js'); ?>"></script>
    <script src="<?= Url('panel/selectjquery/BsMultiSelect.js'); ?>"></script>
    <script>$("select").dashboardCodeBsMultiSelect();</script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
@endsection

@section('head-content')
ایجاد کالا
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 order-md-1">
                {!! Form::model($record,['method'=>'PATCH','route'=>['product.update',$record->id],'class'=>'needs-validation','files'=>true]) !!}
                {{csrf_field()}}
            @include('partials.errors')
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name" style="padding-right:6px;">نام کالا</label>
                <input class="form-control inputcolor" name="name" id="name" type="text" value="{{ $record->name}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="price" style="padding-right:6px;">قیمت کالا</label>
                <input class="form-control inputcolor" name="price" id="price" type="number" value="{{ $record->newprice()[0]}}">
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="battery" style="padding-right:6px;">وضعیت باتری</label>
                    <input class="form-control" name="battery" id="battery" type="text" value="{{ $record->battery}}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="modality" style="padding-right:6px;">کیفیت تصویر</label>
                    <input class="form-control" name="modality" id="modality" value="{{ $record->modality}}"  required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="camera" style="padding-right:6px;">دوربین</label>
                    <input class="form-control" name="camera" id="camera" type="text" value="{{ $record->camera}}"  required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="internet" style="padding-right:6px;">اینترنت</label>
                    <input class="form-control" name="internet" id="internet" type="text" value="{{ $record->internet}}"   required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="category" style="padding-right:6px;">انتخاب دسته</label>
                  {!! Form::select('category[]',$categories,$record->categories,['class'=>'form-control','multiple'=>'multiple']) !!}
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Company" style="padding-right:6px;">انتخاب شرکت</label>
                    {!! Form::select('company_id',$companies,null,['class'=>'form-control','style'=>'diplay:none','id'=>'company']) !!}
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-6">
                <label for="description_" style="padding-right:6px;">
                    توضیح مختصر
                </label>
                <textarea style="border:1px lightgray solid;border-radius:8px;"  class="w3-input inputcolor" name="description_" id="description_" required="" type="text">{{ $record->description_}}</textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-6">
                <label for="description" style="padding-right:6px;">توضیحات کامل کالا</label>
                <textarea style="border:1px lightgray solid;border-radius:8px;"  class="ckeditor inputcolor" name="description" id="description" required="" type="text">{{ $record->description}} </textarea>
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 mb-6 border rounded" style="padding-bottom:4px;">
                    <h4>حذف عکس</h4>
                    <hr>
                    <div class="row">
                        @foreach($record->images as $img)
                            <div class="col-sm-4" style="margin-bottom:4px;">
                                <img  class="zoom rounded border"  style="width:100px;height:auto;" title="{{$img->title}}حذف " src="<?= url('images/product/'.$img->img) ?>" >
                                <input type="checkbox" value="{{$img->img}}" name="img_del[]">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:35px;padding-bottom:35px;">
                <div class="col-md-12 mb-6">
                    <label for="description" style="padding-right:6px;">اگر عکس دیگری میخاهید اضافه کنید از اینجا اقدام کنید</label>
                    <input type="file" name="img[]" multiple>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-6">
                    <label for="tag" style="padding-right:6px;">کلمات کلیدی</label>
                    <a href="#tagdemo" class="btn badge badge-info" data-toggle="collapse">توضیح</a>
                    <input class="form-control inputcolor" name="tag" value="{{ $record->tag}}" id="tag" rows="10"  maxlength="500" placeholder="کلمات کلیدی را وارد کنید(جدا کننده - می باشد)"><br>
                    <div id="tagdemo" class="collapse">
                        <br>
                        <div class="row">
                            <div class="col-xs-4" style="padding-right: 5px;padding-left: 5px;"><mark>کلمات را با " - " از همدیگر جدا کنید</mark></div>
                            <div class="col-xs-4" style="padding-right: 5px;padding-left: 5px;">کلمات کلیدی به جستجوی کاربر ها کمک میکند</div>
                            <div class="col-xs-4" style="padding-right: 5px;padding-left: 5px;">کلمات کلیدی باید به متن و کالا ربط داشته باشند</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره کالا</button>
          {!! Form::close() !!}
        </div>
@endsection