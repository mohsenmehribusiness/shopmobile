@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
<script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
<link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
<!-- head_me -->
<!-- bootstrap-select -->
<link href="<?= Url('panel/bootstrap-select/bootstrap-select.css'); ?>" rel="stylesheet">
<!-- bootstrap-select -->
<style>
    th {
        background-color: #4b5257;
        color: white;
    }
    td, th {
        border: 1px solid #ccc;
    }
</style>
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
دسته بندی
@endsection

@section('content')
    <div class="row">
        @include('sweet::alert')
        <div class="col-md-8 order-md-1">
            @include('partials.errors')
            <a href="#demo" class="btn btn-outline-success" data-toggle="collapse">
               ایجاد دسته جدید
            </a>
            <div id="demo" class="collapse">
                <div class="col-md-8 order-md-1">
                    <form class="needs-validation" novalidate action="{{route('category.store')}}"  method="post">
                        {{csrf_field()}}
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" style="padding-right:6px;">نام دسته جدید</label>
                                <input class="form-control" name="name" id="name" type="text"  required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" style="padding-right:6px;">نام دسته مادر</label>
                                {{Form::select('cat_id',$category,null,['class'=>'form-control'])}}
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
             تعداد کل دسته ها : <span class="badge badge-dark">{{$count}}</span>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            تعداد دسته های مادر : <span class="badge badge-dark">{{$father_count}}</span>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            زیر دسته ها: <span class="badge badge-dark">{{$count_}}</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6">
        <table class="table table-bordered table-sm" style="text-align: center;" >
            <thead>
            <tr>
                <th>نام دسته</th>
                <th>زیر دسته ای از</th>
                <th>تنظیمات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cats as $cat)
                <tr id="{{$cat->id}}" >
                    <td>
                        {{$cat->name}}
                    </td>
                    <td>
                        {!! catname($cat->cat_id) !!}
                    </td>
                    <td >
                         <a href="{{ route('category.edit' , ['id' => $cat->id]) }}">
                            <button type="button" class="btn btn-sm btn-outline-secondary" title="ویرایش {{$cat->name}}"><span data-feather="edit"></span></button>
                        </a>
                        <form class="btn btn-sm btn-outline-danger" action="{{ route('category.destroy'  , ['id' => $cat->id]) }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <button  type="submit" class="btn btn-sm btn-outline-danger" style="border:0;padding:0px;" ><span data-feather="trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <div class="row">
        {{$cats->render()}}
    </div>
@endsection

<?php
use App\Category;
function catname($id)
{
    if($id=='-')
        return '-';
    else
    {
        $name=Category::where('id',$id)->first()['name'];
        return $name;
    }
}
?>