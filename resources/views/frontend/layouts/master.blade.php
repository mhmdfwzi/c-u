<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')


<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    {{-- @include('frontend.layouts.topbar') --}}


    {{-- @include('frontend.layouts.navbar') --}}

    @include('frontend.layouts.nav')


    @yield('content')



    <div class="float-buttons">
        <div class="d-flex justify-content-center"> 
            <a href="https://international-elevators.com/storage/portfolio/profile.pdf" target="_blank" alt="WhatsApp">
                <img src="{{ asset('frontend/img/downloads.png') }}" height="55" width="55" alt="WhatsApp">
            </a>
        </div>
		        <div class="d-flex justify-content-center">
            <a href="tel:+0534225050" target="_blank">
                <img src="{{ asset('frontend/img/phone_icon.png') }}" height="55" width="55" alt="WhatsApp">
            </a>
        </div>

        <a href="https://api.whatsapp.com/send?phone=966534225050" target="_blank">
            <img src="{{ asset('frontend/img/whatsapp_logo.webp') }}" alt="WhatsApp" class="whatsapp-icon">
        </a>

    </div>
    <!-- ======= Whatsapp button ======= -->

    {{-- <div data-number="" data-index="0" id="chaty-widget-0"
        class="chaty-widget chaty-widget-css desktop_active mobile_active vertical-cht-menu left-cht-position chaty-widget-is-right chaty-widget-show"
        style="display:block; right: auto; bottom: 25px; left: 25px;" dir="ltr">
        <div data-index="0" id="chaty-channel-box-0" class="chaty-widget-is chaty-channels"
            style="top: -300%; height: 186px; width: 62px;">
            <div id="cht-channel-0" data-popup="" data-rgb="3,231,139"
                class="chaty-widget-i chaty-main-widget is-in-desktop is-in-mobile  phone-action-btn  phone-0-channel  channel-phone"
                data-title="+966 596398895" data-nonce="fc7dd9ec8e" data-channel="phone" data-code=""
                style="height: 54px; width: 54px;">
                <style>
                    .phone-0-channel .color-element {
                        fill: #03E78B;
                        background: #03E78B
                    }
                </style><a class="set-url-target" rel="noopener" data-mobile-target="" data-desktop-target=""
                    target="" href="tel:+966 596398895"><span class="sr-only">Phone</span><svg aria-hidden="true"
                        class="ico_d " width="39" height="39" viewBox="0 0 39 39" fill="none"
                        xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);">
                        <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#03E78B"></circle>
                        <path
                            d="M19.3929 14.9176C17.752 14.7684 16.2602 14.3209 14.7684 13.7242C14.0226 13.4259 13.1275 13.7242 12.8292 14.4701L11.7849 16.2602C8.65222 14.6193 6.11623 11.9341 4.47529 8.95057L6.41458 7.90634C7.16046 7.60799 7.45881 6.71293 7.16046 5.96705C6.56375 4.47529 6.11623 2.83435 5.96705 1.34259C5.96705 0.596704 5.22117 0 4.47529 0H0.745882C0.298353 0 5.69062e-07 0.298352 5.69062e-07 0.745881C5.69062e-07 3.72941 0.596704 6.71293 1.93929 9.3981C3.87858 13.575 7.30964 16.8569 11.3374 18.7962C14.0226 20.1388 17.0061 20.7355 19.9896 20.7355C20.4371 20.7355 20.7355 20.4371 20.7355 19.9896V16.4094C20.7355 15.5143 20.1388 14.9176 19.3929 14.9176Z"
                            transform="translate(9.07179 9.07178)" fill="white"></path>
                    </svg></a>
                <div class="chaty-widget-i-title">
                    <p>Phone</p>
                </div>
            </div>
            <div id="cht-channel-1" data-popup="" data-rgb="73,230,112"
                class="chaty-widget-i chaty-main-widget is-in-desktop is-in-mobile  whatsapp-action-btn  whatsapp-0-channel  channel-whatsapp"
                data-title="966596398895" data-nonce="876d05bf9a" data-channel="whatsapp" data-code=""
                style="height: 54px; width: 54px;">
                <style>
                    .whatsapp-0-channel .color-element {
                        fill: #49E670;
                        background: #49E670
                    }
                </style><a class="set-url-target" rel="noopener" data-mobile-target="" data-desktop-target="_blank"
                    target="_blank" href="https://web.whatsapp.com/send?phone=966596398895"><span
                        class="sr-only">WhatsApp</span><svg aria-hidden="true" class="ico_d " width="39"
                        height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                        style="transform: rotate(0deg);">
                        <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#49E670"></circle>
                        <path
                            d="M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z"
                            transform="translate(12.9597 12.9597)" fill="#FAFAFA"></path>
                        <path
                            d="M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z"
                            transform="translate(7.7758 7.77582)" fill="white" stroke="white" stroke-width="0.2">
                        </path>
                    </svg></a>
                <div class="chaty-widget-i-title">
                    <p>WhatsApp</p>
                </div>
            </div>
            <div id="cht-channel-2"
                data-popup="<div class='chaty-contact-form'><form action='#' method='post' class='chaty-contact-form-data' autocomplete='off'><div class='chaty-contact-header'>أرسل لنا رسالة  <div role='button' class='close-chaty-popup'><div class='chaty-close-button'></div></div><div style='clear:both'></div></div><div class='chaty-contact-body'><div class='chaty-input-area'><input autocomplete='off' class='chaty-input-field chaty-field-name is-required' name='name' type='text' id='chaty-name' placeholder='الاسم ' /></div><div class='chaty-input-area'><input autocomplete='off' class='chaty-input-field chaty-field-email is-required' name='email' type='email' id='chaty-name' placeholder='الايميل ' /></div><div class='chaty-input-area'><input autocomplete='off' class='chaty-input-field chaty-field-phone is-required' name='name' type='text' id='chaty-phone' placeholder='رقم الجوال' /></div><div class='chaty-input-area'><textarea autocomplete='off' class='chaty-input-field chaty-field-message is-required' name='name' id='chaty-name' placeholder='الرسالة' ></textarea></div><input type='hidden' class='chaty-field-widget' name='widget_id' value='' /><input type='hidden' class='chaty-field-channel' name='channel' value='Contact_Us' /><input type='hidden' class='chaty-field-nonce' name='nonce' value='529406d730' /></div><div class='chaty-contact-footer'><button style='color: #ffffff; background: rgb(133, 196, 65)' type='submit' class='chaty-contact-submit-btn' data-text='إرسال'>إرسال</div></div></form></div>"
                data-rgb="133,196,65"
                class="chaty-widget-i chaty-main-widget is-in-desktop is-in-mobile  contact_us-action-btn  contact_us-0-channel  has-custom-chaty-popup whatsapp-button channel-contact_us"
                data-title="" data-nonce="27501a746d" data-channel="contact_us" data-code=""
                style="height: 54px; width: 54px;">
                <style>
                    .contact_us-0-channel .color-element {
                        fill: #85c441;
                        background: #85c441
                    }
                </style><a class="set-url-target" rel="noopener" data-mobile-target="" data-desktop-target=""
                    target="" href="javascript:;"><span class="sr-only">أرسل لنا رسالة </span><svg
                        aria-hidden="true" class="ico_d color-element" width="39" height="39"
                        viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"
                        style="transform: rotate(0deg);">
                        <path class="color-element"
                            d="M36.992 19.87c0 9.8-7.947 17.746-17.746 17.746S1.5 29.67 1.5 19.87 9.447 2.125 19.246 2.125s17.746 7.947 17.746 17.746zm0 0"
                            fill="#253974"></path>
                        <g fill="rgb(100%,100%,100%)">
                            <path
                                d="M20.316 19.89l-.915 3.817-.9-3.817c-3.817.47-6.69 3.7-6.7 7.556h15.224c-.01-3.846-2.88-7.085-6.7-7.556zm0 0">
                            </path>
                            <path
                                d="M24.133 14.742c.005-2.518-1.95-4.61-4.464-4.77a4.77 4.77 0 0 0-5.033 4.165c-.315 2.502 1.373 4.815 3.85 5.278h1.8a4.77 4.77 0 0 0 3.853-4.672h-.005zm0 0">
                            </path>
                        </g>
                    </svg></a>
                <div class="chaty-widget-i-title">
                    <p>أرسل لنا رسالة </p>
                </div>
            </div>
        </div>
        <div data-index="0" id="chaty-trigger-0" class="i-trigger">
            <div data-index="0" id="chaty-trigger-button-0"
                class="chaty-widget-i chaty-close-settings i-trigger-open true no-tooltip"
                style="height: 54px; width: 54px;">
                <div id="chaty-animation-0" class="animation-svg" style="height: 54px; width: 54px;"><svg
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="-496 507.1 54 54" style="enable-background:new -496 507.1 54 54;"
                        xml:space="preserve">
                        <style type="text/css">
                            .sts1 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <circle cx="-469" cy="534.1" r="27" fill="rgb(30, 115, 190)"></circle>
                        </g>
                        <path class="sts1"
                            d="M-464.6,527.7h-15.6c-1.9,0-3.5,1.6-3.5,3.5v10.4c0,1.9,1.6,3.5,3.5,3.5h12.6l5,5c0.2,0.2,0.3,0.2,0.7,0.2c0.2,0,0.2,0,0.3,0c0.3-0.2,0.5-0.5,0.5-0.9v-18.2C-461.1,529.3-462.7,527.7-464.6,527.7z">
                        </path>
                        <path class="sts1"
                            d="M-459.4,522.5H-475c-1.9,0-3.5,1.6-3.5,3.5h13.9c2.9,0,5.2,2.3,5.2,5.2v11.6l1.9,1.9c0.2,0.2,0.3,0.2,0.7,0.2c0.2,0,0.2,0,0.3,0c0.3-0.2,0.5-0.5,0.5-0.9v-18C-455.9,524.1-457.5,522.5-459.4,522.5z">
                        </path>
                    </svg></div>
                <div class="chaty-widget-i-title true"> Contact us</div>
            </div>
            <div class="chaty-widget-i chaty-close-settings i-trigger-close" data-title="Hide"
                style="background-color: rgb(30, 115, 190); height: 54px; width: 54px;">
                <div id="chaty-animation-0" class="animation-svg" style="height: 54px; width: 54px;"><svg
                        viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="26" cy="26" rx="26" ry="26"
                            fill="rgb(30, 115, 190)"></ellipse>
                        <rect width="27.1433" height="3.89857" rx="1.94928"
                            transform="translate(18.35 15.6599) scale(0.998038 1.00196) rotate(45)" fill="white">
                        </rect>
                        <rect width="27.1433" height="3.89857" rx="1.94928"
                            transform="translate(37.5056 18.422) scale(0.998038 1.00196) rotate(135)" fill="white">
                        </rect>
                    </svg></div>
                <div class="chaty-widget-i-title">Hide</div>
            </div>
        </div>
    </div> --}}

    @include('frontend.layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    @include('frontend.layouts.footer-scripts')
</body>

</html>
