<!-- instagram -->
<section class="instagram p-t-20 rtlrtl m-b-10">
    <div class="flex-w">
        @foreach($companies as $company)
            <!-- Block4 -->
            <div class="block4 wrap-pic-w border-top border-bottom">
                <img   src="<?= url('images/company/'.$company->logo) ?>">
                <a href="{{route('company',['$company'=>$company->id])}}" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <span class="s-text9">
                            <div class="row">
                                <div class="col-8">
                                     {{$company->name}}
                                </div>
                                <div class="col-4">
                                    <span class="p-t-5 m-r-5">( {{$company->count_product()}} )</span>
                                </div>
                            </div>
                            </span>
                        <p class="s-text10 m-b-15 h-size1 of-hidden text-justify">
                                {{$company->description}}
                        </p>
                    </div>
                </a>
            </div>
            <!-- Block4 -->
        @endforeach
    </div>
</section>
<!-- end-instagram -->