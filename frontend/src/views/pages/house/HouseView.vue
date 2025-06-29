<script setup>
import CardSm from '@/components/ui/card/CardSm.vue';

</script>

<template>
<section class="section">
    <h2 class="section-title">
        Maison à louer
    </h2>

    <CardSm>
        <h4>Filtres</h4>

<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div class="p-2 bg-yellow-500"></div>
    <div class="p-2 bg-yellow-500"></div>
    <div class="p-2 bg-yellow-500 col-span-2 md:col-span-1"></div>
</div>
    </CardSm>
</section>
</template>

<style scoped>
</style>