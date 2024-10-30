{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
{{-- <script src="{{ asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

<script>
    const menu = document.querySelector(".menu");
    const menuInner = menu.querySelector(".menu-inner");
    const menuArrow = menu.querySelector(".menu-arrow");
    const burger = document.querySelector(".burger");
    const overlay = document.querySelector(".overlay");

    // Navbar Menu Toggle Function
    function toggleMenu() {
        menu.classList.toggle("is-active");
        overlay.classList.toggle("is-active");
    }

    // Show Mobile Submenu Function
    function showSubMenu(children) {
        subMenu = children.querySelector(".submenu");
        subMenu.classList.add("is-active");
        subMenu.style.animation = "slideLeft 0.35s ease forwards";
        const menuTitle = children.querySelector("i").parentNode.childNodes[0]
            .textContent;
        menu.querySelector(".menu-title").textContent = menuTitle;
        menu.querySelector(".menu-header").classList.add("is-active");
    }

    // Hide Mobile Submenu Function
    function hideSubMenu() {
        subMenu.style.animation = "slideRight 0.35s ease forwards";
        setTimeout(() => {
            subMenu.classList.remove("is-active");
        }, 300);

        menu.querySelector(".menu-title").textContent = "";
        menu.querySelector(".menu-header").classList.remove("is-active");
    }

    // Toggle Mobile Submenu Function
    function toggleSubMenu(e) {
        if (!menu.classList.contains("is-active")) {
            return;
        }
        if (e.target.closest(".menu-dropdown")) {
            const children = e.target.closest(".menu-dropdown");
            showSubMenu(children);
        }
    }

    // Fixed Navbar Menu on Window Resize
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 992) {
            if (menu.classList.contains("is-active")) {
                toggleMenu();
            }
        }
    });

    // Dark and Light Mode with localStorage
    // (function() {
    //     let darkMode = localStorage.getItem("darkMode");
    //     const darkSwitch = document.getElementById("switch");

    //     // Enable and Disable Darkmode
    //     // const enableDarkMode = () => {
    //     //     document.body.classList.add("darkmode");
    //     //     localStorage.setItem("darkMode", "enabled");
    //     // };

    //     // const disableDarkMode = () => {
    //     //     document.body.classList.remove("darkmode");
    //     //     localStorage.setItem("darkMode", null);
    //     // };

    //     // User Already Enable Darkmode
    //     if (darkMode === "enabled") {
    //         enableDarkMode();
    //     }

    //     // User Clicks the Darkmode Toggle
    //     darkSwitch.addEventListener("click", () => {
    //         darkMode = localStorage.getItem("darkMode");
    //         if (darkMode !== "enabled") {
    //             enableDarkMode();
    //         } else {
    //             disableDarkMode();
    //         }
    //     });
    // })();

    // Initialize All Event Listeners
    burger.addEventListener("click", toggleMenu);
    overlay.addEventListener("click", toggleMenu);
    menuArrow.addEventListener("click", hideSubMenu);
    menuInner.addEventListener("click", toggleSubMenu);
</script>

<script src="{{ asset('backend/assets/js/plugins-jquery.js') }}"></script>

<script src="{{ asset('backend/assets/js/toastr.js') }}"></script>
<script>
    @if (session('toast_success'))
        toastr.success("{{ session('toast_success') }}", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    @endif
    @if (session('toast_error'))
        toastr.error("{{ session('toast_error') }}", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    @endif
</script>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script> --}}
<script src="{{ asset('frontend/lib/parallax/parallax.min.js') }}"></script>

{{-- <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script> --}}
{{-- <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
{{-- <script src="{{ asset('frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script> --}}
{{-- <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script> --}}
{{-- <script src="{{ asset('frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script> --}}
<script src="{{ asset('frontend/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/vendor/typed.js/typed.min.js') }}"></script> --}}
<script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>


<!-- Template Javascript -->
<script src="{{ asset('frontend/js/main.js') }}"></script>


@stack('scripts')
