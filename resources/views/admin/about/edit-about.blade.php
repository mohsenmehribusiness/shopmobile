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
ویرایش اطلاعات سایت
@endsection

@section('content')
<div class="row">
        <div class="col-md-8 order-md-1">
            {!! Form::model($record,['method'=>'PATCH','route'=>['about.update',$record->id],'class'=>'needs-validation','files'=>true]) !!}
            {{csrf_field()}}
                @include('partials.errors')
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name" style="padding-right:6px;">نام سایت</label>
                    <input class="inputcolor form-control" name="name" id="name" type="text" value="{{$record->name}}" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" style="padding-right:6px;">ایمیل</label>
                        <input class="inputcolor form-control" name="email" id="email" type="email" value="{{$record->email}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="instagram" style="padding-right:6px;">اینستاگرام</label>
                        <input class="inputcolor form-control" name="instagram" id="instagram" type="text" value="{{$record->instagram}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fax" style="padding-right:6px;">فکس</label>
                        <input class="inputcolor form-control" name="fax" id="fax" type="text" value="{{$record->fax}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone_" style="padding-right:6px;">تلفن ثابت</label>
                        <input class="inputcolor form-control" name="phone_" id="phone_" type="text" value="{{$record->phone_}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone" style="padding-right:6px;">تلفن</label>
                        <input class="inputcolor form-control" name="phone" id="phone" type="text" value="{{$record->phone}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telegram" style="padding-right:6px;">تلگرام</label>
                        <input class="inputcolor form-control" name="telegram" id="telegram" type="text" value="{{$record->telegram}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="url" style="padding-right:6px;">آدرس سایت</label>
                        <input class="inputcolor form-control" name="url" id="url" type="text" value="{{$record->url}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="address" style="padding-right:6px;">آدرس</label>
                        <textarea class="inputcolor form-control" name="address" id="address" rows="3">{{ $record->address}}</textarea>
                    </div>
                </div>
                <div class="row" style="padding-top:35px;padding-bottom:35px;">
                    <div class="col-md-12 mb-6">
                        <label for="about" style="padding-right:6px;">توضیح در مورد سایت(برای صفحه درباره ما)</label>
                        <textarea class="inputcolor form-control" name="about" id="about" rows="6">{{ $record->about}}</textarea>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block my-2" type="submit">اعمال ویرایش</button>
            {!! Form::close() !!}
        </div>
@endsection