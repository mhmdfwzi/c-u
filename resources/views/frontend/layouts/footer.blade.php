<!-- Footer Start -->
<div class="container-fluid footer mt-5 p-5 wow fadeIn page-header" style="background-color:rgb(20, 20, 21)"
    data-wow-delay="0.1s">
    {{-- <div class="container py-5"> --}}
    <div class="row p-lg-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <h1 class="text-white mb-4" style="font-size: 25px; color:#8f93a5 !important">
                    <div style>
                        <img class="img-fluid" style="height: 220px; width:280px; object-fit:fill"
                            src="{{ asset('frontend/img/logo.png') }}" alt="">
                    </div>
                    {{-- الدولية للمصاعد --}}
                </h1>
                <span style="color:#8f93a5 !important">

                    المصاعد الدولية هي مؤسسة مصاعد رائدة في المملكة ومقرها مدينة أبها
                    - نقدم خدمات المصاعد المتكاملة فائقة الجودة وموثوقة لأكثر من 15 عام
                </span>
            </div>




            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <h5 class="text-light mb-4">تواصل معنا</h5>
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-map-marker-alt mx-2"></i>
                    <span>منطقة عسير - مدينة أبها - طريق الملك فهد، أمام صناعية أبها</span>
                </div>

				<p><i class="fa fa-phone-alt mx-2"></i>رقم جوال خدمة العملاء : <span style="color:red">0534225050</span></p>
				 <p><i class="fa fa-envelope mx-2"></i>int.elevator@hotmail.com</p>
				 <p><i class="fa fa-timer mx-2"></i>ساعات العمل :<br/> فترة صباحية من 8 صباحا حتى 12 ظهرا <br/> فترة مسائية من 4 عصرا حتى 8 مساء</p>
				           <div class="d-lg-inline-flex align-items-center d-none">
                    <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        @if (!empty($website_info['facebook_link'])) href="{{ $website_info['facebook_link'] }}" @endif>
                        <i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        @if (!empty($website_info['twitter_link'])) href="{{ $website_info['twitter_link'] }}" @endif>
                        <i class="fab fa-twitter"></i></a>

                    <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        @if (!empty($website_info['instagram_link'])) href="{{ $website_info['instagram_link'] }}" @endif>

                        <i class="fab fa-instagram"></i></a>
							   
					 <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        @if (!empty($website_info['instagram_link'])) href="https://linktr.ee/elevatorsinternational8" @endif>

                        <img src="https://international-elevators.com/frontend/img/linktree-logo-icon.webp" style="width:20px"></a>
							   
							   
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d42.5723393!3d18.2397411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15fcab01710caa0b%3A0x9826f4d3fa648fb!2s%D8%A7%D9%84%D9%85%D8%B5%D8%A7%D8%B9%D8%AF%20%D8%A7%D9%84%D8%AF%D9%88%D9%84%D9%8A%D9%87%20%D9%84%D9%84%D9%85%D8%B5%D8%A7%D8%B9%D8%AF%E2%80%AD!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                {{-- <h5 class="text-light mb-4">روابط سريعة</h5>
                    @foreach ($pages as $page)
                        <a href="{{ route('page.show', $page->slug) }}" class="btn btn-link">{{ $page->title }}</a>
                    @endforeach --}}
            </div>

        </div>

        {{-- <div class="col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Clita erat ipsum et lorem et sit, sed stet lorem sit clita.</p>
                <div class="position-relative">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> --}}

        {{-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">تواصل معنا</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa fa-map-marker-alt mx-2"></i>
                        <span>منطقة عسير - مدينة أبها - طريق الملك فهد، أمام صناعية أبها</span>
                    </div>

                    <p><i class="fa fa-phone-alt mx-2"></i>رقم جوال خدمة العملاء :0534225050</p>
                    <p><i class="fa fa-envelope mx-2"></i>int.elevator@hotmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">خدماتنا</h5>
                    @foreach ($services as $service)
                        <a href="{{ route('serviceProductDetails', $service->id) }}"
                            class="btn btn-link">{{ $service->title }}</a>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">منتجاتنا</h5>
                    @foreach ($products as $product)
                        <a href="{{ route('serviceProductDetails', $product->id) }}"
                            class="btn btn-link">{{ $product->title }}</a>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">روابط سريعة</h5>
                    @foreach ($pages as $page)
                        <a href="{{ route('page.show', $page->slug) }}" class="btn btn-link">{{ $page->title }}</a>
                    @endforeach
                </div>
            </div> --}}

        {{-- <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Follow Us</h5>
                <div class="d-flex">
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> --}}
    </div>
    {{-- </div> --}}
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row" >
                  <div class="col-md-12 text-center " style="font-size:13px">
                    All Right Reserved  &copy; <a href="#">International Elevators</a>, Developed  By <a href="https://portfoliokareemsoft.online">Kareem Shaban</a> 
                </div>  
                <div class="col-md-12 text-center ">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
