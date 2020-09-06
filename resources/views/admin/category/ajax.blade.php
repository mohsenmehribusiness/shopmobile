@extends('layouts.adminlayouts')

@section('head')
    <!-- head_me -->
    <meta name="csrf-token" content="{{Csrf_token()}}">
    <link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
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
    <?php $url="/ajaxf" ?>
    <script>
        /*ajax-delete*/
        function  fi(name){
            swal({
                    title: "حذف دسته?",
                    text: 'آیا از انتخاب خود مطمئن هستید', type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "بله",
                    cancelButtonText: "خیر",
                    closeOnConfirm: false,
                    timer: 1000,
                },
                function (isConfirm) {
                    if (isConfirm)
                    {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url:'<?= $url ?>',
                            type: 'POST',
                            data: 'name=' + name,
                            success: function (data) {
                                $("div#result").html(data);
                                $("tr#"+name).remove();
                            }
                        });
                        swal.close();
                    }

                    /******************************************/
                }
                );
        }
        /*ajax-delete*/
    </script>
    <script>
        testAjax=function (name) {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'<?= $url ?>',
                type:'POST',
                data:'name='+name,
                success:function (data) {
                 $("div#result").html(data);
                    $("div#result2").html(data);
                }
            });

        }
    </script>
    <script>
        /*ajax-insert*/
        $(document).ready(function ()
        {
            $('#form1').submit(function (event)
            {
                event.preventDefault();
                var $this=$(this);
                var url=$this.attr('action');
                $.ajax({
                    url:url,
                    type:'POST',
                    datatype:'JSON',
                    data:$this.serialize(),
                })
                .done
                (
                    function(response)
                    {
                        $("div#formresult").empty();
                        $.each
                        (
                            response,function (index,val)
                            {
                                switch (index){
                                    case "success":
                                        $("div#formresult").html(val);
                                        break;
                                }
                            }
                        )
                    }
                )
                    .fail(function () {
                        console.log('error');
                    });
            }
            );
        }
        );
        /*ajax-insert*/
    </script>

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
            <a href="#demo" class="btn btn-outline-success" data-toggle="collapse"><span data-feather="plus"></span>ایجاد کالا</a>
            <div id="demo" class="collapse">
                <div class="col-md-8 order-md-1">
                    <form id="form1" class="needs-validation" novalidate action="{{url('/ajaxf')}}"  method="post">
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
                                <label for="catt" style="padding-right:6px;">نام دسته مادر</label>
                                {{Form::select('cat_id',$category,null,['class'=>'form-control','id'=>'catt'])}}
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="formresult" class="col-md-4 order-md-1">hi</div>
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
                @foreach ($cat as $cat)
                    <tr id="{{$cat->id}}" >
                        <td>
                            {{$cat->name}}
                        </td>
                        <td>
                            {!! catname($cat->cat_id) !!}
                        </td>
                        <td >
                            <form  action="{{ route('category.destroy'  , ['id' => $cat->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                            </form>
                            <button  onclick="fi({{$cat->id}})" class="btn btn-sm btn-outline-secondary" title="حذف {{$cat->id}}"  ><span data-feather="trash"></span></button>
                            <a href="{{ route('category.edit' , ['id' => $cat->id]) }}">
                                <button type="button" class="btn btn-sm btn-outline-secondary" title="ویرایش {{$cat->name}}"><span data-feather="edit"></span></button>
                            </a>
                            <button href="/post/{{$cat->id}}" class="btn btn-sm btn-secondary btn-info"><span data-feather="trash"></span></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <span class="btn btn-success btn-secondary" onclick="testAjax('mohsen mehri')">AJAX</span>
    <div class="row" id="result" style="color: green;">
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