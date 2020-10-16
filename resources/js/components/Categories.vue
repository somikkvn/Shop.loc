<template>
    <div id="components-demo">
        <button-counter></button-counter>
        <button-counter2></button-counter2>
    </div>
</template>

<script>

Vue.component('button-counter', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<button v-on:click="count++">Счётчик кликов — {{ count }}</button>'
})
Vue.component('button-counter2', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<button v-on:click="count++">Счётчик кликов — {{ count }}</button>'
})
</script>

<style scoped>

</style>
