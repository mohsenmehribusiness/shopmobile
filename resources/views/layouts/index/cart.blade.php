@if(!empty(Session::get('cart')))
<div class="header-wrapicon2 rtlrtl" id="cart">
	<img src="<?= Url('index/images/icons/icon-header-02.png'); ?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
		<?php $count_cart=sizeof(Session::get('cart'));$price=0;?>
		<span class="header-icons-noti">{{$count_cart}}</span>
		<div  class="header-cart header-dropdown">
			<ul class="header-cart-wrapitem">
				@foreach(Session::get('cart') as $key=>$value)
					<?php
						$product=App\product::find($key);
					?>
					<li id="{{$key}}" class="header-cart-item border-bottom">
						<a  onclick="del_cart({{$key}})"  class="header-cart-item-img">
							<img  src="<?= url('/images/product/'.$product->images[0]->img) ?>" alt="IMG">
						</a>
						<div class="header-cart-item-txt">
							<button onclick="add_cart({{$key}})"  style="font-size:65%;" class=" topbar-social-item fa fa-plus"></button>
							<span id="{{$key}}_span">{{$value}}</span>
							<!--<span id="{{$key}}_span_mother"><span id="{{$key}}_span">{{$value}}</span></span>-->
							<button onclick="min_cart({{$key}})" style="font-size:65%;" class="topbar-social-item fa fa-minus"></button>
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
					<?php $price+=($value * $product->newprice()[0]) ?>
				@endforeach
			</ul>
			<div class="header-cart-total">
				جمع کل :
				{!! number_format($price) !!}
			</div>
			<div class="header-cart-buttons">
				<div class="header-cart-wrapbtn">
					<!-- Button -->
					<a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
						نهایی کردن خرید
					</a>
				</div>
			</div>
	</div>
	<!-- Header cart noti hover -->
</div>
@else
	<div class="header-wrapicon2 rtlrtl" id="cart">
		<img src="<?= Url('index/images/icons/icon-header-02.png'); ?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
		<span class="header-icons-noti">0</span>
		<div  class="header-cart header-dropdown">
			<ul class="header-cart-wrapitem">
				 سبد خرید خالی است
			</ul>
			<div class="header-cart-total">
				جمع کل :
			</div>
            <hr>
            <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                    <!-- Button -->
                    <a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                        نهایی کردن خرید
                    </a>
                </div>
            </div>
		</div>
		<!-- Header cart noti hover -->
	</div>
@endif