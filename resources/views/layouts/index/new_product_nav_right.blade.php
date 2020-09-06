<h4 class="m-text23 p-t-65 p-b-34">
    کالاهای جدید
</h4>
<ul class="bgwhite">
    @foreach($products as $product)
        <li class="flex-w p-b-20 border-bottom">
            <a href="{{ route('product',['product'=>$product->id])}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                <img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG-PRODUCT" />
            </a>
            <div class="w-size23 p-t-5">
                <a href="{{ route('product',['product'=>$product->id])}}" class="s-text20">
                   {{$product->name}}
                </a>
                <span class="dis-block s-text17 p-t-6">
                    {!! number_format($product->newprice()[0]) !!}
                تومان
                </span>
            </div>
        </li>
    @endforeach
</ul>