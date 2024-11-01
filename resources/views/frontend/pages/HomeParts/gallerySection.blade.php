<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider-content">

            @foreach ($gallery as $index => $item)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img class="w-100 gallery-image" src="{{ $item->image_url }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                
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
