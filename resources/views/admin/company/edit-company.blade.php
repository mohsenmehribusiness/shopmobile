@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
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
@endsection

@section('script')
@endsection

@section('head-content')
ویرایش شرکت
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 order-md-1">
            {!! Form::model($record,['method'=>'PATCH','route'=>['company.update',$record->id],'class'=>'needs-validation','files'=>true]) !!}
            {{csrf_field()}}
                @include('partials.errors')
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name" style="padding-right:6px;">نام شرکت</label>
                    <input class="inputcolor form-control" name="name" id="name" type="text" value="{{$record->name}}" required>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="logo" style="padding-right:6px;">انتخاب لوگوی شرکت</label>
                      <input type="file" name="logo" class="form-control">
                  </div>
                </div>
                <div class="row" style="padding-top:35px;padding-bottom:35px;">
                    <div class="col-md-12 mb-6">
                        <label for="description" style="padding-right:6px;">توضیح مختصر در مورد شرکت</label>
                        <textarea class="inputcolor form-control" name="description" id="description" rows="4">{{ $record->description}}</textarea>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره شرکت</button>
            {!! Form::close() !!}
        </div>
@endsection