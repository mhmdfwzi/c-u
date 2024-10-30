<div class="container-fluid py-5">
    <div class="container-xxl">
        <div class="d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">المدونات</h1>
            <a href="{{ route('blogsNews', 'blog') }}" style="color: #e52422">عرض الكل</a>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach ($blogs as $key => $blog)
                @if ($key === 0)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div>
                                <img class="w-100 h-100" src="{{ $blog->image_url }}"
                                    style="min-height: 300px; max-height: 300px; margin-bottom:20px" alt="">
                            </div>
                            <div class="d-flex align-items-center bg-light blog-content"
                                style="
                                    display: flex;
                                    align-items: center;
                                    justify-content: start;
                                    padding:10px">
                                {{-- 
                                <div class="flex-shrink-0 p-1">
                                    <i {!! $service->icon ? $service->icon : '' !!} style="font-size:25px"></i>
                                </div> --}}
                                <div style="display: block">
                                    <a class="h5 mx-4 mb-0"
                                        href="{{ route('blogNewsDetails', $blog->id) }}">{{ $blog->title }}</a>
                                    <p class="mx-4 mb-0">

                                        {!! \Illuminate\Support\Str::words(strip_tags($blog->content), 20, '...') !!}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="col-lg-6 col-md-6 wow fadeInUp d-flex">
                <div class="row" style="align-content:flex-start; gap:35px">
                    @foreach ($blogs->skip(1)->take(3) as $key => $blog)
                        <div class="d-flex mt-2" style="justify-content: flex-start; align-items:center">

                            <img src="{{ $blog->image_url }}" style="height: 70px; width:100px; min-width:100px"
                                alt="">
                            <div style="display: block">
                            <div style="margin-right:25px">
                                <a href="{{ route('blogNewsDetails', $blog->id) }}" style="color: black">
                                    <span   style="font-weight: bold ; ">{{ $blog->title }}</span>
                                </a>
                                <p class=" mb-0">

                                    {!! \Illuminate\Support\Str::words(strip_tags($blog->content), 20, '...') !!}

                                </p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>
