  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
          <h1 class="m-0" style="font-size: 20px">
              {{-- <img class="img-fluid me-3" src="{{ asset('frontend/img/icon/icon-02-primary.png') }}" alt=""> --}}
              الدولية للمصاعد
          </h1>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">

          <div class="navbar-nav mx-auto bg-light  py-3 py-lg-0 ">
              <a href="{{ route('home') }}"
                  class="{{ request()->routeIs('home') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">الرئيسية</a>
              <a href="{{ route('servicesProducts', 'service') }}"
                  class="{{ Request::is('servicesProducts/service*') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">
                  خدماتنا
              </a>

              <a href="{{ route('servicesProducts', 'product') }}"
                  class="{{ Request::is('servicesProducts/product*') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">
                  منتجاتنا
              </a>

              {{-- @foreach ($pages as $page)
                  <a href="{{ route('page.show', $page->slug) }}"
                      class="{{ request()->routeIs('page.show', $page->slug) ? 'nav-item nav-link active' : 'nav-item nav-link' }}">{{ $page->title }}</a>
              @endforeach --}}
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">عن الشركة</a>
                  <div class="dropdown-menu bg-light border-0 m-0" style="width: 300px">
                      @php $count = 0; @endphp
                      @foreach ($pages as $page)
                          @if ($count % 2 == 0)
                              <div class="row">
                          @endif
                          <div class="col-md-6">
                              <a href="{{ route('page.show', $page->slug) }}" class="dropdown-item p-2"
                                  style="text-align:right" {{-- class="{{ request()->routeIs('page.show', $page->slug) ? 'dropdown-item active' : 'dropdown-item' }}" --}}>
                                  {{ $page->title }}
                              </a>
                          </div>
                          @php $count++; @endphp
                          @if ($count % 2 == 0 || $loop->last)
                  </div>
                  @endif
                  @endforeach
              </div>
          </div>

          <a href="{{ route('contact') }}" class="nav-item nav-link px-2">تواصل معنا</a>
      </div>
      <div class="h-100 d-lg-inline-flex align-items-center d-none">
          <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                  class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                  class="fab fa-twitter"></i></a>
          <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                  class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                  class="fab fa-instagram"></i></a>
      </div>
      </div>
  </nav>
  <!-- Navbar End -->
