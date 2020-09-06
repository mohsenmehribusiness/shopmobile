@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
<!-- head_me -->
@endsection

@section('script')
@endsection

@section('head-content')
ایجاد شرکت
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate action="{{route('company.store')}}" style="padding-bottom:25px;"  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('partials.errors')
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name" style="padding-right:6px;">نام شرکت</label>
                    <input class="form-control" name="name" id="name" type="text" value="{{old('name')}}" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="logo" style="padding-right:6px;">انتخاب لوگوی شرکت</label>
                      <input class="form-control" type="file" name="logo">
                  </div>
                </div>
                <div class="row" style="padding-top:35px;padding-bottom:35px;">
                    <div class="col-md-12 mb-6">
                        <label for="description" style="padding-right:6px;">توضیح مختصر در مورد شرکت</label>
                        <textarea class="form-control" name="description" id="description" rows="4" value="{{old('description')}}" ></textarea>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره شرکت</button>
              </form>
        </div>
@endsection