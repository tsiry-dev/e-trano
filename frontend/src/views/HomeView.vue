<script setup lang="ts">
import BtnPrimary from '@/components/ui/buttons/BtnPrimary.vue'
import HouseItem from './pages/house/HouseItem.vue';

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
   }
]

</script>

<template>
  <header class="header bg-amber-300">
    <h1 class="header-title">
      <span>TROUVER UNE MAISON À LOUER AVEC</span><br>
      <strong class="">E-TRANO</strong>
    </h1>

    <p class="header-para text-lg w-[50%] text-gray-900 font-semibold my-5">
      Explorez facilement des maisons et appartements disponibles à la location dans votre région.
      Grâce à E-Trano, vous pouvez réserver en ligne, contacter directement les propriétaires,
      et gérer vos annonces en toute simplicité.
    </p>

    <BtnPrimary>
       Explorer
    </BtnPrimary>
  </header>

  <section class="section">
      <h2 class="section-title">Logements mieux notés</h2>

      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
            <HouseItem v-for="house in houses" :key="house.id" :house="house" />
      </div>
  </section>
</template>



<style scoped lang="scss">
.header {
   padding: 6rem;  
   height: auto;
   background-image: linear-gradient(142deg, rgb(128 128 128 / 74%), rgba(203, 203, 22, 0.767)), url(/src/assets/images/header.jpg);
   background-size: cover;
   background-position: center;

   @media (max-width: $lg) {
      height: auto;
      text-align: center;
   }

   &-title {
      font-size: 3rem;
   }

   &-para {
      @media (max-width: $lg) {
           width: 100%;
      }
   }
}



</style>
