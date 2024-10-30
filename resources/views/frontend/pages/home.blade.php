@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection

@push('style')
@endpush

@section('content')
    <!-- Gallery Start -->
    @include('frontend.pages.HomeParts.gallerySection')


    {{-- about us section --}}
    @include('frontend.pages.HomeParts.aboutSection')

    {{-- Our Services --}}
    @include('frontend.pages.HomeParts.ourServicesSection')

    <!-- Numbers section -->
    @include('frontend.pages.HomeParts.numbersSection')
<!-- our products section -->
    {{-- our products --}}
    @include('frontend.pages.HomeParts.ourProductsSection')

    {{-- blogs section --}}
<!-- blogs section -->
    @include('frontend.pages.HomeParts.blogSection')

<!-- why choose us section -->
    {{-- why choose us section --}}
    @include('frontend.pages.HomeParts.whyChooseUsSection')
<!-- our clients section -->

    {{-- our clients --}}
    @include('frontend.pages.HomeParts.ourClientsSection')
@endsection
<!-- end our clients section -->
@push('scripts')
    <script>
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });

        const leftDoor = document.getElementById('left-door');
        const rightDoor = document.getElementById('right-door');
        const floor1 = document.getElementById('floor-1');
        const floor2 = document.getElementById('floor-2');
        const floor3 = document.getElementById('floor-3');
        const floor4 = document.getElementById('floor-4');
        const floor5 = document.getElementById('floor-5');
        const controlUp = document.getElementById('control-up');
        const arrowUp = document.getElementById('arrow-up');
        const welcomeMessage = document.getElementById('welcome-message');


        // Elevator animation function
        function elevator() {
            leftDoor.classList.add('left-door');
            rightDoor.classList.add('right-door');
            floor1.classList.add('floor-1');
            floor2.classList.add('floor-2');
            floor3.classList.add('floor-3');
            floor4.classList.add('floor-4');
            floor5.classList.add('floor-5');
            arrowUp.classList.add('arrow-up');

            setTimeout(() => {
                welcomeMessage.classList.add('show');
            }, 6000); // Adjust the delay based on your animation duration
        }


        // Click to start the animation
        controlUp.addEventListener('click', elevator);
    </script>
@endpush
