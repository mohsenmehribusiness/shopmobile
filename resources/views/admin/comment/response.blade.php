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
        <div class="col-md-8" id="{{$comment->id}}_alert">
            <div style="height:auto;padding-bottom:46px;" class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h5 class="alert-heading">
                    <span data-feather="shopping-cart"></span>
                    <a onclick="window.open('<?= url('/admin/product/'.$comment->product['id']) ?>', '', 'width=800,height=500');" >{{$comment->product['name']}}</a>
                </h5>
                <p class="mb-0 text">
                    <img  src="<?= Url('index/images/icons/icon-header-01.png'); ?>" >
                    <span class="text-success px-1">{{$comment->name}}</span>
                    {{$comment->description}}
                </p>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
            {!! Form::model($comment,['method'=>'PATCH','route'=>['comments.update',$comment->id],'class'=>'needs-validation']) !!}
            {{csrf_field()}}
                @include('partials.errors')
                    <input type="hidden" name="name" value="مدیر سایت">
                    <input type="hidden" name="email" value="-">
                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                    <input type="hidden" name="product_id" value="{{$comment->product_id}}">
                    <input type="hidden" name="state" value="1">
                <div class="row" style="padding-top:35px;padding-bottom:35px;">
                    <div class="col-md-12 mb-6">
                        <textarea class="form-control" name="description" placeholder="پاسخ خود را بنویسید" id="description" rows="6" value="{{old('description')}}" ></textarea>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره شرکت</button>
            {!! Form::close() !!}
        </div>
@endsection