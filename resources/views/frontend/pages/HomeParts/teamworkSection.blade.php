@if ($teamwork->count() > 0)
    <!-- Team Start -->
    <div class="container-fluid py-5">
        {{-- <div class="container"> --}}
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">فريق العمل </h1>
        </div>
        <div class="row g-4">
            @foreach ($teamwork as $member)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ $member->image_url }}" alt="">
                            {{-- <div class="team-social">
                                        <a class="btn btn-square btn-primary rounded-circle m-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary rounded-circle m-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary rounded-circle m-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                    </div> --}}
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5>{{ $member->name }}</h5>
                            <span class="text-primary">{{ $member->position }}</span>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    {{-- </div> --}}
    <!-- Team End -->
@endisset
