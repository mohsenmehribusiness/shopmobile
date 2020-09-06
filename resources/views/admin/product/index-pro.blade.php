@extends('layouts.adminlayouts')

@section('title')
    اطلاعات موبایل
@endsection

@section('head-content')
<a class="btn btn-outline-success" href="{{ route('product.create') }}" >
    <span data-feather="plus"></span>
    ایجاد کالا
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
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-bordered">
                <thead>
                <tr>
                    <th class="col-sm-2" >نام کالا</th>
                    <th class="col-sm-2" >تاریخ</th>
                    <th class="col-sm-1" >تعداد نظرات</th>
                    <th class="col-sm-1" >تعداد مشاهدات</th>
                    <th class="col-sm-1" >تعداد سفارشات</th>
                    <th class="col-sm-4" >تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{$product->name}}
                        </td>
                        <td>
                            <?php $v = new \Hekmatinasser\Verta\Verta($product->created_at);?>
                            {!! $v->formatDifference(); !!}
                        </td>
                        <td>
                            {{$product->commen}}
                        </td>
                        <td>
                            {{$product->seen}}
                        </td>
                        <td>
                            {{$product->orde}}
                        </td>
                        <td>
                            <form class="btn btn-sm btn-outline-danger" action="{{ route('product.destroy'  , ['id' => $product->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button  type="submit" class="btn btn-sm btn-outline-danger" style="border:0;padding:0px;" ><span data-feather="trash"></span></button>
                            </form>
                            <a href="{{ route('product.edit' , ['id' => $product->id]) }}">
                                <button type="button" class="btn btn-sm btn-outline-info"><span data-feather="edit"></span></button>
                            </a>
                            <button class="btn btn-sm btn-outline-info" onclick="window.open('<?= url('/admin/product/'.$product->id) ?>', '', 'width=800,height=500');"  >
                                <span data-feather="info"></span>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <script>
                var tables = document.getElementsByTagName('table');
                var table = tables[tables.length - 1];
                var rows = table.rows;
                td = document.createElement('td');
                td.appendChild(document.createTextNode('#'));
                rows[0].insertBefore(td, rows[0].firstChild);
                for(var i = 1, td; i < rows.length; i++){
                    td = document.createElement('td');
                    td.classList.add("numbertable");
                    td.appendChild(document.createTextNode(i));
                    rows[i].insertBefore(td, rows[i].firstChild);
                }
            </script>
        </div>
    </div>
</div>
    <hr>
    <div>
        <div class="row">
                {!! $products->render('vendor.pagination.simple-bootstrap-4') !!}
        </div>
    </div>
    <hr>
    <!-- content_me -->
@endsection
@section('body')
  <!-- end-body-me -->
     <!-- end-body-me -->
@endsection
