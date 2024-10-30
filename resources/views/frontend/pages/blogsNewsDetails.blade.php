@extends('frontend.layouts.master')
@section('seo_data')
    @php
        $seoData = App\Models\SeoData::where('entity_id', $blogNews->id)
            ->where('entity_type', 'blogNews')
            ->first();
    @endphp
    @if ($seoData)
        <meta content="{{ $seoData->keywords }}" name="keywords">
        @section('title', $seoData->title)
        <meta content="{{ $seoData->meta_description }}" name="description">

        {{-- og tags --}}
        <meta property="og:title" content="{{ $seoData->structured_data['og']['og_title'] }}">
        <meta property="og:description" content="{{ $seoData->structured_data['og']['og_description'] }}">
        <meta property="og:image" content="{{ $seoData->structured_data['og']['og_url'] }}">
        <meta property="og:url" content="{{ $seoData->structured_data['og']['og_type'] }}">
        <meta property="og:type" content="{{ $seoData->structured_data['og']['og_image'] }}">
        <meta property="og:site_name" content="{{ $seoData->structured_data['og']['og_site_name'] }}">
        <meta property="og:updated_time" content="{{ $seoData->structured_data['og']['og_updated_time'] }}">
        <meta property="og:image:secure_url" content="{{ $seoData->structured_data['og']['og_image_secure_url'] }}">
        <meta property="og:image:width" content="{{ $seoData->structured_data['og']['og_image_width'] }}">
        <meta property="og:image:height" content="{{ $seoData->structured_data['og']['og_image_height'] }}">
        <meta property="og:image:alt" content="{{ $seoData->structured_data['og']['og_image_alt'] }}">
        <meta property="og:image:type" content="{{ $seoData->structured_data['og']['og_image_type'] }}">

        {{-- article tags --}}
        <meta name="article:publisher" content="{{ $seoData->structured_data['article']['article_publisher'] }}">
        <meta name="article:published_time" content="{{ $seoData->structured_data['article']['article_published_time'] }}">
        <meta name="article:modified_time" content="{{ $seoData->structured_data['article']['article_modified_time'] }}">

        {{-- twitter tags --}}
        <meta name="twitter:title" content="{{ $seoData->structured_data['twitter']['twitter_title'] }}">
        <meta name="twitter:description" content="{{ $seoData->structured_data['twitter']['twitter_description'] }}">
        <meta name="twitter:image" content="{{ $seoData->structured_data['twitter']['twitter_image'] }}">
        <meta name="twitter:card" content="{{ $seoData->structured_data['twitter']['twitter_card'] }}">
    @else
        <meta content="" name="keywords">
        <meta content="" name="description">
        @section('title', 'المصاعد الدولية')

        {{-- og tags --}}
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:type" content="">
        <meta property="og:site_name" content="">
        <meta property="og:updated_time" content="">
        <meta property="og:image:secure_url" content="">
        <meta property="og:image:width" content="">
        <meta property="og:image:height" content="">
        <meta property="og:image:alt" content="">
        <meta property="og:image:type" content="">

        {{-- article tags --}}
        <meta name="article:publisher" content="">
        <meta name="article:published_time" content="">
        <meta name="article:modified_time" content="">

        {{-- twitter tags --}}
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:card" content="">
    @endif
@endsection
@section('content')
<!-- Page Header Start -->
{{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{ $blogNews->title }}</h1>

        </div>
    </div> --}}
<!-- Page Header End -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div style=" padding:15px 0px">
                    <p style="font-size: 20px; font-weight:bold; color:var(--primary); text-align: center;">
                        {{ $blogNews->title }}</p>
                </div>
                <div class="image" style="margin: auto; display: table; margin-bottom:15px;">
                    <img class="blog-image" src="{{ $blogNews->image_url }}" style="max-height:400px; max-width:700px"
                        alt="">
                </div>


                {!! $blogNews->content !!}
                <div class="sharethis-inline-share-buttons"></div>
            </div>
            <div class="col-lg-1 col-md-1">
            </div>

            <div class="col-lg-4 col-md-4 mt-4">


                <h4>اخبار ومدونات أخرى</h4>
                @foreach ($popularBlogNews as $popular)
                    <div class="d-flex mt-5" style="justify-content: flex-start; align-items:center">

                        <img src="{{ $popular->image_url }}" style="height: 50px; width:100px" alt="">
                        <a href="{{ route('blogNewsDetails', $popular->id) }}" style="color: black">
                            <span class="mx-4">{{ $popular->title }}</span>
                        </a>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6566f0433bcaed00121fca65&product=inline-share-buttons&source=platform"
    async="async"></script>
@endpush
