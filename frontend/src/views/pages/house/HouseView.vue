<script setup>
import FormInput from '@/components/forms/FormInput.vue';
import FormItem from '@/components/forms/FormItem.vue';
import FormLabel from '@/components/forms/FormLabel.vue';
import CardSm from '@/components/ui/card/CardSm.vue';
import BtnPrimary from '@/components/ui/buttons/BtnPrimary.vue';
import HouseItem from './HouseItem.vue';

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
   },
   {
      id: 7,
      name: 'Mandraka',
      address: 'IAA mandraka ambany 002',
      city: 'Antananarivo',
      price: 350000,
      stars: 2,
      image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg'
   },
   {
      id: 8,
      name: 'Mandraka',
      address: 'IAA mandraka ambany 002',
      city: 'Antananarivo',
      price: 350000,
      stars: 2,
      image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg'
   },
   {
      id: 9,
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
            <h2 class="filtre text-2xl">Filtres</h2>
            <span class="bg-gray-300 hover:bg-gray-200 text-sm px-4 py-2 rounded-lg border-1 border-gray-400 cursor-pointer">
                <i class="pi pi-spinner-dotted text-gray-700"></i> &nbsp;
                Réinitialiser
            </span>
        </div>
        
        <form action="">
            <CardSm class="mb-3">
                <FormItem>
                    <FormLabel name="city">Ville</FormLabel>
                    <FormInput name="city" type="text" placeholder="Ville" />
                </FormItem>
            </CardSm>
    
            <CardSm>
                <div class="grid grid-cols-2 gap-4">
                    <FormItem>
                        <FormLabel name="price">Prix min</FormLabel>
                        <FormInput name="price" type="text" placeholder="Prix min" />
                    </FormItem>
                    <FormItem>
                        <FormLabel name="price">Prix max</FormLabel>
                        <FormInput name="price" type="text" placeholder="Prix max" />
                    </FormItem>
                </div>
            </CardSm>

            <div class="mt-3">
                <BtnPrimary>Filtrer</BtnPrimary>
            </div>
        </form>
    </aside>

    <!-- Contenu principal -->
    <div class="house-content flex-1 h-[600px] overflow-y-scroll">
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <RouterLink :to="{ name: 'houses.show'}" v-for="house in houses" :key="house.id">
                <HouseItem  :house="house" />
            </RouterLink>
        </div>
    </div>
</div>

</section>
</template>

<style scoped lang="scss">
.house {
     &-content::-webkit-scrollbar{
        background: transparent;
        width: .8rem;
        margin: .5rem;
     }

     &-content::-webkit-scrollbar-thumb {
        background: rgb(163, 163, 160);
        width: 1rem;
        border-radius: 2rem;
     }
}

</style>