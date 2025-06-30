<script setup>
import BtnPrimary from '@/components/ui/buttons/BtnPrimary.vue';
import CardSm from '@/components/ui/card/CardSm.vue';
import { VMap, VMapOsmTileLayer, VMapZoomControl } from 'vue-map-ui';



const house = {
    id: 1,
    title: 'Maison Sécurisée,calme et confortable',
    place: 'Cité Itaosy',
    image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
    address: 'ITV tsena cité ',
    city: 'Antananarivo',
    price: 150000,
    stars: 5,
};

const offres = [
  'Salle de bain',
  '3 grandes salles',
  'Salle de sport',
  '1 garages',
];


</script>

<template>
 <section class="section">
    <div class="flex justify-between items-center">
        <h2 class="text-gray-600 text-2xl">
            {{ house.title }}
        </h2>

        <div>
            <span class="py-2 px-4 cursor-pointer bg-pink-600 text-white rounded-2xl"><i class="pi pi-bookmark"></i>&nbsp;Enregistrer</span>
        </div>
    </div>

    <CardSm class="mt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <div class="mb-3">
                    <img :src="house.image" alt="" class="w-full">
                </div>

                <div class="mt-6">
                    <h2 class="text-2xl">{{ house.place }} - {{ house.city }}</h2>
                    <p>{{ house.address }}</p>
                    <p class="text-gray-600">
                        <span><i class="pi pi-map-marker text-gray-800"></i></span>
                        {{ house.city }}
                    </p>
                    <p class="text-gray-600">
                        <span><i class="pi pi-money-bill text-gray-800"></i></span>
                        {{ house.price }} Ar / mois
                    </p>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-2 gap-4">
                    <div><img :src="house.image" alt="" class="w-full"></div>
                    <div><img :src="house.image" alt="" class="w-full"></div>
                    <div><img :src="house.image" alt="" class="w-full"></div>
                    <div><img :src="house.image" alt="" class="w-full"></div>
                </div>
                <div class="text-center mt-4">
                    <BtnPrimary>
                        Afficher tous les images
                    </BtnPrimary>
                </div>
            </div>
        </div>
    </CardSm>

    <VMap style="height: 200px;">
    <VMapOsmTileLayer />
    <VMapZoomControl />
  </VMap>

 </section>
</template>

<style scoped>
</style>