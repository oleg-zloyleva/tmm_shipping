<template>
    <div class="row">
        <div class="col-6 d-flex align-items-center flex-column my-2">
            <h2>Create new Auction</h2>
            <form class="form-inline" @submit.prevent="submitAddAuctionItem">
                <div class="form-group mx-2">
                    <input type="text" class="form-control" placeholder="Enter auction name" required v-model="auction">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
                </div>
            </form>
            <div class="ports-list">
                <h4>Current Auctions:</h4>
                <ul class="list-unstyled">
                    <li v-for="auction in auctions">{{ auction.name }}</li>
                </ul>
            </div>
        </div>
        <div class="col-6 d-flex align-items-center flex-column my-2">
            <h2>Create new Exit port</h2>
            <form class="form-inline" @submit.prevent="submitAddExitPortItem">
                <div class="form-group mx-2">
                    <input type="text" class="form-control" placeholder="Enter port name" required v-model="exitPort">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
                </div>
            </form>
            <div class="ports-list">
                <h4>Current ports:</h4>
                <ul class="list-unstyled">
                    <li v-for="exitPort in exitPorts">{{ exitPort.name }}</li>
                </ul>
            </div>
        </div>
        <div class="col-6 d-flex align-items-center flex-column my-2">
            <h2>Create new Location</h2>
            <form class="form-inline" @submit.prevent="submitAddLocationItem">
                <div class="form-group mx-2">
                    <input type="text" class="form-control" placeholder="Enter location name" required v-model="location">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
                </div>
            </form>
            <div class="ports-list">
                <h4>Current locations:</h4>
                <ul class="list-unstyled">
                    <li v-for="location in locations">{{ location.name }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddGroundDeliveryItemFormComponent",
        props:{
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
                auction:null,
                exitPort:null,
                location:null,
            }
        },
        methods:{
            submitAddAuctionItem(){
                axios.post(this.routes.addGroundAuction,{
                    name: this.auction
                })
                    .then(res => {
                        console.log(res);
                        if(res.data.status){
                            document.location.reload(true);
                        }
                    });
            },
            submitAddExitPortItem(){
                axios.post(this.routes.addGroundExitPort,{
                    name: this.exitPort
                })
                    .then(res => {
                        console.log(res);
                        if(res.data.status){
                            document.location.reload(true);
                        }
                    });
            },
            submitAddLocationItem(){
                axios.post(this.routes.addGroundLocation,{
                    name: this.location
                })
                    .then(res => {
                        console.log(res);
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