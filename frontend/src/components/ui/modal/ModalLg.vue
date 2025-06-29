<script setup>
</script>

<template>
<div class="modal">
    <slot />
</div>
</template>

<style scoped>
.modal {
    position: fixed;
    top: 10rem;
    left: 50%;
    transform: translateX(-50%);
    width: 40rem;
    background: white;
    padding: 2rem;
}
</style>