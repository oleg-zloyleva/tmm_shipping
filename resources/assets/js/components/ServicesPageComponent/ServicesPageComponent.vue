<template>
    <div id="services-slider">
        <h2>What we offer</h2>
        <div class="slider">
            <slick ref="slick" :options="slickOptions">
                <div class="slider__slide">
                    <img class="slider__img" src="img/slide-1.jpg" alt="">
                    <div class="slider__desc">
                        <h3>Ocean Freight</h3>
                        <p>
                            TMM International inc offers its extensive expertise within one of the widest ranges of
                            ocean freight services available on the market, including all kinds of container
                            specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                            heavy loads, transit loads, and oversized shipments. Personal care is given to every item
                            going into a container or arriving on board (and leaving) a vessel under its own power.
                        </p>
                        <div class="add-more-info">
                            <p>
                                TMM International inc offers its extensive expertise within one of the widest ranges
                                of
                                ocean freight services available on the market, including all kinds of container
                                specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                                heavy loads, transit loads, and oversized shipments. Personal care is given to every
                                item
                                going into a container or arriving on board (and leaving) a vessel under its own power.
                            </p>
                        </div>
                        <div class="slider__more">
                            more
                            <img class="icon-arrow" src="img/arrow-right.png" alt="Arrow right">
                        </div>
                    </div>
                </div>
                <div class="slider__slide">
                    <img class="slider__img" src="img/slide-2.jpg" alt="">
                    <div class="slider__desc">
                        <h3>Air Freight</h3>
                        <p>
                            TMM International inc offers its extensive expertise within one of the widest ranges of
                            ocean freight services available on the market, including all kinds of container
                            specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                            heavy loads, transit loads, and oversized shipments. Personal care is given to every item
                            going into a container or arriving on board (and leaving) a vessel under its own power.
                        </p>
                        <div class="add-more-info">
                            <p>
                                TMM International inc offers its extensive expertise within one of the widest ranges
                                of
                                ocean freight services available on the market, including all kinds of container
                                specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                                heavy loads, transit loads, and oversized shipments. Personal care is given to every
                                item
                                going into a container or arriving on board (and leaving) a vessel under its own power.
                            </p>
                        </div>
                        <div class="slider__more">
                            more
                            <img class="icon-arrow" src="img/arrow-right.png" alt="Arrow right">
                        </div>
                    </div>
                </div>
                <div class="slider__slide">
                    <img class="slider__img" src="img/slide-3.jpg" alt="">
                    <div class="slider__desc">
                        <h3>Ground Transportation</h3>
                        <p>
                            TMM International inc offers its extensive expertise within one of the widest ranges of
                            ocean freight services available on the market, including all kinds of container
                            specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                            heavy loads, transit loads, and oversized shipments. Personal care is given to every item
                            going into a container or arriving on board (and leaving) a vessel under its own power.
                        </p>
                        <div class="add-more-info">
                            <p>
                                TMM International inc offers its extensive expertise within one of the widest ranges
                                of
                                ocean freight services available on the market, including all kinds of container
                                specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                                heavy loads, transit loads, and oversized shipments. Personal care is given to every
                                item
                                going into a container or arriving on board (and leaving) a vessel under its own power.
                            </p>
                        </div>
                        <div class="slider__more">
                            more
                            <img class="icon-arrow" src="img/arrow-right.png" alt="Arrow right">
                        </div>
                    </div>
                </div>
                <div class="slider__slide">
                    <img class="slider__img" src="img/slide-4.jpg" alt="">
                    <div class="slider__desc">
                        <h3>Automobile Shipping</h3>
                        <p>
                            TMM International inc offers its extensive expertise within one of the widest ranges of
                            ocean freight services available on the market, including all kinds of container
                            specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                            heavy loads, transit loads, and oversized shipments. Personal care is given to every item
                            going into a container or arriving on board (and leaving) a vessel under its own power.
                        </p>
                        <div class="add-more-info">
                            <p>
                                TMM International inc offers its extensive expertise within one of the widest ranges
                                of
                                ocean freight services available on the market, including all kinds of container
                                specifications. We provide automobiles shipping, RO/RO shipping, LCL and FCL shipments,
                                heavy loads, transit loads, and oversized shipments. Personal care is given to every
                                item
                                going into a container or arriving on board (and leaving) a vessel under its own power.
                            </p>
                        </div>
                        <div class="slider__more">
                            more
                            <img class="icon-arrow" src="img/arrow-right.png" alt="Arrow right">
                        </div>
                    </div>
                </div>
            </slick>
        </div>
    </div>
</template>

<script>

    import Slick from 'vue-slick';

    export default {
        name: "ServicesPageComponent",
        components: {Slick},
        data() {
            return {
                slickOptions: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    dotsClass: 'dots-services',
                    autoplay: true,
                    autoplaySpeed: 3000
                }
            };
        },
        methods: {
            next() {
                this.$refs.slick.next();
            },
            prev() {
                this.$refs.slick.prev();
            },
            reInit() {
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            }
        }
    }

</script>

<style scoped>

</style>