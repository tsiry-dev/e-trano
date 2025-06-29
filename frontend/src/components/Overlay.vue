<script setup>
</script>

<template>
<div class="overlay"></div>
</template>

<style scoped lang="scss">
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.842);
    z-index: 8;
    backdrop-filter: blur(5px);

    @media (max-width: $lg) {
        z-index: 9;
    }
}
</style>