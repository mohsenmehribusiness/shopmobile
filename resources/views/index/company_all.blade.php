@extends('layouts.index.index-simple')

@section('body')
    @include('layouts.index.imagescroll')
    <!-- Instagram -->
    <div class="container">
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                 تمامی شرکت ها
            </h3>
        </div>
        <div class="flex-w rs1-block4">
            <!-- Block4 -->
            @foreach($companies as $company)
                <div class="block4 wrap-pic-w border-top border-right border-left">
                <img src="<?= url('images/company/'.$company->logo) ?>" alt="IMG-INSTAGRAM">
                <a href="{{route('company',['$company'=>$company->id])}}" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_bag fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-5 m-r-5"> {{$company->count_product()}} </span>
					</span>
                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <h6  class="s-text10 h-size1 of-hidden">
                            {{$company->name}}
                        </h6>
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            {{$company->description}}
                        </p>
                        <span class="s-text9">

						</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    </div>
        <hr class="container m-b-99">
@endsection