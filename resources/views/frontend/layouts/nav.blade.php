<nav class="navbar bg-white navbar-light sticky-top px-3 px-lg-5 my-2">
    <section class="navbar-left">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img class="img-fluid" height="50" width="150" src="{{ asset('frontend/img/logo_1.png') }}" alt="">
            {{-- الدولية للمصاعد --}}
        </a>
    </section>

    <section class="navbar-center mt-3">
        <span class="overlay"></span>
        <div class="menu" id="menu">
            <div class="menu-header">
                <span class="menu-arrow"><i class="ion ion-ios-arrow-down"></i></span>
                <span class="menu-title"></span>
            </div>
            <ul class="menu-inner p-0 ">
                <li class="menu-item">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'menu-link-active' : 'menu-link' }}">الرئيسية</a>
                </li>

                <li class="menu-item menu-dropdown">
                    <span class="menu-link">عن الشركة<i class="ion ion-ios-arrow-down m-1"></i></span>
                    <div class="submenu megamenu megamenu-column-1">
                        <div class="submenu-inner">
                            <ul class="submenu-list">
                                @foreach ($pages as $page)
                                    <li class="submenu-item">
                                        <a href="{{ route('page.show', $page->slug) }}" {{-- class="submenu-link {{ request()->routeIs('page.show', $page->slug) ? 'active' : '' }}"> --}}
                                            class="submenu-link {{ Route::currentRouteName() === 'page.show' && request('slug') === $page->slug ? 'active' : '' }}">
                                            {{ $page->title }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    </div>
                </li>

                <li class="menu-item menu-dropdown">
                    <span class="menu-link">خدماتنا<i class="ion ion-ios-arrow-down m-1"></i></span>
                    <div class="submenu megamenu megamenu-column-4">

                        @foreach ($services->take(4) as $service)
                            <div class="submenu-inner">
                                <a href="{{ route('serviceProductDetails', $service->id) }}"
                                    class="submenu-link-1 mb-2">
                                    <img src="{{ $service->image_url }}" style="min-height: 200px; max-height:200px"
                                        class="submenu-image" alt="Product">
                                    <span class="submenu-title">{{ $service->title }}</span>
                                </a>
                            </div>
                        @endforeach
                        <div class="m-auto">
                            <a href="{{ route('servicesProducts', 'service') }}" style="color: #e52422">عرض الكل</a>
                        </div>
                    </div>
                </li>

                <li class="menu-item menu-dropdown">
                    <span class="menu-link">منتجاتنا<i class="ion ion-ios-arrow-down m-1"></i></span>
                    <div class="submenu megamenu megamenu-column-4">

                        @foreach ($products->take(4) as $product)
                            <div class="submenu-inner">
                                <a href="{{ route('serviceProductDetails', $product->id) }}"
                                    class="submenu-link-1 mb-2">
                                    <img src="{{ $product->image_url }}" style="min-height: 200px; max-height:200px"
                                        class="h-100 w-100  submenu-image" alt="Product">
                                    <span class="submenu-title">{{ $product->title }}</span>
                                </a>
                            </div>
                        @endforeach
                        <div class="m-auto">
                            <a href="{{ route('servicesProducts', 'product') }}" style="color: #e52422;">عرض الكل</a>
                        </div>
                    </div>
                </li>


                <li class="menu-item">
                    <a href="{{ route('blogsNews', 'blog') }}" class="menu-link" {{-- class="{{ request()->routeIs(['blogsNews', 'blog']) ? 'menu-link-active' : 'menu-link' }}" --}}>المدونة</a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('blogsNews', 'news') }}" class="menu-link" {{-- class="{{ request()->routeIs('blogsNews', 'news') ? 'menu-link-active' : 'menu-link' }}" --}}>الأخبار</a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'menu-link-active' : 'menu-link' }}">تواصل معنا</a>
                </li>

                {{-- <li class="menu-item menu-dropdown">
                    <span class="menu-link">Account<i class="ion ion-ios-arrow-down"></i></span>
                    <div class="submenu megamenu megamenu-column-1">
                        <ul class="submenu-list">
                            <li class="submenu-item"><a href="#" class="submenu-link">Login</a></li>
                            <li class="submenu-item"><a href="#" class="submenu-link">Register</a></li>
                            <li class="submenu-item"><a href="#" class="submenu-link">Track Order</a></li>
                            <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </section>

    <section class="navbar-right">
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
			
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        @if (!empty($website_info['instagram_link'])) href="https://linktr.ee/elevatorsinternational8" @endif>

                        <img src="https://international-elevators.com/frontend/img/linktree-logo-icon.webp" style="width:20px"></a>
							
			
			<a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                @if (!empty($website_info['facebook_link'])) href="{{ $website_info['facebook_link'] }}" @endif>
                <i class="fab fa-facebook-f"></i></a>
			
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                @if (!empty($website_info['twitter_link'])) href="{{ $website_info['twitter_link'] }}" @endif>
                <i class="fab fa-twitter"></i></a>

            <a class="btn btn-square rounded-circle bg-light text-primary me-0" target="_blank"
                @if (!empty($website_info['instagram_link'])) href="{{ $website_info['instagram_link'] }}" @endif>

                <i class="fab fa-instagram"></i></a>
        </div>
        {{-- <button class="switch" id="switch">
            <span class="switch-light"><i class="bx bx-sun"></i></span>
            <span class="switch-dark"><i class="bx bx-moon"></i></span>
        </button> --}}
    </section>
</nav>
