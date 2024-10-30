<div class="container-fluid py-5">
    <div class="container-xxl">
        <div class="d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">فرصة سفر</h1>
            <a href="{{ route('servicesProducts', 'service') }}" style="color: #e52422">عرض الكل</a>
        </div>
 
        <div class="row g-4 justify-content-center">
            @foreach ($services as $key => $service)
                @if ($key === 0)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div>
                                <img class="w-100 h-100" src="{{ $service->image_url }}"
                                    style="min-height: 300px; max-height: 300px" alt="">
                            </div>
                            <div class="d-flex align-items-center bg-light"
                                style=" height: 120px;
                              display: flex;
                              align-items: center;
                              justify-content: start;
                              padding:10px">

                                <div class="flex-shrink-0 p-1">
                                    <i {!! $service->icon ? $service->icon : '' !!} style="font-size:25px"></i>
                                </div>
                                <div style="display: block">
                                    <a class="h5 mx-4 mb-0"
                                        href="{{ route('serviceProductDetails', $service->id) }}">{{ $service->title }}</a>
                                    <p class="mx-4 mb-0">

                                        {!! \Illuminate\Support\Str::words(strip_tags($service->content), 20, '...') !!}

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="col-lg-6 col-md-6 wow fadeInUp d-flex">
                <div class="row" style="align-content:flex-start; gap:35px">
                    @foreach ($services->skip(1)->take(3) as $key => $service)
                        <div class="d-flex mt-2" style="justify-content: flex-start; align-items:center">

                            <img src="{{ $service->image_url }}" style="height: 70px; width:100px; min-width:100px"
                                alt="">
                            <div style="display: block">
                                <a href="{{ route('serviceProductDetails', $service->id) }}" style="color: black">
                                    <span class="mx-4" style="font-weight: bold">{{ $service->title }}</span>
                                </a>
                                <p class="mx-4 mb-0">

                                    {!! \Illuminate\Support\Str::words(strip_tags($service->content), 20, '...') !!}

                                </p>
                            </div>

                        </div>
                        {{-- <div class="col-lg-4 col-md-6 wow fadeInUp p-2" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div>
                                    <img class="w-100" src="{{ $service->image_url }}"
                                        style="min-height: 150px; max-height: 150px" alt="">
                                </div>
                                <div class="d-flex align-items-center bg-light"
                                    style="
                                  height: 50px;
                                  display: flex;
                                  align-items: center;
                                  justify-content: center">
                                  
                                    <a class="h5 mx-4 mb-0"
                                        href="{{ route('serviceProductDetails', $service->id) }}">{{ $service->title }}</a>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>
