@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
<script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
<link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
<!-- head_me -->
<!-- bootstrap-select -->
<link href="<?= Url('panel/bootstrap-select/bootstrap-select.css'); ?>" rel="stylesheet">
<!-- bootstrap-select -->

@endsection

@section('script')
    <!-- bootstrap-select -->
    <script src="<?= Url('panel/bootstrap-select/jquery.min.js'); ?>"></script>
    <script src="<?= Url('panel/bootstrap-select/popper.min.js'); ?>"></script>
    <script src="<?= Url('panel/bootstrap-select/bootstrap.min.js'); ?>"></script>
    <script src="<?= Url('panel/bootstrap-select/bootstrap-select.js'); ?>"></script>
    <script src="<?= Url('panel/bootstrap-select/end-script-select.js'); ?>"></script>
    <!-- bootstrap-select -->
@endsection

@section('head-content')
  ویرایش {{$record->name}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
                {!! Form::model($record,['method'=>'PATCH','route'=>['category.update',$record->id]]) !!}
                {{csrf_field()}}
                <br>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" style="padding-right:6px;">نام دسته</label>
                        {{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" style="padding-right:6px;">نام دسته مادر</label>
                        {{Form::select('cat_id',$category,null,['class'=>'form-control'])}}
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">ثبت ویرایش</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

<?php
use App\CategoryModel;
function catname($id)
{
    if($id=='-')
        return '-';
    else
    {
        $name=CategoryModel::where('id',$id)->first()['name'];
        return $name;
    }
}
?>