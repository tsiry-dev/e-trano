<script setup>
defineProps({
    name: {
        type: String,
        default: 'Inconue'
    }
})
</script>

<template>
 <label :for="name" class="text-lg text-gray-500 mb-2">
    <slot />
 </label>
</template>
