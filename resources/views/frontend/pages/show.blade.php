@extends('frontend.layouts.master')
@section('seo_data')
    @php
        $seoData = App\Models\SeoData::where('entity_id', $page->id)
            ->where('entity_type', 'page')
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
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{ $page->title }}</h1>
        {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav> --}}
    </div>
</div>
<!-- Page Header End -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <img src="{{ $page->image_urll }}" class="w-100" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
                {{-- <ul>
                        <li>

                            أسست مؤسسة المصاعد الدولية نشاطها بالمملكة العربية السعودية منذ عام
                            1427هـ / 2007م؛ وطوال هذه المدة أصبح اسم ”المصاعد الدولية“ عالمة فارقه
                            لدى السوق السعودي الذي يهتم بالجودة العالية مقابل السعر المنافس والتنفيذ
                            السريع، واستطاعت أن ت لبي رغبة عمالئها عن طريق اختيار أجود الخامات في
                            العمل واستخدام أحدث وسائل التكنولوجيا لجميع أنواع المباني، والتنفيذ عن طريق
                            فنيين متخصصين على أعلى درجة من المهارة والسرعة وتحت إشراف مهندسين
                            على درجة عالية من التخصص والكفاءة في أعمال التركيب و الصيانة، في عالم
                            المصاعد الكهربائية وملحقاتها من محركات وأبواب وكبائن ووحدات التحكم
                            المتطورة ونظم األمان عالية الجودة.
                        </li>
                        <li>
                            نسعى دائما نحو التفوق والتميز بين جميع شركات المصاعد وذلك اعتمادا على
                            الجودة – التكلفة والزمن ، لذلك نحن متحمسون لما نقوم به وهو ارضاء عمالئنا
                            وهذا هو هدفنا األول وليس الربح فقط، إضافة إلى تعظيم صناعة المصاعد
                            وخدمات ما بعد البيع كالضمان المقدم بعد تشغيل المصعد.
                        </li>
                        <li>
                            مؤسسة المصاعد الدولية لديها العديد من أنظمة المصاعد التي قادتها الى التميز
                            والموثوقية وتلبية رغبات جميع العمالء بدءاً من مصاعد األفراد ومصاعد
                            الهيدروليك ومصاعد البضائع ومصاعد الطعام ومصاعد المستشفيات ومصاعد
                            البانوراما إضافة الى المصاعد الداخلية التي ال تحتاج إلى حفر بئر وكراسي الدرج
                            الكهربائية.
                        </li>
                    </ul> --}}
                {!! $page->content !!}
            </div>
        </div>
    </div>
</div>
@endsection
