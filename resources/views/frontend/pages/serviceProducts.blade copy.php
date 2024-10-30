@extends('frontend.layouts.master')
@php
    $metaData = App\Models\MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property
@endphp
@section('keywords')
    <meta content="{{ $metaData['keywords'] }}" name="keywords">
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: 100px">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                @if ($type == 'product')
                    <p> فرصة سفر</p>
                @elseif ($type == 'service')
                    <p> فرصة سفر </p>
                @endif


            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container-fluid">

            {{-- <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">الكل</li>
                        <li data-filter=".filter-service">خدمة</li>
                        <li data-filter=".filter-product">منتج</li>
                    </ul>
                </div>
            </div> --}}

            <div class="row d-flex" data-aos="fade-up" data-aos-delay="100">
                @forelse ($servicesProducts as $serviceProduct)
                    @php
                        $serviceImages = App\Models\Image::where('service_product_id', $serviceProduct->id)->get();
                    @endphp
                    <div class="col-lg-3 col-md-6 portfolio-item">
                        <div class="portfolio-wrap d-flex justify-content-center text-center">
                            <div>
                                <h5>{{ $serviceProduct->title }}</h5>
                                <img src="{{ $serviceProduct->image_url }}" alt=""
                                    style="margin: auto;
                                    min-height: 200px;
                                    max-height: 200px;
                                    max-width: 220px;
                                    min-width: 220px"
                                    class="w-100">
                            </div>

                            <div class="portfolio-links">
                                {{-- <a style="font-size: 18px" href="{{ $serviceProduct->image_url }}"
                                    data-gall="portfolioGallery" class="venobox" title="{{ $serviceProduct->title }}">
                                    عرض الصور
                                </a> --}}
                                {{-- @foreach ($serviceImages as $serviceImage)
                                    <a style="font-size: 18px" href="{{ $serviceImage->image }}" data-gall="portfolioGallery"
                                        class="venobox" title="{{ $serviceProduct->title }}">
                                        عرض الصور
                                    </a>
                                @endforeach --}}
                                <a style="font-size: 18px" href="{{ route('serviceProductDetails', $serviceProduct->id) }}"
                                    title="عرض التفاصيل">
                                    عرض التفاصيل
                                </a>
                                <a style="font-size: 18px" href="{{ route('createOrder', $serviceProduct->id) }}"
                                    target="_blank" title="طلب">
                                    @if ($type == 'product')
                                        طلب المنتج
                                    @elseif ($type == 'service')
                                        طلب الخدمة
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            @foreach ($serviceImages as $serviceImage)
                                <a href="{{ $serviceImage->image_url }}" data-gall="portfolioGallery" class="venobox"
                                    title="{{ $serviceProduct->title }}">
                                    <img src="{{ $serviceImage->image_url }}" alt="" height="70" width="70"
                                        class="heartbeat" style="border-radius: 35px; border:1px dashed black; padding:2px">
                                </a>
                            @endforeach
                        </div>
                    </div>
                @empty
                    @if ($type == 'product')
                        <p>لا توجد منتجات</p>
                    @elseif ($type == 'service')
                        <p>لا توجد خدمات</p>
                    @endif
                @endforelse
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
