@extends('layouts.adminlayouts')

@section('title')
   پنل
@endsection

@section('head-content')
    <a class="btn btn-outline-success" href="{{route('comments.index')}}" >
        مشاهده همه کامنت ها
    </a>
    <a class="btn btn-outline-success" href="{{route('comments.index')}}" >
        مشاهده کامنت های تایید نشده
    </a> <a class="btn btn-outline-success" href="{{route('comments.index')}}" >
       مشاهده کامنت ها بر اساس کالا
    </a>
@endsection

@section('head')
    <!-- head_me -->
    <!-- sweet-alert -->
    <script src="<?= Url('panel/js/sweetalert.min.js'); ?>"></script>
    <link href="<?= Url('panel/css/sweetalert.css'); ?>" rel="stylesheet">
    <!-- sweet-alert -->
    <meta name="csrf-token" content="{{csrf_token()}}" >
@endsection

@section('content')
    @include('sweet::alert')
    <div class="row">
        @foreach($comments as $comment)
            <div class="col-12" id="{{$comment->id}}_alert">
                <div style="height:auto;padding-bottom:46px;" class="alert alert-dismissible alert-warning">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    @if($comment->state1=="1")
                        <h5 class="alert-heading">
                            <span data-feather="shopping-cart"></span>
                            <a onclick="window.open('<?= url('/admin/product/'.$comment->product['id']) ?>', '', 'width=800,height=500');" >{{$comment->product['name']}}</a>
                        </h5>
                    @endif
                    <p class="mb-0 text">
                        <img  src="<?= Url('index/images/icons/icon-header-01.png'); ?>" >
                        <span class="text-success px-1">{{$comment->name}}</span>
                        {{$comment->description}}
                    </p>
                    <div style="float: left;margin:5px;">
                         <span class="text-secondary"  style="opacity:0.3;">
                            {{$comment->email}}
                        </span>
                        <button onclick="comment_del({{$comment->id}})" type="button" title="حذف شود" class="btn btn-outline-danger btn-sm mx-1" data-dismiss="modal">
                            <span data-feather="x"></span>
                        </button>
                        <button onclick="comment_add({{$comment->id}})"  type="button" title="تایید شود" class="btn btn-sm btn-outline-success mx-1">
                            <span data-feather="check"></span>
                        </button>
                        @if($comment->state1=="1")
                            <a href="{{ route('comments.edit' , ['id' => $comment->id]) }}" type="button" title="پاسخ به این پیام" class="btn btn-sm btn-outline-info mx-1">
                                <span data-feather="message-circle"></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-xs-12">
            {!! $comments->render('vendor.pagination.simple-bootstrap-4') !!}
        </div>
    </div>
@endsection



@section('script')
    <script src="<?= Url('panel/jquery-1-8-3.min.js'); ?>"></script>
    <?php $url_comment_add=route('admin_comment_add'); ?>
    <?php $url_comment_del=route('admin_comment_del'); ?>
    <script type="text/javascript">
        comment_add=function (id)
        {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }});
            $.ajax(
                {
                    url : '<?= $url_comment_add ?>',
                    type : "POST",
                    cache: false,
                    data:{
                        id : id
                    },
                    success:function (data)
                    {
                        $("#"+id+"_alert").remove();
                        swal(
                            {
                                title: "ثبت شد",
                                text: '', type: "succes",
                                timer: 2000,
                            });
                    },
                    error : function () {
                        swal(
                            {
                                title: "ثبت نشد",
                                text: 'مشکلی در اتصال به سرو پیش آمدده!', type: "warning",
                                confirmButtonColor: "#8000000",
                                timer: 3000,
                            });
                    }
                });
            swal.close();
        };
        comment_del=function (id)
        {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }});
            $.ajax(
                {
                    url : '<?= $url_comment_del ?>',
                    type : "POST",
                    cache: false,
                    data:{
                        id : id
                    },
                    success:function (data)
                    {
                        $("#"+id+"_alert").remove();
                        swal(
                            {
                                title: "حذف شد",
                                text: '', type: "warning",
                                confirmButtonColor: "#8000000",
                                timer: 2000,
                            });
                    },
                    error : function () {
                        swal(
                            {
                                title: "حذف نشد",
                                text: 'مشکلی در اتصال به سرو پیش آمدده!', type: "warning",
                                confirmButtonColor: "#8000000",
                                timer: 3000,
                            });
                    }
                });
            swal.close();
        };
    </script>
@endsection


