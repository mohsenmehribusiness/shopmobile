@extends('layouts.adminlayouts')

@section('title')
    اطلاعات موبایل
@endsection

@section('head-content')
    <a class="btn btn-outline-success" href="{{ route('company.create') }}" >
        <span data-feather="plus"></span>
        ایجاد شرکت
    </a>
@endsection

@section('head')
    <!-- head_me -->
    <!-- sweet-alert -->
    <script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
    <link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <style>
        .mohsen{
            width:3%;
        }
        .zoom {
            transition: transform .5s; /* Animation */
        }
        .zoom:hover {
            z-index:10;
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .inputcolor{
            color: lightgray;
        }
    </style>
@endsection

@section('content')
    @include('sweet::alert')
    <ul class="nav nav-pills nav-justified" style="margin-bottom: 15px;">
        <li class="nav-item" style="margin-right:2px;margin-left:2px;">
            <a class="btn btn-outline-info nav-link active" data-toggle="pill" href="#state1">اطلاعات مدیریتی</a>
        </li>
        <li class="nav-item" style="margin-right:2px;margin-left:2px;">
            <a class="btn btn-outline-info nav-link" data-toggle="pill" href="#state2">شرکت ها</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="state1">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                    <tr>
                        <th  >شرکت</th>
                        <th  >تاریخ</th>
                        <th  >تعداد کالا</th>
                        <th  >تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>
                                @if($company->logo)
                                    <img  class="zoom rounded border"  style="width:auto;height:55px;"  src="<?= url('images/company/'.$company->logo) ?>" >
                                @endif
                                <span style="padding-right:1px;">
                                    {{$company->name}}
                                </span>
                            </td>
                            <td>
                                <?php $v = new \Hekmatinasser\Verta\Verta($company->created_at);?>
                                {!! $v->formatDifference(); !!}
                            </td>
                            <td>
                                {{$company->products->count()}}
                            </td>
                            <td>
                                <form class="btn btn-sm btn-outline-danger" action="{{ route('company.destroy'  , ['id' => $company->id]) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button  type="submit" class="btn btn-sm btn-outline-danger" style="border:0;padding:0px;" ><span data-feather="trash"></span></button>
                                </form>
                                <a href="{{ route('company.edit' , ['id' => $company->id]) }}">
                                    <button type="button" class="btn btn-sm btn-outline-info"><span data-feather="edit"></span></button>
                                </a>
                                <button class="btn btn-sm btn-outline-info" onclick="window.open('<?= url('/admin/company/'.$company->id) ?>', '', 'left=100,top=100,width=700,height=400');"  >
                                    <span data-feather="info"></span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
        <div class="tab-pane container" id="state2">
            <div class="row">
            @foreach($companies as $company)
                    <div class="col-sm-4" style="margin-bottom:15px;">
                        <div class="card" style="width: 18rem;max-height:18rem; ">
                            <img class="card-img-top" style="max-height:10rem;" src="<?= url('images/company/'.$company->logo) ?>">
                            <div class="card-body border border-right-0 border-left-0 border-bottom-0">
                                <h5 class="card-title">{{$company->name}}</h5>
                                <button class="float-right btn btn-outline-info" onclick="window.open('<?= url('/admin/company/'.$company->id) ?>', '', 'width=600,height=400');"  >
                                   بیشتر
                                </button>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" style="align-content: center;">
            {!! $companies->render('vendor.pagination.simple-bootstrap-4') !!}
        </div>
    </div>
@endsection
@section('body')
    <!-- end-body-me -->
    <script>
        var tables = document.getElementsByTagName('table');
        var table = tables[tables.length - 1];
        var rows = table.rows;
        td = document.createElement('td');
        td.appendChild(document.createTextNode('#'));
        rows[0].insertBefore(td, rows[0].firstChild);
        for(var i = 1, td; i < rows.length; i++){
            td = document.createElement('td');
            td.classList.add("mohsen");
            td.appendChild(document.createTextNode(i));
            rows[i].insertBefore(td, rows[i].firstChild);
        }
    </script>
    <!-- end-body-me -->
@endsection
