<!-- Footer Start -->
<div class="container-fluid footer mt-5 p-5 wow fadeIn page-header" style="background-color:rgb(20, 20, 21)"
    data-wow-delay="0.1s">
    {{-- <div class="container py-5"> --}}
    <div class="row p-lg-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <h1 class="text-white mb-4" style="font-size: 25px; color:#8f93a5 !important">
                    <div style>
                        <img class="img-fluid" style="height: 220px; width:330px; object-fit:fill"
                            src="{{ asset('frontend/img/logo.png') }}" alt="">
                    </div>
                    {{-- الدولية للمصاعد --}}
                </h1>
                <span style="color:#8f93a5 !important">
                    إننا نحقق فى هذا المجال تطور كبير ومازلنا فى تميز مستمر وذلك لاننا نستخدم كافة الوسائل الإعلانية اللازمة لتوفير اسرع الكفاءات لفرص الوظائف الشاغره وإنهاء كافة الأجراءات اللازمة لسفر المتعاقد معهم. إن شركتنا تتمتع بسمعة عظيمة فى هذا المجال حيث نقوم بتخليص أجراءات الكشف الطبى وتخليص الجوازات من القنصليات وتصديق العقود من القنصليات المختلفه ووزاره القوى العامله وتذاكر السفر وتوصيل العمالة الى مقر العمل.

                </span>
            </div>




            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <h5 class="text-light mb-4">تواصل معنا</h5>
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-map-marker-alt mx-2"></i>
                    <span>عمارات التطبيقين - شارع كلية التجارة - بنها </span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-map-marker-alt mx-2"></i>
                    <span>فرع البحيره المحموديه برج دبى الدور الثانى علوى</span>
                </div>

				<p><i class="fa fa-phone-alt mx-2"></i>رقم التليفون       : <span style="color:red">01070001975</span></p>
				 <p><i class="fa fa-envelope mx-2"></i>info@seeyoutravel.com</p>
				 <p><i class="fa fa-timer mx-2"></i>ساعات العمل :   من 10 صباحا حتى 6 مساء 
                   
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
                        @if (!empty($website_info['instagram_link'])) href="https://linktr.ee/" @endif>

                        <img src="https://international-elevators.com/frontend/img/linktree-logo-icon.webp" style="width:20px"></a>
							   
							   
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-3 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1719.3911922836442!2d31.18673150599936!3d30.470601330858575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df5b6889e625%3A0xc9a6da9a2bd40a6a!2sF5CQ%2B522%2C%20Koleyet%20Al%20Tegara%2C%20Qism%20Banha%2C%20Banha%2C%20Al-Qalyubia%20Governorate%206470174!5e0!3m2!1sen!2seg!4v1730285862755!5m2!1sen!2seg"
                 width="330" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    All Right Reserved  &copy; <a href="#">See You</a></div>  
                <div class="col-md-12 text-center ">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
