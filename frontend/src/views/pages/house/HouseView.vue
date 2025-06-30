<script setup>
import FormInput from '@/components/forms/FormInput.vue';
import FormItem from '@/components/forms/FormItem.vue';
import FormLabel from '@/components/forms/FormLabel.vue';
import CardSm from '@/components/ui/card/CardSm.vue';
import HouseItem from './HouseItem.vue';
import BtnPrimary from '@/components/ui/buttons/BtnPrimary.vue';

const houses = [
   {
      id: 1,
      name: 'Cité Itaosy',
      address: 'ITV tsena cité ',
      city: 'Antananarivo',
      price: 150000,
      stars: 5,
      image: 'https://i.pinimg.com/736x/9e/8b/1a/9e8b1adc84555ecc13fa137c93d706e9.jpg'
   },
   {
      id: 2,
      name: 'Analakely JJR',
      address: 'IAI Analakely 105',
      city: 'Antananarivo',
      price: 100000,
      stars: 4,
      image: 'https://i.pinimg.com/736x/65/50/69/6550698bc27ddf35e8d2301d1ed13229.jpg'
   },
   {
      id: 3,
      name: 'Tsimiadana',
      address: 'OPP bazare 150',
      city: 'Tamatave',
      price: 190000,
      stars: 3,
      image: 'https://i.pinimg.com/736x/71/ce/34/71ce3411c83255a2afbfce89dd717772.jpg'
   },
   {
      id: 4,
      name: 'Mandraka',
      address: 'IAA mandraka ambany 002',
      city: 'Antananarivo',
      price: 350000,
      stars: 2,
      image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg'
   },
   {
      id: 5,
      name: 'Mandraka',
      address: 'IAA mandraka ambany 002',
      city: 'Antananarivo',
      price: 350000,
      stars: 2,
      image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg'
   },
   {
      id: 6,
      name: 'Mandraka',
      address: 'IAA mandraka ambany 002',
      city: 'Antananarivo',
      price: 350000,
      stars: 2,
      image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg'
   }
]       

</script>

<template>
<section class="section">
    <h2 class="section-title">
        Maison à louer
    </h2>
   
<div class="flex flex-col md:flex-row gap-5">
    <!-- Barre latérale -->
    <aside class="w-full md:w-1/3 lg:w-1/4p-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="filtre">Filtres</h2>
            <span class="bg-gray-300 hover:bg-gray-200 text-sm px-4 py-2 rounded-lg border-1 border-gray-400 cursor-pointer">
                <i class="pi pi-spinner-dotted text-gray-700"></i> &nbsp;
                Réinitialiser
            </span>
        </div>
        
        <CardSm>
            <h3>Ville</h3>
            <FormItem>
                <FormInput name="city" type="text" placeholder="Ville" />
            </FormItem>
        </CardSm>
    </aside>

    <!-- Contenu principal -->
    <div class="flex-1">
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <HouseItem v-for="house in houses" :key="house.id" :house="house" />
        </div>
    </div>
</div>

</section>
</template>

<style scoped>
</style>