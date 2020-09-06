@extends('layouts.index.index-simple')

@section('body')
    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container rtlrtl">
            <!-- Cart item -->
            <div class="row">
                <div class="col-2" style="padding:0;margin: 0;">
                    <table style="padding:0;margin:0;font-family:Montserrat-Regular;" class="text-center table table-borderless table-warning">
                        <thead>
                        <tr style="height:124px;">
                            <td style="padding-top: 2.79rem;">تصویر گوشی</td>
                        </tr>
                        <tr>
                            <td>نام کالا</td>
                        </tr>
                        <tr>
                            <td>قیمت کالا</td>
                        </tr>
                        <tr>
                            <td>کیفیت تصویر</td>
                        </tr>
                        <tr>
                            <td>پشتیبانی از اینترنت</td>
                        </tr>
                        <tr>
                            <td>دوربین</td>
                        </tr>
                        <tr>
                            <td>شرکت</td>
                        </tr>
                        <tr>
                            <td>تاریخ انتشار</td>
                        </tr>
                        </thead>
                    </table>
                </div>
                @if($products)
                    @foreach($products as $product)
                        <div class="col" style="padding:0;margin: 0;">
                            <table style="padding:0;margin:0;font-family:Montserrat-Regular;color:#888" class="text-center table table-bordered">
                                <tr>
                                    <td>
                                        <img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" style="height:97px;width:auto;" alt="{{$product->name}}" />
                                    </td>
                                </tr>
                                <tr class="table-success" style="color:black;">
                                    <td>
                                        <a href="{{ route('product',['product'=>$product->id])}}">
                                        {{$product->name}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                   <td>
                                       {!! number_format($product->newprice()[0]) !!}
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                       {{$product->modality}}
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                       {{$product->internet}}
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                       {{$product->camera}}
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                       {{$product->company->name}}
                                   </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $v = new \Hekmatinasser\Verta\Verta($product->created_at);?>
                                        {!! $v->format('%B %d، %Y'); !!}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection