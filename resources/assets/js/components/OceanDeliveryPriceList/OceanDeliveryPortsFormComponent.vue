<template>
    <div class="row">
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
            <h2>Create new Destination port</h2>
            <form class="form-inline" @submit.prevent="submitAddDestinationPortItem">
                <div class="form-group mx-2">
                    <input type="text" class="form-control" placeholder="Enter port name" required v-model="destinationPort">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-success"><font-awesome-icon icon="plus" /></button>
                </div>
            </form>
            <div class="ports-list">
                <h4>Current ports:</h4>
                <ul class="list-unstyled">
                    <li v-for="destinationPort in destinationPorts">{{ destinationPort.name }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OceanDeliveryPortsFormComponent",
        props:{
            exitPorts:{
                type: Array,
                required: true
            },
            destinationPorts:{
                type: Array,
                required: true
            },
        },
        data(){
            return{
                exitPort:"",
                destinationPort: ""
            }
        },
        methods:{
            submitAddExitPortItem(){
                console.log("submitAddExitPortItem");

            },
            submitAddDestinationPortItem(){
                console.log("submitAddDestinationPortItem");

            },
        }
    }
</script>

<style scoped>

</style>