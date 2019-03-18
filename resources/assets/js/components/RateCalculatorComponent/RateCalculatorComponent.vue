<template>

    <div id="rates">
        <h2>Rate Calculator</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p>You can calculate a cost of trasportation of your car from auction to destination</p>
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
                                <select class="select-calculate" name="auction" id="auction">
                                    <option value="0" selected>Choose auction</option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label for="location">Location:</label>
                                <select class="select-calculate" name="location" id="location">
                                    <option value="0" selected>Choose location</option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label for="ground-port">Exit port:</label>
                                <select class="select-calculate" name="ground-port" id="ground-port">
                                    <option value="0" selected>Choose exit port</option>
                                </select>
                            </div>
                            <div class="ground-row">
                                <label class="ground-trans" for="ground-trans">Ground Transport:</label>
                                <input class="only-number" id="ground-trans" value="0.00" disabled>
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
                                <!--<select class="select-calculate" name="ocean-port" id="ocean-port" v-model="exitPort">-->
                                <select id="ocean-port" v-model="exitPort" @change="selectExitPortHandler">
                                    <option value="null" selected disabled>Choose destination</option>
                                    <option :value="item" v-for="item in data" :key="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                            <div class="ocean-row">
                                <label for="destination">Destination:</label>
                                <select class="select-calculate" name="destination" id="destination" :disabled="isCanSelectDestinationPort" v-model="selectedDestinationPort">
                                    <option :value="port" v-for="port in destinationPorts">{{ port.destination_ports.name }}</option>
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
        props:{
            data:{
                type: Array,
                require: true
            },
        },
        data(){
            return {
                exitPort: null,
                destinationPorts: [],
                selectedDestinationPort:{
                    price:0
                },
            }
        },
        methods:{
            selectExitPortHandler(){
                console.log("selectExitPortHandler");
                this.destinationPorts = this.exitPort.prices;
                this.selectedDestinationPort = {
                    price:0
                };
            }
        },
        computed:{
            isCanSelectDestinationPort(){
                return ! this.exitPort;
            },
            oceanPrice(){
                if(this.selectedDestinationPort && "price" in this.selectedDestinationPort){
                    return this.selectedDestinationPort.price
                }
                return 0;
            }
        }
    }
</script>

<style scoped>

</style>