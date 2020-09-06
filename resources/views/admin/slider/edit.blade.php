@extends('layouts.adminlayouts')

@section('head')
    <!-- head_me -->
    <link href="<?= Url('panel/css/w3.css'); ?>" rel="stylesheet">
    <link href="<?= Url('panel/select/styles/multiselect.css'); ?>" rel="stylesheet">
    <script src="<?= Url('panel/select/multiselect.min.js'); ?>"></script>
    <script src="<?= Url('panel/js/ckeditor/ckeditor.js'); ?>"></script>
    <!-- head_me -->
@endsection

@section('script')
@endsection

@section('head-content')
  ویرایش عکس اسلایدر کالای {{$record->name}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 order-md-1">
            {!! Form::model($record,['method'=>'PATCH','route'=>['slide.update',$record->id],'class'=>'needs-validation','files'=>true]) !!}
            {{csrf_field()}}
                    @include('partials.errors')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name_id" style="padding-right:6px;">انتخاب کالا</label>
                            <select id='name_id' name="name_id">
                                @foreach($products as $key=>$value)
                                    <option value="{{$value}}-{{ $key }}" >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-top:35px;padding-bottom:35px;">
                        <div class="col-md-12 mb-6">
                            <label for="img" style="padding-right:6px;">انتخاب عکس</label>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">ذخیره</button>
            {!! Form::close() !!}
        </div>
@endsection