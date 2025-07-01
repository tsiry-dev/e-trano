<script setup>
import CardSm from '@/components/ui/card/CardSm.vue';

const images = [
    'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
    'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
    'https://i.pinimg.com/736x/65/50/69/6550698bc27ddf35e8d2301d1ed13229.jpg',
    'https://i.pinimg.com/736x/9e/8b/1a/9e8b1adc84555ecc13fa137c93d706e9.jpg',
    'https://i.pinimg.com/736x/71/ce/34/71ce3411c83255a2afbfce89dd717772.jpg',
    'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
    'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
    'https://i.pinimg.com/736x/65/50/69/6550698bc27ddf35e8d2301d1ed13229.jpg',
]

</script>

<template>
    <div class="section">
        <div class="flex justify-between items-center">
            <h2 class="section-title">
                GALLERY
            </h2>

            <RouterLink :to="{ name: 'houses.show'}" class="bg-pink-600 px-4 py-1 text-white rounded-2xl">
               <i class="pi pi-arrow-left"></i> &nbsp; Retour
            </RouterLink>
        </div>


          <CardSm>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                  <div v-for="image in images" :key="image">
                      <img class="w-full h-[400px] object-cover" :src="image" alt="">
                  </div>
              </div>
          </CardSm>
    </div>
</template>

<style scoped>
</style>