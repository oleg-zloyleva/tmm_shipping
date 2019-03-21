<template>
    <div class="row flex-column my-3">
        <h1>Ground delivery Prices</h1>

        <h3>Create new price line</h3>
        <div class="col-12 d-flex justify-content-center my-2">
            <form class="form-inline" @submit.prevent="submitAddItem">
                <div class="form-group mx-2">
                    <select class="form-control" required v-model="newPriceItem.auction_id">
                        <option v-for="auction in auctions" :key="auction.id" :value="auction.id">{{ auction.name }}</option>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <select class="form-control" required v-model="newPriceItem.ground_location_id">
                        <option v-for="location in locations" :key="location.id" :value="location.id">{{ location.name }}</option>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <select class="form-control" required v-model="newPriceItem.ground_exit_port_id">
                        <option v-for="exitPort in exitPorts" :key="exitPort.id" :value="exitPort.id">{{ exitPort.name }}</option>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <input type="number" class="form-control" placeholder="Enter price" required v-model="newPriceItem.price">
                </div>
                <div class="form-group mx-2">
                    <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
                </div>
            </form>
        </div>

        <div class="table-row table-head row">
            <div class="exit-port my-1 col-2 d-flex align-items-center">
                Auction
            </div>
            <div class="location-ports-block col-10 d-flex">
                <div class="location-ports col-6 d-flex align-items-center">
                    Location
                </div>
                <div class="exit-ports col-6 d-flex align-items-center">
                    <div class="exit port col-7 align-items-center">
                        Exit port
                    </div>
                    <div class="price col-3 d-flex align-items-center">
                        Price
                    </div>
                    <div class="action col-2 d-flex align-items-center">
                        Action
                    </div>
                </div>
            </div>
        </div>

        <div class="table-row table-content row my-1 py-1 border-bottom" v-for="auction in data" >
            <div class="exit-port col-2">
                {{ auction.auction.name }}
            </div>
            <div class="location-ports-block col-10 d-flex flex-column" >
                <div class="d-flex flex-grow-1 border-bottom" v-for="location in auction.ground_location">
                    <div class="location-ports col-6 d-flex">
                        {{ location.item.name }}
                    </div>
                    <div class="exit-ports col-6 d-flex flex-column">
                        <div class="d-flex flex-grow-1 my-1" v-for="port in location.ground_exit_port">
                            <div class="exit port col-7 align-items-center">
                                {{ port.name }}
                            </div>
                            <div class="price col-3 d-flex align-items-center">
                                {{ port.price }}
                            </div>
                            <div class="action col-2 d-flex align-items-center">
                                <button class="btn btn-outline-danger" @click="deleteItem(port.data)"><font-awesome-icon icon="trash-alt" /></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "GroundDeliveryPriceListComponent",
        props:{
            data:{
                type: Object,
                require: true
            },
            routes:{
                type: Object,
                require: true
            },
            auctions:{
                type: Array,
                require: true
            },
            locations:{
                type: Array,
                require: true
            },
            exitPorts:{
                type: Array,
                require: true
            }
        },
        data(){
            return {
                newPriceItem:{
                    auction_id:null,
                    ground_location_id:null,
                    ground_exit_port_id:null,
                    price:null,
                }
            }
        },
        methods:{
            deleteItem(data){
                axios.post(this.routes.deleteGroundDeliveryPriceItem,{
                    ...data
                })
                    .then(res => {
                        console.log(res.data);
                        if(res.data.status){
                            document.location.reload(true);
                        }
                    });
            },
            submitAddItem(){
                axios.post(this.routes.addGroundDeliveryPriceItem,{
                    ...this.newPriceItem
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