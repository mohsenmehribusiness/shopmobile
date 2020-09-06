@if(!empty(Session::get('compare')))
    <div class="header-wrapicon2 rtltrtl" id="compare">
    <span  class="header-icon1 js-show-header-dropdown-compare">
        <a  class="topbar-social-item fa fa-check-square-o"></a>
    </span>
        <?php $count_compare=sizeof(Session::get('compare'));?>
        <span class="header-icons-noti">{{$count_compare}}</span>
        <!-- Header cart noti -->
        <div class="header-cart header-dropdown-compare">
            <ul class="header-cart-wrapitem">
                @foreach(Session::get('compare') as $key=>$value)
                    <?php
                    $product=App\product::find($key);
                    ?>
                    <li id="{{$key}}_compare" class="header-cart-item border-bottom">
                        <a  onclick="del_compare({{$key}})"  class="header-cart-item-img">
                            <img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG">
                        </a>
                        <div class="header-cart-item-txt">
                            <a href="{{ route('product',['product'=>$product->id])}}" class="p-l-10 header-cart-item-name">
                                {{$product->name}}
                            </a>
                            <span class="header-cart-item-info p-l-10">
                            <span>
                                {!! number_format($product->newprice()[0]) !!}
                                تومان
                            </span>
                        </span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <br>
            <hr>
            <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                    <!-- Button -->
                    <a href="{{route('compare')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                        مقايسه نهايي
                    </a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="header-wrapicon2 m-r-13" id="compare">
    <span  class="header-icon1 js-show-header-dropdown-compare">
        <a  class="topbar-social-item fa fa-check-square-o"></a>
    </span>
        <span class="header-icons-noti">0</span>
        <!-- Header cart noti -->
        <div class="header-cart header-dropdown-compare">
            <ul class="header-cart-wrapitem">
                هيچ کالايي براي مقايسه انتخاب نشده است
            </ul>
            <br>
            <hr>
            <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                    <!-- Button -->
                    <a href="{{route('compare')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                        مقايسه نهايي
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
