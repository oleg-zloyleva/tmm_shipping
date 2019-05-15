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
                <div class="calculate-block" id="calculate-block">
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
                            <div class="ground-row">
                                <div class="call-message" id="call-message-ground">
                                    There are no prices in this direction. Сontact us for more information.
                                </div>
                            </div>
                        </div>
                        <div class="calculate-block__ocean">
                            <h5>Ocean Transportation</h5>
                            <div class="ocean-row ocean-none"></div>
                            <div class="ocean-row">
                                <label for="ocean-port">Exit port:</label>
                                <select class="select-calculate" id="ocean-port" v-model="prices">
                                    <option :value="item" v-for="item in dataOcean" :key="item.id">{{ item.name }}
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
                            <div class="ocean-row">
                                <div class="call-message" id="call-message-ocean">
                                    There are no prices in this direction. Сontact us for more information.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total-block">
                        <label class="total-block__label" for="total">Total bill:</label>
                        <input class="total-block__inp only-number" id="total" value="0.00" disabled>
                        <div class="dollar">$</div>
                    </div>
                    <button class="btn-make-order" id="make-order">Make Order</button>
                </div>
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
            }
        },
        methods: {
            selectExitPortHandler() {
                console.log("selectExitPortHandler");
                this.destinationPorts = this.exitPort.prices;
                this.selectedDestinationPort = {
                    price: 0
                };
            },
            selectGroundPriceHandler() {
                console.log();
                if (!!Number(this.groundPriceData.price)) {
                    this.groundPrice = this.groundPriceData.price;
                } else {
                    this.groundPrice = "call";
                }
                this.totalBill();
            },
            totalBill() {
                let $groundTrans = this.groundPrice;
                let $oceanTrans = this.oceanPrice;

                $groundTrans = (!isNaN(parseFloat($groundTrans))) ? parseFloat($groundTrans) : 0;
                $oceanTrans = (!isNaN(parseFloat($oceanTrans))) ? parseFloat($oceanTrans) : 0;

                let $result = $groundTrans + $oceanTrans;
                $('#total').val($result.toFixed(2));
            }
        },
        computed: {
            isCanSelectDestinationPort() {
                return !Object.keys(this.prices).length;
            },
            oceanPrice() {
                if (this.selectedDestinationPort && "price" in this.selectedDestinationPort) {
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