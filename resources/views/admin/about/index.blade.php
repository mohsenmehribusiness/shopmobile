@extends('layouts.adminlayouts')

@section('title')
   اطلاعات سایت
@endsection

@section('head-content')
    <a class="btn btn-outline-success" href="{{ route('about.edit',['about'=>$about->id]) }}" >
        ویرایش اطلاعات سایت
    </a>
@endsection

@section('head')
    <!-- head_me -->
    <!-- sweet-alert -->
    <script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
    <link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <style>
        .borderless{
            border-top-style: none;
            border-left-style: none;
            border-right-style: none;
            border-bottom-style: none;
        }
        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }
        table.borderless td,table.borderless th{
            border: none !important;
        }
    </style>
@endsection

@section('content')
    @include('sweet::alert')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <!-- 'url','name','ah6ress','telegram','phone','phone_fix','seen','fax','email' -->
            <div class="col">
            <div class="p-3 border" style="font-size:110%;">
                <table class="table borderless">
                    <tr>
                        <td>نام</td>
                        <td>
                            {{$about->name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ایمیل
                        </td>
                        <td>
                            {{$about->email}}
                        </td>
                    </tr>
                    <tr>
                        <td>تلفن</td>
                        <td>
                            {{$about->phone_}}
                        </td>
                    </tr>
                    <tr>
                        <td>موبایل</td>
                        <td>
                            {{$about->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td>تلگرام</td>
                        <td>
                            {{$about->telegram}}
                        </td>
                    </tr>
                    <tr>
                        <td>اینستاگرام</td>
                        <td>
                            {{$about->instagram}}
                        </td>
                    </tr>
                </table>
                    <p>آدرس</p>
                    <h6 class="text-info px-2" >{{$about->address}}</h6>
            </div>
            </div>
            <div class="col">
                <div class="p-3 border">
                    <h5>توضیح سایت(صفحه درباره ما)</h5>
                    <p class="text-justify" style="font-size:110%;">
                        {{$about->about}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('body')
@endsection
