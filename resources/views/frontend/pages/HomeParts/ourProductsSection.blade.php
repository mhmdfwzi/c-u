<div class="container-fluid py-5" style="background: #f6f6f6">
    <div class="container-xxl">
        <div class="d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">منتجاتنا</h1>
            <a href="{{ route('servicesProducts', 'product') }}" style="color:#e52422">عرض الكل</a>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="w-100" style="min-height: 200px; max-height:200px" src="{{ $product->image_url }}"
                            alt="">
                        <div class="d-flex align-items-center bg-light"
                            style=" height: 90px;
                              display: flex;
                              align-items: center;
                              justify-content: start;
                              padding:10px">
                            <div class="flex-shrink-0 p-1">

                                <i {!! $product->icon ? $product->icon : '' !!} style="font-size:25px"></i>

                            </div>
                            <a class="h5 mx-4 mb-0"
                                href="{{ route('serviceProductDetails', $product->id) }}">{{ $product->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
