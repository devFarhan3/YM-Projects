<!--footer start-->
<footer class="footers pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-desc">
                        <img src="img/ym/ft-logo.png" alt>

                    </div><!--/.footer-widget-desc-->
                </div>

                <div class="col-md-6 col-lg-5 text-center">
                    <div class="footer-widget-si mb-3 ">
                        <div class="text-start mb-5">
                            <p><a href="tel:+971 501998812">+971 501998812</a> </p>
                            <p><a href="mailto:info@yourmoment.me">info@yourmoment.me</a></p>
                        </div>

                        <a href="contact.php" type="button" class="cont-us">contact us
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="34" viewBox="0 0 111 34"
                                fill="none">
                                <path
                                    d="M104.974 18.6439H104.097C93.5087 18.6439 12.9204 18.6439 2.3334 18.6439C2.05855 18.6439 1.78237 18.6545 1.51019 18.632C0.664298 18.5605 0.0318814 17.8975 0.00119453 17.0678C-0.0308266 16.2036 0.584245 15.4692 1.44748 15.3673C1.71833 15.3355 1.99584 15.3514 2.27069 15.3514C12.9084 15.3514 93.546 15.3514 104.185 15.3514C104.453 15.3514 104.721 15.3514 105.182 15.3514C104.895 15.047 104.725 14.8565 104.544 14.6765C100.731 10.8918 96.9163 7.10836 93.1031 3.32495C92.9617 3.18468 92.8162 3.04837 92.6801 2.90281C91.937 2.11013 91.9116 1.12689 92.6148 0.455964C93.2805 -0.180559 94.2972 -0.156741 95.0284 0.565799C100.12 5.60506 105.206 10.6496 110.284 15.7021C111.131 16.5451 111.123 17.4661 110.273 18.3117C105.211 23.3443 100.142 28.3717 95.0697 33.3937C94.3039 34.152 93.2765 34.1957 92.5974 33.5433C91.8649 32.8406 91.8983 31.8666 92.7188 31.0501C96.6334 27.1569 100.555 23.2689 104.481 19.3863C104.673 19.1957 104.935 19.0753 105.164 18.9218C105.102 18.8291 105.039 18.7365 104.975 18.6439H104.974Z"
                                    fill="black" />
                            </svg></a>

                    </div><!--/.footer-widget-si-->

                    <div class="">
                        <ul class="list-inline mb-3 ">
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="img/ym/facebook.png" alt="facebook" class="img-fluid w-50">
                                </a>

                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="img/ym/inst.png" alt="inst" class="img-fluid w-50">
                                </a>

                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <img src="img/ym/link.png" alt="link" class="img-fluid w-50">
                                </a>

                            </li>

                            <li class="list-inline-item mt-4">
                                    <small class="copy_write">© 2023 ym agencey . All rights reserved.</small>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </footer>
    <!--footer end-->

    <a href="javascript:" id="return-to-top"><i class="fa-solid fa-chevron-up"></i></a>

    <!--jquery-->
    <script src="js/jquery.js"></script>
    <!--bootstrap bundle v5.2.3-->
    <script src="js/vendor/bootstrap.bundle.js"></script>
    <!--meanmenu-->
    <script src="js/vendor/jquery.meanmenu.js"></script>
    <!--aos-->
    <script src="js/vendor/aos.js"></script>
    <!--swiper-->
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <!--magnificient-->
    <script src="js/vendor/magnific-popup.min.js"></script>
    <!--easing js-->
    <script src="js/vendor/easing.js"></script>
    <!-- <script src="js/countdown.js"></script> -->
    <!--main script-->
    <script src="js/main.js"></script>

    <script>
        var swiper = new Swiper(".swiper-slider", {
            // Optional parameters
            centeredSlides: true,
            slidesPerView: 3,
            grabCursor: true,
            freeMode: false,
            loop: true,
            mousewheel: false,
            keyboard: {
                enabled: true
            },

            // Enabled autoplay mode
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: false,
                clickable: true
            },

            // If we need navigation
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },

            // Responsive breakpoints
            breakpoints: {


                300: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                400: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10
                }
            }
        });

        // slicer 2
    </script>

    <script>
        var swiper = new Swiper(".swiper-slider .test_slider", {
            // Optional parameters
            centeredSlides: true,
            slidesPerView: 5,
            grabCursor: true,
            freeMode: false,
            loop: true,
            mousewheel: false,
            keyboard: {
                enabled: true
            },

            // Enabled autoplay mode
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: false,
                clickable: true
            },

            // If we need navigation
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },

            // Responsive breakpoints
            breakpoints: {


                300: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                400: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },

                768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10
                }
            }
        });
    </script>


</body>


</html>