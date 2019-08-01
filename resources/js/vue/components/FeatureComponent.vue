<template>
    <div class="col-md-3 mb-3">
        <h4>{{ title }}</h4>
        <hr />
        <div class="text-white">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FeatureComponent",
        props: ['title']
    }
</script>

<style scoped>

</style>