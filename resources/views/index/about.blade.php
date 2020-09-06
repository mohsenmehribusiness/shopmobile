@extends('layouts.index.index-simple')

@section('body')
    @include('layouts.index.imagescroll')
    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-38 rtlrtl">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-b-30">
                    <div class="hov-img-zoom">
                        <img src="about.jpg" alt="IMG-ABOUT">
                    </div>
                </div>
                <div class="col-md-8 p-b-30">
                    <h3 class="m-text26 p-t-15 p-b-16">
                        درباره ما
                    </h3>
                    <p class="p-b-28 text-justify">
                        {{$about->about}}
                    </p>
                    <div class="bo13 p-l-29 m-l-9 p-b-10" style="direction:ltr;">
                        <div class="row" style="direction:rtl;">
                            <p class="rtlrtl p-b-11 text-justify">
                                <a href="{{route('about')}}" class="topbar-social-item fa fa-location-arrow ">
                                </a><span> {{$about->address}}</span>
                            </p>
                        </div>
                    </div>
                    <div class="bo13 p-l-29 m-l-9 p-b-10" style="direction:ltr;border-left: 3px solid;border-right: 0;border-color:lightgray;">
                        <div class="row" style="direction:ltr;">
                            <div class="col col-xs-12">
                                <p class=" p-b-11 text-justify">
                                    <a href="{{route('about')}}" class="topbar-social-item fa fa-telegram">
                                    </a><span> {{$about->telegram}}</span>
                                </p>
                            </div>
                            <div class="col col-xs-12">
                                <p class="p-b-11 text-justify">
                                    <a href="{{route('about')}}" class="topbar-social-item fa fa-instagram">
                                    </a><span> {{$about->instagram}}</span>
                                </p>
                            </div>
                            <div class="col col-xs-12">
                                <p class=" p-b-11 text-justify">
                                    <a href="{{route('about')}}" class="topbar-social-item fa fa-simplybuilt">
                                    </a><span> {{$about->fax}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-xs-12">
                                <p class=" p-b-11 text-justify">
                                    <a href="{{route('about')}}" class="topbar-social-item fa fa-mobile">
                                    </a><span> {{$about->phone}}</span>
                                </p>
                            </div>
                            <div class="col col-xs-12">
                                <p class=" p-b-11 text-justify">
                                    <a href="{{route('about')}}" class="topbar-social-item fa fa-phone">
                                    </a><span> {{$about->phone_}}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
@endsection