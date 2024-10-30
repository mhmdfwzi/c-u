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
                @if ($type == 'blog')
                    <p> المدونة </p>
                @elseif ($type == 'news')
                    <p> الأخبار </p>
                @endif


            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container-fluid">

            <div class="row d-flex" data-aos="fade-up" data-aos-delay="100">
                @forelse ($blogsNews as $blogNews)
                    <div class="col-lg-3 col-md-6 portfolio-item">
                        <div class="portfolio-wrap d-flex justify-content-center text-center">
                            <div>
                                <h5>{{ $blogNews->title }}</h5>
                                <img src="{{ $blogNews->image_url }}" alt=""
                                    style="min-height: 200px; max-height:200px" class="w-100">
                            </div>
                            <div class="portfolio-links">
                                <a style="font-size: 18px" href="{{ $blogNews->image_url }}" data-gall="portfolioGallery"
                                    class="venobox" title="{{ $blogNews->title }}">
                                    عرض الصور
                                </a>
                                <a style="font-size: 18px" href="{{ route('blogNewsDetails', $blogNews->id) }}"
                                    title="عرض التفاصيل">
                                    عرض التفاصيل
                                </a>

                            </div>
                        </div>
                    </div>
                @empty
                    @if ($type == 'blog')
                        <p>لا توجد مدونات</p>
                    @elseif ($type == 'news')
                        <p>لا توجد أخبار</p>
                    @endif
                @endforelse
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
