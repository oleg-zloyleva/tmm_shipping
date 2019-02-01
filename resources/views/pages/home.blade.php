@extends('layouts.index')

@section('content')
<!-- //============== SERVICES ==============// -->
<section id="services">
    <div class="container">
        <h2>Services</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="services-block">
                    <h3>Ocean Freight</h3>
                    <p>TMM International inc is a premier provider of truck freight shipping services, with
                        routing inbound freight to and from points throughout the U.S., Canada, and Mexico, as well as
                        outbound shipping to and from points within the continental U.S., Canada, and Mexico.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services-block">
                    <h3>Air Freight</h3>
                    <p>TMM International inc is a premier provider of truck freight shipping services, with
                        routing inbound freight to and from points throughout the U.S., Canada, and Mexico, as well as
                        outbound shipping to and from points within the continental U.S., Canada, and Mexico.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services-block">
                    <h3>Ground Transportation</h3>
                    <p>TMM International inc is a premier provider of truck freight shipping services, with
                        routing inbound freight to and from points throughout the U.S., Canada, and Mexico, as well as
                        outbound shipping to and from points within the continental U.S., Canada, and Mexico.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="services-block">
                    <h3>Automobile Shipping</h3>
                    <p>TMM International inc is a premier provider of truck freight shipping services, with
                        routing inbound freight to and from points throughout the U.S., Canada, and Mexico, as well as
                        outbound shipping to and from points within the continental U.S., Canada, and Mexico.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //============== PARTNERS ==============// -->
<section id="partners">
    <div class="container">
        <h2>Partners</h2>
        <div class="slider">
            <div class="slide"><img src="img/logo/aeroflot.png" alt=""></div>
            <div class="slide"><img src="img/logo/apl.png" alt=""></div>
            <div class="slide"><img src="img/logo/auscargo.png" alt=""></div>
            <div class="slide"><img src="img/logo/british.png" alt=""></div>
            <div class="slide"><img src="img/logo/cma-cgm.png" alt=""></div>
            <div class="slide"><img src="img/logo/cs.png" alt=""></div>
            <div class="slide"><img src="img/logo/evergreen.png" alt=""></div>
            <div class="slide"><img src="img/logo/hapag-lloyd.png" alt=""></div>
            <div class="slide"><img src="img/logo/iag-cargo.png" alt=""></div>
            <div class="slide"><img src="img/logo/kline.png" alt=""></div>
            <div class="slide"><img src="img/logo/maersk.png" alt=""></div>
            <div class="slide"><img src="img/logo/msc.png" alt=""></div>
            <div class="slide"><img src="img/logo/nedlloyd.png" alt=""></div>
            <div class="slide"><img src="img/logo/sas.png" alt=""></div>
            <div class="slide"><img src="img/logo/ww.png" alt=""></div>
            <div class="slide"><img src="img/logo/yang-ming.png" alt=""></div>
            <div class="slide"><img src="img/logo/yusen.png" alt=""></div>
            <div class="slide"><img src="img/logo/zim.png" alt=""></div>
        </div>
    </div>
</section>

<!-- //============= QUICK QUOTE ==============// -->
<section id="quick-quote">
    <div class="container">
        <h2>quick quote</h2>
        <div class="quote-block">
            <form id="form-quick-quote">
                <div class="quote-block__row">
                    <select class="select-freight" name="FreightType" id="test">
                        <option value="Freight typ">Freight type</option>
                        <option value="Freight type 2">Freight type 2</option>
                        <option value="Freight type 3">Freight type 3</option>
                    </select>
                    <input class="only-number" name="Weight" placeholder="Weight">
                </div>
                <div class="quote-block__row">
                    <input name="ShippingFrom" placeholder="Shipping from">
                    <input name="ShippingTo" placeholder="Shipping to">
                </div>
                <div class="quote-block__row">
                    <input class="quote-email" name="Email" placeholder="E-mail">
                </div>
                <div class="quote-block__row">
                    <textarea name="Details" placeholder="Details"></textarea>
                </div>
                <button type="button" class="btn-submit" id="btn-send-quick-quote">Send</button>
            </form>
        </div>
    </div>
</section>

@endsection
