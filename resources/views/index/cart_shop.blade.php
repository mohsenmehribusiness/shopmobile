@extends('layouts.index.index-simple')

@section('body')
    <!-- Cart -->
    {{csrf_field()}}
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container rtlrtl">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">نام کالا</th>
                            <th class="column-3">قیمت</th>
                            <th class="column-4 p-l-70">تعداد</th>
                            <th class="column-5">جمع قیمت ها</th>
                        </tr>
                        @if($carts)
                            <?php $price=0;$total_price=0; ?>
                            @foreach($carts as $key=>$value)
                                <?php $product=App\product::find($key); ?>
                                <tr class="table-row">
                                    <td class="column-1" >
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG-PRODUCT" />
                                        </div>
                                    </td>
                                    <td class="column-2">{{$product->name}}</td>
                                    <input type="hidden" value="{!! $product->newprice()[0] !!}}" id="{{$product->id}}_price">
                                    <td class="column-3" >
                                        {!! number_format($product->newprice()[0]) !!}
                                    </td>
                                    <td class="column-4">
                                        <div class="flex-w bo5 of-hidden w-size17">
                                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input value="{{$value}}" id="{{$product->id}}_count" class="size8 m-text18 t-center num-product" type="number" name="num-product1">
                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="column-5" id="{{$product->id}}_total">
                                        total
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <tr class="table-row border-bottom-0">
                            <td class="column-1" >
                                مجموع کالا ها
                            </td>
                            <td class="column-2">
                            </td>
                            <td class="column-3" >
                            </td>
                            <td class="column-4">
                                <span id="count_sum" >

                                </span>
                                عدد
                            </td>
                            <td class="column-5">
                                <span id="total_sum"></span>
                                تومان
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="rtlrtl flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                    <div class="size11 bo4 m-r-10">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="کد تخفیف">
                    </div>
                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            تایید کد تخفیف
                        </button>
                    </div>
                </div>
                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                    <a href="{{route('cart_end')}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        تایید نهایی
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script type="text/javascript">
    @if($carts)
        var total_sum=0;
        var count_sum=0;
        @foreach($carts as $key=>$value)
            var count=parseInt($("#{{$key}}_count").val());
            var count2=parseInt($("#{{$key}}_price").val());
            var total=$("td#{{$key}}_total");
            count=parseInt(count);
            var sum=count * count2;
            total.text(sum);
            total_sum +=sum;
            count_sum+=count;
        @endforeach
        $("#count_sum").text(count_sum);
        $("#total_sum").text(total_sum);
    @endif
</script>
@endsection

@section('head')
    <meta name="csrf-token" content="{{csrf_token()}}" >
@endsection