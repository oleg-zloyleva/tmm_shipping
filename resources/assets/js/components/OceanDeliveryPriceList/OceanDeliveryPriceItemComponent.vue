<template>
    <div class="d-flex flex-grow-1">
        <div class="exit-port my-1 col-3">
            {{ item.name }}
        </div>
        <div class="destination-ports-with-prices col-9">
            <div class="price-item d-flex my-1 py-1" v-for="price in item.prices" :key="price.id">
                <div class="destination-ports col-8 d-flex align-items-center">
                    {{ price.destination_ports.name }}
                </div>
                <div class="price col-2 d-flex align-items-center">
                    {{ price.price }}
                </div>
                <div class="action col-2 d-flex align-items-center">
                    <button class="btn btn-outline-danger"><font-awesome-icon icon="trash-alt" /></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OceanDeliveryPriceItemComponent",
        props:['item']
    }
</script>

<style scoped>

</style>