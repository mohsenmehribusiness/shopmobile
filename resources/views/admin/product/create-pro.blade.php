@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
<script src="<?= Url('panel/js/ckeditor/ckeditor.js'); ?>"></script>
<!-- head_me -->
@endsection

@section('script')
    <script>
        document.multiselect('#category_id');
    </script><script>
        document.multiselect('#Company_id');
    </script>
@endsection

@section('head-content')
ایجاد کالا
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate action="{{route('product.store')}}" style="padding-bottom:25px;"  method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('partials.errors')
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name" style="padding-right:6px;">نام کالا</label>
                <input class="form-control" name="name" id="name" type="text" value="{{old('name')}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="price" style="padding-right:6px;">قیمت کالا</label>
                <input class="form-control" type="number" name="price" id="price" value="{{old('price')}}"  required>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="battery" style="padding-right:6px;">وضعیت باتری</label>
                    <input class="form-control" name="battery" id="battery" type="text" value="{{old('battery')}}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="modality" style="padding-right:6px;">کیفیت تصویر</label>
                    <input type="text" class="form-control" name="modality" id="modality"  value="{{old('modality')}}"  required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="camera" style="padding-right:6px;">دوربین</label>
                    <input class="form-control" name="camera" id="camera" type="text" value="{{old('camera')}}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="internet" style="padding-right:6px;">اینترنت</label>
                    <input class="form-control" name="internet" id="internet" type="text" value="{{old('internet')}}"  required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="category_id" style="padding-right:6px;">انتخاب دسته</label>
                <select id='category_id' name="category[]"  multiple>
                    @foreach($categories as $category)
                  <option value='{{ $category->id }}'>{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Company_id" style="padding-right:6px;">انتخاب شرکت</label>
                    <select id='Company_id' name="Company_id" class="form-control">
                        @foreach($companies as $company)
                            <option value='{{ $company->id }}'>{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-6">
                <label for="description_" style="padding-right:6px;">توضیح مختصر</label>
                <textarea style="border:1px lightgray solid;border-radius:8px;"  class="w3-input" name="description_" id="description_" required="" type="text">{{old('description_')}} </textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-6">
                <label for="description" style="padding-right:6px;">توضیحات کامل کالا</label>
                <textarea style="border:1px lightgray solid;border-radius:8px;"  class="ckeditor" name="description" id="description" required="" type="text">{{old('description')}} </textarea>
              </div>
            </div>
            <div class="row" style="padding-top:35px;padding-bottom:35px;">
                <div class="col-md-12 mb-6">
                    <label for="description" style="padding-right:6px;">انتخاب عکس</label>
                    <input type="file" name="img[]" multiple>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-6">
                    <label for="tag" style="padding-right:6px;">کلمات کلیدی</label>
                    <a href="#tagdemo" class="btn badge badge-info" data-toggle="collapse">توضیح</a>
                    <input class="form-control" name="tag" id="tag" rows="10" value="{{old('tag')}}" maxlength="500" placeholder="کلمات کلیدی را وارد کنید(جدا کننده - می باشد)"><br>
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
          </form>
        </div>
@endsection