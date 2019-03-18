<template>
    <div class="d-flex flex-grow-1">
        <div class="exit-port my-1 col-3">
            {{ item.name }}
        </div>
        <div class="destination-ports-with-prices col-9">
            <ocean-delivery-destination-component
                    v-for="price in item.prices"
                    :key="price.id"
                    :price="price"
            ></ocean-delivery-destination-component>
        </div>
    </div>
</template>

<script>
    Vue.component('ocean-delivery-destination-component', require('./OceanDeliveryDestinationPortComponent').default);
    export default {
        name: "OceanDeliveryPriceItemComponent",
        props:['item'],
    }
</script>

<style scoped>

</style>