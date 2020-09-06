@extends('layouts.adminlayouts')

@section('title')
    اطلاعات موبایل
@endsection

@section('head-content')
<a class="btn btn-outline-warning" href="{{ route('slide.create') }}" >
   اضافه کردن عکس به اسلایدر
</a>
@endsection

@section('head')
    <!-- head_me -->
    <link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
    <script src="<?= Url('panel/js/jssor.slider-27.1.0.min.js'); ?>"></script>
    <script src="<?= Url('panel/js/slider-product.js'); ?>"></script>
    <link href="<?= Url('panel/css/slider-product.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
    <link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <style>
        .numbertable
        {
            width:3%;
        }
        .modal-body{
            height: 250px;
            overflow-y: auto;
        }
        @media (min-height: 500px) {
            .modal-body { height: 400px; }
        }

        @media (min-height: 800px) {
            .modal-body { height: 600px; }
        }
    </style>
    <!-- head_me -->
@endsection

@section('content')
    <!-- content_me -->
    @include('sweet::alert')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($sliders as $slider)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img style="height:200px;width:auto;"  src="<?= url('/images/slider/'.$slider->img) ?>" alt="{{$slider->name}}" />
                            <div class="card-body">
                                <p class="card-text">
                                {{$slider->name}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('slide.edit' , ['id' => $slider->id]) }}" type="button" class="btn btn-sm btn-outline-warning">
                                            <span data-feather="edit"></span>
                                        </a>
                                        <button onclick="window.open('<?= url('/admin/product/'.$slider->product_id) ?>', '', 'width=800,height=500');" type="button" class="btn btn-sm btn-outline-info">
                                            <span data-feather="info"></span>
                                        </button>
                                        <form class="btn btn-sm btn-outline-danger" action="{{ route('slide.destroy'  , ['id' => $slider->id]) }}" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <button  type="submit" class="btn btn-sm btn-outline-danger" style="border:0;padding:0px;" ><span data-feather="trash"></span></button>
                                        </form>
                                    </div>
                                    <small class="text-muted">
                                        <?php $v = new \Hekmatinasser\Verta\Verta($slider->updated_at);?>
                                        {!! $v->format('%B %d، %Y'); !!}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
        </div>
    </div>
    <div class="row">
        {!! $sliders->render('vendor.pagination.simple-bootstrap-4') !!}
    </div>
@endsection
