<template>
    <transition name="rules-regulations">
        <div id="rules" v-if="openRules" @click.stop="closeRules" data-close="true">
            <div class="rules-popup">
                <div class="rules-popup__close" @click.stop="closeRules" data-close="true">&times;</div>
                <div class="rules-popup__head">Rules &amp; Regulations</div>
                <div class="rules-popup__desc">
                    <!-- text -->
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        name: "PopupRulesRegulations",
        props: ['openRules'],
        data() {
            return {}
        },
        methods: {
            closeRules(e) {
                if (e.target.hasAttribute("data-close")) {
                    this.$emit("closeRules");
                }
            }
        }
    }
</script>

<style scoped>

</style>