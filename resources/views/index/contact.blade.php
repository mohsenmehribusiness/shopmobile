@extends('layouts.index.index-simple')

@section('body')
    @include('layouts.index.imagescroll')
    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <div id="mappi" class="p-r-20 p-r-0-lg hidden-xs-down">
                    </div>
                </div>
                <div class="col-md-6 p-b-30">
                    <form class="leave-comment" action="{{route('contact')}}"  method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="state1" value="0">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            انتقادات و پیشنهادات
                        </h4>
                        <div class="bo4 of-hidden size15 m-b-20 rtlrtl">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="نام">
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20 rtlrtl">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="آدرس ایمیل">
                        </div>
                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20 rtlrtl" name="description" placeholder="متن خود را بنویسید"></textarea>
                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                ارسال
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    $(document).ready(function()
    {
        $("#mappi").append('<iframe class="border rounded" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13274.8735516729!2d59.2042672!3d33.7162352!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1528576765264" width="550" height="503" frameborder="0" style="border:0" allowfullscreen></iframe>');
        $("#mapp").remove();
    });
</script>
@endsection