<script setup>
</script>

<template>
<div class="box">
    <slot />
</div>
</template>

<style scoped>
.box {
    border: solid 1px rgba(128, 128, 128, 0.261);
    padding: 1rem 2rem;
    border-radius: 5rem;
    box-shadow: 1px 1px 2px -1px rgba(0, 0, 0, 0.3);
}
</style>