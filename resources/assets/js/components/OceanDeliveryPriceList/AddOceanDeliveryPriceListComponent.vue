<template>
    <div class="col-12 d-flex justify-content-center my-2">
        <form class="form-inline">
            <div class="form-group">
                <select class="form-control">
                    <option v-for="port in destinationPorts" :key="port.id">{{ port.name }}</option>
                </select>
            </div>
            <div class="form-group mx-2">
                <input type="number" class="form-control" placeholder="Enter price">
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
        props:['destinationPorts']
    }
</script>

<style scoped>

</style>