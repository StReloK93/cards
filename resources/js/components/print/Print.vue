<template>
    <section id="printPage" @click="state.selected = null" class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50">
        <Front :selected="state.selected"></Front>
        <Back :selected="state.selected"></Back>
    </section>
</template>

<script setup lang="ts">
import Front from './Front.vue' 
import Back from './Back.vue'
import { useStore } from 'vuex'
const {state} = useStore()
</script>
<style>
#printPage{
    font-family: 'Times New Roman', Times, serif;
    font-weight: 500;
}
</style>