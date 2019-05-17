<template>

    <div id="rates">
        <h2>Rate Calculator</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p>You can calculate a cost of transportation of your car from auction to destination</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-0 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <form class="calculate-block" id="calculate-block" @submit.prevent="submitMakeOrder">
                    <h4>Calculate</h4>
                    <div class="calculate-block__row">
                        <div class="calculate-block__ground">
                            <h5>Ground Transportation</h5>
                            <div class="ground-row">
                                <label for="auction">Auction:</label>
                                <select class="select-calculate" id="auction" v-model="locations">
                                    <option :value="auction_locations" v-for="(auction_locations,key) in dataGround"
                                            :key="key">{{ key }}
                                    </option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label for="location">Location:</label>
                                <select class="select-calculate" id="location" :disabled="isCanSelectLocation"
                                        v-model="exitPortGrounds">
                                    <option :value="location_port" v-for="(location_port, location) in locations">
                                        {{ location }}
                                    </option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label for="ground-port">Exit port:</label>
                                <select class="select-calculate" id="ground-port" :disabled="isCanSelectExitPort"
                                        v-model="groundPriceData" @change="selectGroundPriceHandler">
                                    <option :value="data" v-for="(data, exitPortGround) in exitPortGrounds">
                                        {{ exitPortGround }}
                                    </option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label class="ground-trans" for="ground-trans">Ground Transport:</label>
                                <input class="only-number" id="ground-trans" value="0.00" disabled
                                       v-model="groundPrice">
                                <div class="dollar">$</div>
                            </div>
                            <!--<div class="ground-row">
                                <div class="call-message" id="call-message-ground">
                                    There are no prices in this direction. Сontact us for more information.
                                </div>
                            </div>-->
                        </div>
                        <div class="calculate-block__ocean">
                            <h5>Ocean Transportation</h5>
                            <div class="ocean-row ocean-none"></div>
                            <div class="ocean-row">
                                <label for="ocean-port">Exit port:</label>
                                <select class="select-calculate" id="ocean-port" v-model="prices">
                                    <option :value="item" v-for="item in dataOcean" :key="item.id">
                                        {{ item.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="ocean-row">
                                <label for="destination">Destination:</label>
                                <select class="select-calculate" name="destination" id="destination"
                                        :disabled="isCanSelectDestinationPort" v-model="selectedDestinationPort"
                                        @change="totalBill">
                                    <option :value="port" v-for="port in prices.prices">
                                        {{ port.destination_ports.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="ocean-row">
                                <label class="ocean-trans" for="ocean-trans">Ocean Transport:</label>
                                <input class="only-number" id="ocean-trans" value="0.00" disabled v-model="oceanPrice">
                                <div class="dollar">$</div>
                            </div>
                            <!--<div class="ocean-row">
                                <div class="call-message" id="call-message-ocean">
                                    There are no prices in this direction. Сontact us for more information.
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="total-block">
                        <label class="total-block__label" for="total">Total bill:</label>
                        <input class="total-block__inp only-number" id="total" value="0.00" disabled
                               v-model="makeOrderForms.totalPrice">
                        <div class="dollar">$</div>
                    </div>
                    <div class="contact-block">
                        <label class="contact-block__lbl">
                            Name:
                            <input name="name"
                                   class="contact-block__inp"
                                   v-validate="'required'"
                                   :class="{'required': errors.has('name')}"
                                   v-model="makeOrderForms.name">
                        </label>
                        <label class="contact-block__lbl">
                            Phone:
                            <input name="phone"
                                   class="contact-block__inp only-number"
                                   v-validate="'required'"
                                   :class="{'required': errors.has('phone')}"
                                   v-model="makeOrderForms.phone">
                        </label>
                    </div>
                    <button class="btn-make-order" id="make-order">Make Order</button>
                </form>
            </div>
        </div>
    </div>

</template>

<script>

    export default {
        name: "RateCalculatorComponent",
        props: {
            dataOcean: {
                type: Array,
                require: true
            },
            dataGround: {
                type: Object,
                require: true
            },
        },
        data() {
            return {
                prices: {},
                destinationPorts: [],
                selectedDestinationPort: {
                    price: 0
                },
                auction: null,
                locations: {},
                exitPortGrounds: {},
                groundPriceData: null,
                groundPrice: 0,
                makeOrderForms: {
                    ground: {
                        auction: '',
                        location: '',
                        exitPort: '',
                        price: ''
                    },
                    ocean: {
                        exitPort: '',
                        destination: '',
                        price: ''
                    },
                    totalPrice: '',
                    name: '',
                    phone: ''
                }
            }
        },
        methods: {
            selectExitPortHandler() {
                this.destinationPorts = this.exitPort.prices;
                this.selectedDestinationPort = {
                    price: 0
                };
            },
            selectGroundPriceHandler() {

                console.log(this.groundPriceData);

                this.makeOrderForms.ground.auction = this.groundPriceData.auctions_name;
                this.makeOrderForms.ground.location = this.groundPriceData.groundLocations_name;
                this.makeOrderForms.ground.exitPort = this.groundPriceData.groundExitPorts_name;

                if (!!Number(this.groundPriceData.price)) {
                    this.groundPrice = this.groundPriceData.price;
                    this.makeOrderForms.ground.price = this.groundPriceData.price;
                } else {
                    this.groundPrice = "call";
                    this.makeOrderForms.ground.price = "call";
                }
                this.totalBill();
            },
            totalBill() {

                this.makeOrderForms.ocean.exitPort = this.prices.name;
                this.makeOrderForms.ocean.destination = this.selectedDestinationPort.destination_ports.name;

                let $groundTrans = this.groundPrice;
                let $oceanTrans = this.oceanPrice;

                $groundTrans = (!isNaN(parseFloat($groundTrans))) ? parseFloat($groundTrans) : 0;
                $oceanTrans = (!isNaN(parseFloat($oceanTrans))) ? parseFloat($oceanTrans) : 0;

                let $result = $groundTrans + $oceanTrans;
                this.makeOrderForms.totalPrice = $result.toFixed(2);
            },
            submitMakeOrder() {

                this.$validator.validateAll().then((result) => {
                    if (result) {
                        console.log('%c Form Submitted!', 'color: green; font-weight: 600;');
                        this.sendForms();
                        return;
                    }

                    this.isValidateForms = false;
                    console.log('%c Correct them errors!', 'color: red; font-weight: 600;');
                });

            },
            sendForms() {
                axios({
                    method: 'post',
                    url: '/email/rate_order',
                    data: this.makeOrderForms
                })
                    .then(res => {
                        console.log(res);
                        $('#message-success').addClass('fadeIn');
                        $('#calculate-block').trigger("reset");
                        setTimeout(function () {
                            $('#message-success').removeClass('fadeIn');
                        }, 4000);
                    })
                    .catch(err => {
                        console.log('Error', err);
                        $('#message-server-error').addClass('fadeIn');
                        setTimeout(function () {
                            $('#message-server-error').removeClass('fadeIn');
                        }, 4000);
                    });
            }
        },
        computed: {
            isCanSelectDestinationPort() {
                return !Object.keys(this.prices).length;
            },
            oceanPrice() {
                if (this.selectedDestinationPort && "price" in this.selectedDestinationPort) {
                    this.makeOrderForms.ocean.price = this.selectedDestinationPort.price;
                    return this.selectedDestinationPort.price
                }
                return 0;
            },
            isCanSelectLocation() {
                return !Object.keys(this.locations).length;
            },
            isCanSelectExitPort() {
                return !Object.keys(this.exitPortGrounds).length;
            }
        }
    }
</script>

<style scoped>

</style>