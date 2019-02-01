<!-- //=============== FOOTER ==============// -->
<section id="footer">
    <div class="container">
        <div class="link-block">
            <span class="link-block__head">Terms And Condtions:</span>
            <a href="#" class="link-block__link">Terms of Use Website</a>
            <a href="#" class="link-block__link">Terms of Transport</a>
            <a href="#" class="link-block__link">Terms of Purchase</a>
            <a href="#" class="link-block__link">Imprint</a>
            <a href="#" class="link-block__link">Privacy Terms</a>
            <a href="#" class="link-block__link">Cookie Policy</a>
        </div>
        <div class="copyright">
            Copyright &copy; TMM International inc. All rights reserved.
        </div>
    </div>
</section>

{{--<script src="libs/bootstrap/js/bootstrap.min.js"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/libs/slick/slick.js') }}"></script>

@switch(true)
    @case($page["home"] == "active")
        <script>
            $('.slider').slick({
                slidesToShow: 5,
                slidesToScroll: 5,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: false,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true
                    }

                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true
                    }
                }]
            });
        </script>
    @break

    @case($page["services"] == "active")
        <script>
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                dotsClass: 'dots-services',
                autoplay: true,
                autoplaySpeed: 5000
            });
        </script>
    @break

    @case($page["order"] == "active")
        <script>
            $('.slider-order').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<button class="slider-order__arrow-prev" id="arrow-prev">Back</button>',
                nextArrow: '<button class="slider-order__arrow-next" id="arrow-next">Next</button>',
                dots: true,
                arrows: true,
                infinite: false,
                draggable: false,
                // initialSlide: 5, // убрать (для разработки)
                customPaging: function (slider, i) {
                    let $dots = ['Shipper', 'Consignee', 'Title', 'Notify', 'Description', 'Comments'];
                    return $dots[i];
                }
            });
        </script>
    @break

    @default
    {{--Default case...--}}
@endswitch


<script src="{{ asset('js/libs/select2/select2.js') }}"></script>
</body>
</html>