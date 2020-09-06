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
@endsection

@section('head-content')
  ویرایش {{$record->name}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 order-md-1">
            {!! Form::model($record,['method'=>'PATCH','route'=>['user.update',$record->id],'class'=>'needs-validation','files'=>true]) !!}
            {{csrf_field()}}
                    @include('partials.errors')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" style="padding-right:6px;">نام</label>
                            <input class="form-control" name="name" id="name" type="text" value="{{$record->name}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" style="padding-right:6px;">نام</label>
                            <input class="form-control" name="email" id="email" type="text" value="{{$record->email}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" style="padding-right:6px;">رمز جدید</label>
                            <input class="form-control" name="password" id="password" type="password"  required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password_repeat" style="padding-right:6px;">تایید رمز</label>
                            <input class="form-control" name="password_confirmation" id="password_repeat" type="password" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top:35px;padding-bottom:35px;">
                        <div class="col-md-12 mb-6">
                            <label for="file" style="padding-right:6px;">انتخاب عکس مدیر</label>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection