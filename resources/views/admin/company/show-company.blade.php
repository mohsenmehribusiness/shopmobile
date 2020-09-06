@extends('layouts.detaillayouts')

@section('title')
   جزئیات
@endsection


@section('head')
@endsection

@section('up')
    <div class="float-sm-right">
        <div style="padding: 8px;">
            <a href="{{ route('company.edit' , ['id' => $company->id]) }}">
                <button type="button" class="btn btn-sm btn-outline-dark"><span data-feather="edit"></span></button>
            </a>
        </div>
    </div>
    <div class="float-sm-left">
        <div style="padding: 8px;">
            {{$company->name}}
        </div>
    </div>
    <br>
    <br>
    <hr>
@endsection

@section('down')
    <div class="container">
        <br>
        <dl>
            <dt>تعداد کالا های  {{$company->name}}</dt>
            <dd style="padding-right: 80px;">{{$company->products->count()}}</dd>
            <dt>تاریخ آخرین ویرایش</dt>
            <dd style="padding-right: 80px;">{{$company->updated_at}}</dd>
            <dt>
                توضیحات
            </dt>
            <dd>
                <p>
                    {{$company->description}}
                </p>
            </dd>
            <dt>
                اسامی کالاها
            </dt>
            <dd>
                <p>
                <h5>
                    @foreach($company->products as $product)
                        <span class="badge badge-dark ">
                            {{$product->name}}
                        </span>
                    @endforeach
                </h5>
                </p>
            </dd>
        </dl>
    </div>
@endsection

@section('content')
    <img   src="<?= url('images/company/'.$company->logo) ?>">
@endsection
@section('body')
@endsection
