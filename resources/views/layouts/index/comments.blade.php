<!-- comment -->
<div class="rtlrtl wrap-dropdown-content bo7 p-t-15 p-b-14">
    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
        نظرات
        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
    </h5>
    <div class="dropdown-content dis-none p-t-15 p-b-23">
        @foreach($product->commenties() as $comment)
            <div class="row rtlrtl  p-b-20">
                <div class="col-2 border-left border-top border-info p-t-10 text-info" style="border-radius:10px;">
                    <img src="<?= Url('index/images/icons/icon-header-01.png'); ?>" >
                    {{$comment->name}}
                </div>
                <div class="col-10">
                    <p class="s-text8 p-t-5 text-justify text-muted">
                        {{$comment->description}}
                    </p>
                </div>
            </div>
            @if($comment->sub_commnet())
                @foreach($comment->sub_commnet() as $subcomment)
                    <div class="row rtlrtl  p-b-20">
                        <div class="col-1">
                            پاسخ
                            <span class="fa fa-arrow-left"></span>
                        </div>
                        <div class="col-11">
                            <div class="row rtlrtl  p-b-20" style=";border-radius:4px; background:linear-gradient(rgb(240,240,240), white);">
                                <div class="col-2 border-left border-top border-warning p-t-10 text-warning" style="border-radius:10px;">
                                    <img src="<?= Url('index/images/icons/icon-header-01.png'); ?>" >
                                    {{$subcomment->name}}
                                </div>
                                <div class="col-10">
                                    <p class="s-text8 p-t-5 text-justify text-muted">
                                        {{$subcomment->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
</div>
<div class="row container rtlrtl p-t-15 m-t-22 border-top border-bottom" style="border-radius:10px;">
    <div class="col">
        <h5>نظر بدهید</h5>
        <br style="">
        <form action="{{route('comment')}}" style="padding-bottom:25px;"  method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="m-l-10 border text-secondary" placeholder="نام" required>
                <input type="email" name="email" class=" m-l-10 border text-secondary"  placeholder="ایمیل"  required>
            </div>
            <div class="form-group">
                <textarea class="p-t-3 m-l-10 col-12 border text-secondary" name="description"  placeholder="نظر خود را در مورد کالا  بنویسید" ></textarea>
            </div>
            <input type="hidden" name="product_id" value="{{$product->id}}" >
            <input type="hidden" name="state1" value="1">
            <button class="m-b-10 m-t-10 float-right btn btn-outline-dark" type="submit">ثبت</button>
        </form>
    </div>
</div>
<!-- comment -->