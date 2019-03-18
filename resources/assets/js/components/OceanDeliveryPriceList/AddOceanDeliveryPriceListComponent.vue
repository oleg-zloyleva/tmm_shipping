<template>
    <div class="col-12 d-flex justify-content-center my-2">
        <form class="form-inline" @submit.prevent="submitAddItem">
            <div class="form-group">
                <select class="form-control" v-model="item.ocean_destination_port_id" required>
                    <option v-for="port in destinationPorts" :key="port.id" :value="port.id">{{ port.name }}</option>
                </select>
            </div>
            <div class="form-group mx-2">
                <input type="number" class="form-control" placeholder="Enter price" v-model="item.price" required min="1" step="0.01">
            </div>
            <div class="form-group">
                <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "AddOceanDeliveryPriceListComponent",
        props:['destinationPorts','itemId'],
        data(){
            return {
                item: {
                    ocean_exit_port_id:null,
                    ocean_destination_port_id:null,
                    price:null,
                }
            }
        },
        created() {
            this.item.ocean_exit_port_id = this.itemId;
        },
        methods:{
            submitAddItem(){
                //Todo add validation!
                axios.post("/admin/oceanDeliveryPriceList",{
                    ...this.item
                })
                    .then(res => {
                        console.log(res);
                        if(res.data.status){
                            document.location.reload(true);
                        }
                    })
            }
        }
    }
</script>

<style scoped>

</style>