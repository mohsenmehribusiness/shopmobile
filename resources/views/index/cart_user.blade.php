@extends('layouts.index.index-simple')

@section('body')
    <!-- Cart user -->
    @include('partials.errors')
    <div class="container">
        <form class="leave-comment" action="{{route('cart_end_end')}}"  method="post">
            {{csrf_field()}}
            <div class="bo4 of-hidden size15 m-b-20 rtlrtl">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="نام">
            </div>
            <div class="bo4 of-hidden size15 m-b-20 rtlrtl">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="آدرس ایمیل">
            </div>
            <div class="bo4 of-hidden size15 m-b-20 rtlrtl">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="شماره تلفن">
            </div>
            <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20 rtlrtl" name="address" placeholder="آدرس"></textarea>
            <div class="w-size25">
                <!-- Button -->
                <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                    ارسال
                </button>
            </div>
        </form>
    </div>
    <!--cart user -->
@endsection

@section('script')
@endsection