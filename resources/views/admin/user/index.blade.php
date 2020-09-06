@extends('layouts.adminlayouts')

@section('head')
<!-- head_me -->
<!-- AJAX -->
<!-- AJAX -->
<link href="<?= Url('css/w3.css'); ?>" rel="stylesheet">
<script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
<link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
<!-- head_me -->
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
@endsection

@section('head-content')
    تنظیمات مدیر سایت
@endsection

@section('content')
    @include('sweet::alert')
    <div class="row">
        <div class="col"></div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img style="height:200px;width:auto;"  src="<?= url('/images/user/'.$user->img) ?>" alt="{{$user->name}}" />
                <div class="card-body">
                    <p class="card-text">
                        {{$user->name}}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('user.edit' , ['id' => $user->id]) }}" type="button" class="btn btn-sm btn-outline-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </div>
                        <small class="text-muted">
                            <?php $v = new \Hekmatinasser\Verta\Verta($user->updated_at);?>
                            {!! $v->format('%B %d، %Y'); !!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@endsection