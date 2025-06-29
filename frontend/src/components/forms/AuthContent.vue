<script setup>
import BtnDanger from '../ui/buttons/BtnDanger.vue';
import logo from '@/assets/images/logo.png'

defineProps({
    title: {
        type: String,
        default: 'Authentification'
    }
})
</script>

<template>

  <div class="text-center mb-5 mt-15 flex justify-center">
    <RouterLink :to="{ name: 'home' }">
      <img :src="logo" alt="" class="w-[10rem]">
    </RouterLink>
  </div>
    
  <div class="w-[95%] md:max-w-[35rem] mx-auto bg-white rounded-xl shadow-md px-5 py-8">
     <h2 class="text-2xl font-semibold text-gray-500 mb-4 mt-4 text-center">{{ title }}</h2>
    <slot />
  </div>
</template>

<style scoped>
</style>