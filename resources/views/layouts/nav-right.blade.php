<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link active" href="<?= Url('admin/'); ?>">
                  <span data-feather="home"></span>
                  خلاصه وضعیت<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= Url('admin/product'); ?>" >
                  <span data-feather="shopping-cart"></span>
                    کالا
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}" >
                  <span data-feather="layers"></span>
                  دسته بندی ها
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= Url('admin/user/'); ?>" >
                  <span data-feather="user"></span>
                  مدیر سایت
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('company.index')}}">
                  <span data-feather="layers"></span>
                    شرکت
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('slide.index')}}">
                  <span data-feather="layers"></span>
                  گالری سایت
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}">
                  <span data-feather="airplay"></span>
                  اطلاعات سایت
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comments.index')}}">
                  <span data-feather="send"></span>
                  مدیریت دیدگاه ها
                  @if($count_comment!=0)
                      <span class="badge badge-info badge-pill" style="margin-right:50px;font-size:102%;">
                          {{$count_comment}}
                      </span>
                   @endif
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('sendweb')}}">
                  <span data-feather="cast"></span>
                  مدیریت انتقادات
                  @if($count_web!=0)
                    <span class="badge badge-info badge-pill" style="margin-right:50px;font-size:102%;">
                          {{$count_web}}
                      </span>
                  @endif
                </a>
              </li>
            </ul>
           </div>
        </nav>