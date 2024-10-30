@if ($clients->count() > 0)
    <div class="container-fluid py-5" style="direction:ltr">


        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">شركئنا</h1>
            </div>
            <section class="customer-logos slider">

                @foreach ($clients as $client)
                    <div class="slide" style="max-height: 100px; max-width:100px"> <img src="{{ $client->image_url }}"
                            alt="logo">
                    </div>
                @endforeach
            </section>
        </div>
    </div>
@endif

{{-- @if ($clients->count() > 0)
    <div class="container-fluid py-5" style="direction:ltr; background: #f6f6f6;">

        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 style="font-size: 28px" class="mb-5"> شركاء نجاح المصاعد الدولية</h1>

        </div>
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px; direction:rtl">
            <p>
                في رحلتنا المشتركة، نتعاون مع شركات عالمية رائدة في الصناعة ، ونتشارك الرؤى والأهداف لتقديم أفضل
                الحلول والمنتجات لعملائنا. موردونا يتميزون بالجودة العالية والابتكار والدقة في التفاصيل، وهم
                يقدمون
                لنا دعمًا كبيرًا في تحقيق رؤيتنا ومهمتنا.
            </p>
        </div>

        <div class="row" style="margin: auto; item-align:center; direction:rtl">
            @foreach ($clients as $client)
                <div style="width: 12.5%; " class="py-5">
                    <img src="{{ $client->image_url }}" style="max-width:150px; max-height:100px ;" alt="">
                </div>
            @endforeach

        </div>

    </div>
@endif --}}
