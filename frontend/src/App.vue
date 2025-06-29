<script setup>
import Nav from '@/components/Nav.vue'
import Overlay from './components/Overlay.vue';
import { ref } from 'vue';
import { watch } from 'vue';

const isActive = ref(false);

const toggleOverlay = () => {
    isActive.value = !isActive.value;
}

const closeMenuAndOverlay = () => {
    isActive.value = false;
}


watch(isActive, (newValue) => {
   if(newValue) {
      document.body.style.height = '100vh';
      document.body.style.overflow = 'hidden';
   }else {
      document.body.style.height = 'auto';
      document.body.style.overflow = 'auto';
   }
});

</script>

<template>
  <div class="content">
    <Nav @toggle="toggleOverlay" :isActive="isActive" @hide-overlay="closeMenuAndOverlay" />

    <main>
      <RouterView />
    </main>
  </div>

  <Overlay v-if="isActive" @click="() => isActive = false"  />
</template>

<style  lang="scss">

.content {
  max-width: 100rem;
  margin: 0 auto;

   @media (max-width: 768px) {
      width: 98%;
   }
}
</style>