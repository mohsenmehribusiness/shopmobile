<!-- Slide1 -->
<style>
    #slider_hover:hover{
        color: rgb(230,85,64);
        text-decoration: none;
    }
</style>
<section class="slide1" style="direction:ltr;">
    <div class="wrap-slick1">
        <div class="slick1">
            @foreach($images as $image)
            <div class="item-slick1 item3-slick1" style="background: url(<?= url('/images/slider/'.$image->img) ?>) no-repeat center;">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <a id="slider_hover" class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22 rtlrtl" style="text-decoration:none;"  data-appear="rotateInDownLeft">
                        {{$image->name}}
                    </a>
                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33 rtlrtl" data-appear="rotateInUpRight">
                            <?php $v = new \Hekmatinasser\Verta\Verta($image->created_at);?>
                            {!! $v->formatDifference(); !!}
						</span>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="{{ route('product',['product'=>$image->product_id])}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            مشاهده کالا
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Slide1 -->