<template>
  <section class="h-screen overflow-hidden">
    <Print v-if="state.selected" class="print hidden"></Print>
    <router-view class="noprint"></router-view>
  </section>
</template>

<script setup lang="ts">
import Print from './components/print/Print.vue'
import { useStore } from 'vuex'
const { state } = useStore()

window.addEventListener('keypress', (event) => {
  if ((event.keyCode == 10 || event.keyCode == 13) && event.ctrlKey){
    state.openCardAdd = true
  }
})
</script>