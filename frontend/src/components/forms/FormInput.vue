<script setup>
defineProps({
   type: {
      type: String,
      default: 'text'
   },
   name: {
      type: String,
      default: 'Inconnue'
   },
   placeholder: {
      type: String,
      default: 'champs requis'
   }
});
</script>

<template>
<input :type="type" :name="name" :id="name" :placeholder="placeholder"
class="bg-gray-100 border-2 text-gray-500 text-xl border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:border-yellow-400"
>
</template>

<style scoped>
</style>