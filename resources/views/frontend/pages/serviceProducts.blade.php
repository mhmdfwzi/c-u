@extends('frontend.layouts.master')
@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection
@push('style')
    <style>
        @media (min-width: 992px) {
            .col-lg-custom {
                flex: 0 0 auto;
                width: 30%;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: 100px">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                @if ($type == 'product')
                    <p> معرض المنتجات </p>
                @elseif ($type == 'service')
                    <p> معرض الخدمات</p>
                @endif


            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container-fluid">


            <div class="row d-flex justify-content-center " data-aos="fade-up" data-aos-delay="100">
                @forelse ($servicesProducts as $serviceProduct)
                    @php
                        $serviceImages = App\Models\Image::where('service_product_id', $serviceProduct->id)->get();
                    @endphp
                    <div class="col-lg-custom col-md-6 portfolio-item m-2 p-0">
                        <div class="portfolio-wrap d-flex justify-content-center text-center ">
                            <div style="width: 100%">

                                {{-- <img src="{{ $serviceProduct->image_url }}" alt=""
                                    style="margin: auto;
                                    min-height: 250px;
                                    max-height: 200px;
                                    max-width: 100%;
                                    min-width: 220px"
                                    class="w-100"> --}}

                                <img src="{{ $serviceProduct->image_url }}" alt=""
                                    style="margin: auto;
                                    max-height: 440px;
                                    max-width: 750px;"
                                    class="w-100">
                            </div>

                            <div class="portfolio-links">

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
                        <div class="m-4">

                            @if ($type == 'product')
                                <span class="bg-success text-white p-2"> منتج </span>
                            @elseif ($type == 'service')
                                <span class="bg-danger text-white p-2"> خدمة</span>
                            @endif

                            <h5 class="mt-3">
                                <a href="{{ route('serviceProductDetails', $serviceProduct->id) }}">
                                    {{ $serviceProduct->title }}</a>
                            </h5>

                            <p style="line-height: 2rem">
                                {!! \Illuminate\Support\Str::words(strip_tags($serviceProduct->content), 20, '...') !!}
                            </p>
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
