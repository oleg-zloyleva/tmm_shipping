<template>
    <div class="price-item d-flex my-1 py-1">
        <div class="destination-ports col-8 d-flex align-items-center">
            {{ price.destination_ports.name }}
        </div>
        <div class="price col-2 d-flex align-items-center">
            {{ price.price }}
        </div>
        <div class="action col-2 d-flex align-items-center">
            <button class="btn btn-outline-danger" @click="deleteItem"><font-awesome-icon icon="trash-alt" /></button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OceanDeliveryDestinationPortComponent",
        props:['price'],
        methods:{
            deleteItem(){
                axios.delete(`/admin/deleteOceanDeliveryPriceItem/${this.price.id}`)
                    .then(res => {
                        console.log(res.data.status);
                        if(res.data.status){
                            document.location.reload(true);
                        }
                    });
            }
        }
    }
</script>

<style scoped>

</style>