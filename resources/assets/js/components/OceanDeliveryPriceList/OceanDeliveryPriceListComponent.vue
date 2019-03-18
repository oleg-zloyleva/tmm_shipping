<template>
    <div class="row flex-column">
        <h1>Ocean delivery Prices</h1>
        <div class="table-row table-head row">
            <div class="exit-port my-1 col-3">
                Exit Port
            </div>
            <div class="destination-ports-with-prices col-9">
                <div class="price-item d-flex my-1">
                    <div class="destination-ports col-8 d-flex align-items-center">
                        Destination Port
                    </div>
                    <div class="price col-2 d-flex align-items-center">
                        Price
                    </div>
                    <div class="action col-2 d-flex align-items-center">
                        Action
                    </div>
                </div>
            </div>
        </div>
        <div class="table-row table-content row my-2" v-for="item in data" :key="item.id">

            <ocean-delivery-item-component
                :item="item"
            ></ocean-delivery-item-component>

            <add-ocean-delivery-price-component
                :destinationPorts="destinationPorts"
            ></add-ocean-delivery-price-component>

        </div>
    </div>
</template>

<script>
    Vue.component('add-ocean-delivery-price-component', require('./AddOceanDeliveryPriceListComponent').default);
    Vue.component('ocean-delivery-item-component', require('./OceanDeliveryPriceItemComponent').default);
    export default {
        name: "OceanDeliveryPriceListComponent",
        props:{
            data:{
                type: Array,
                require: true
            },
            destinationPorts:{
                type: Array,
                require: true
            },
        }
    }
</script>

<style scoped>
    .table-row{
        cursor: pointer;
    }
    .table-row.table-head{
        font-size: 1.6rem;
        font-weight: bold;
    }
    .table-row.table-content .price-item:nth-child(2n-1){
        background-color: #f2f3f2;
    }
    .table-row.table-content .price-item:hover{
        background-color: #d2d3d2;
    }
</style>