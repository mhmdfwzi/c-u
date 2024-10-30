<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider-content">

            @foreach ($gallery as $index => $item)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img class="w-100 gallery-image" src="{{ $item->image_url }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-12" style="margin-top: 275px; background: rgb(46 54 55 / 50%)">
                                    <h5 class="display-4 text-white mb-4 animated slideInDown gallery-text">
                                        {{ $item->title }}</h5>
                                    {{-- <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">
                                              {{ $item->sub_title }}</p> --}}
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                          More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
