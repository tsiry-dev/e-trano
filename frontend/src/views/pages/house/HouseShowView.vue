<script setup>
import BtnPrimary from '@/components/ui/buttons/BtnPrimary.vue';
import CardSm from '@/components/ui/card/CardSm.vue';
import { ref, onMounted } from 'vue';
import L from 'leaflet';
import FormItem from '@/components/forms/FormItem.vue';
import FormInput from '@/components/forms/FormInput.vue';
import FormLabel from '@/components/forms/FormLabel.vue';

const house = {
  id: 1,
  title: 'Maison Sécurisée, calme et confortable',
  place: 'Cité Itaosy',
  image: 'https://i.pinimg.com/736x/1b/28/01/1b28015c3b941d74e552aa373db352c7.jpg',
  address: 'ITV tsena cité ',
  city: 'Antananarivo',
  price: 150000,
  stars: 5,
};

const mapCenter = ref([-18.91667, 47.46667]);
const zoomLevel = ref(13);
const choice = ref('reservation');

// Initialisation de la carte Leaflet
onMounted(() => {
  const map = L.map('map').setView(mapCenter.value, zoomLevel.value);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker(mapCenter.value).addTo(map)
    .bindPopup(house.title)
    .openPopup();
});

const handleChoice = (data) => {
    choice.value = data;
}

</script>

<template>
  <section class="section">
    <div class="flex justify-between items-center">
      <h2 class="text-gray-600 text-2xl">
        {{ house.title }}
      </h2>
      <div>
        <span class="py-2 px-4 cursor-pointer bg-pink-600 text-white rounded-2xl flex items-center"><i class="pi pi-bookmark"></i>&nbsp;Enregistrer</span>
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
              <span><i class="pi pi-building text-gray-800"></i></span>
              Salle: 3 Pièces
            </p>
            <p class="text-gray-600">
              <span><i class="pi pi-money-bill text-gray-800"></i></span>
              {{ house.price }} Ar / mois
            </p>

            <div class="mt-5">
                <h3 class="text-2xl text-gray-900">Descriptions</h3>
                <p class="text-gray-600 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime minus quibusdam doloremque nam ducimus earum quae incidunt modi, quaerat est qui labore amet accusamus sequi! Dicta fuga soluta voluptas natus ad cupiditate provident nemo tenetur nobis, impedit molestiae numquam repellat sint neque labore reprehenderit explicabo.</p>
            </div>
          </div>
        </div>

        <div>
          <div class="grid grid-cols-2 gap-4">
            <div><img :src="house.image" alt="" class="w-full"></div>
            <div><img :src="house.image" alt="" class="w-full"></div>
            <div><img :src="house.image" alt="" class="w-full"></div>
            <div><img :src="house.image" alt="" class="w-full"></div>
          </div>
          <div class="text-center mt-4">
            <RouterLink :to="{ name: 'houses.gallery'}" class="text-gray-600 text-sm">
              <BtnPrimary>
                Afficher tous les images
              </BtnPrimary>
            </RouterLink>
          </div>
        </div>
      </div>
    </CardSm>

    <div class="my-15">
      <div class="mb-3">
        <span class="mb-3 text-xl bg-green-400 px-2 py-2 rounded-2xl">
          <i class="pi pi-map "></i>
          &nbsp; Localisation
        </span>
      </div>

      <!-- Leaflet map -->
      <div id="map" style="height: 400px;"></div>
    </div>
  </section>

  <section class="section mt-5">
      <div class="content">
          <div class="content-comments">
             <h3 class="text-gray-500">Commentaires (5)</h3>
             <form action="">
                <div>
                    <textarea name="comment" class="w-1/2 bg-white outline-none p-2 text-gray-500" id="" cols="30" rows="3" placeholder="Ajouter un commentaire"></textarea>
                </div>
                <BtnPrimary>Commenter</BtnPrimary>
             </form>
             <div class="mt-3">
                <div class="flex gap-5 mb-3" v-for="i in 5" :key="i">
                    <div><img :src="`https://i.pravatar.cc/300?img=${i}`" alt="" class="w-15 h-15 rounded-full"></div>
                    <div>
                        John Doe
                        <p class="text-gray-600">
                            <span class="text-gray-800"><i class="pi pi-clock"></i></span>
                            &nbsp;2 heures
                        </p>
                        <p class="text-gray-600">
                            <span class="text-gray-800"><i class="pi pi-chat"></i></span>
                            &nbsp;Bonjour, je suis un commentaire
                        </p>
                    </div>
                </div>
             </div>
         </div>
         <div class="content-reserve">
            <CardSm>
                <h3 class="text-3xl text-gray-500 text-center">Que souhaitez-vous faire ?</h3>

                <div class="mt-2">
                    <div class="text-center">
                        <h2>{{ house.title }}</h2>
                         <p class="text-gray-600">
                            <span><i class="pi pi-map-marker text-gray-800"></i></span>
                            {{ house.city }} | {{ house.address }}
                        </p>
                        <p class="text-gray-600 mb-3">
                            <span><i class="pi pi-money-bill text-gray-800"></i></span>
                            {{ house.price }} Ar / mois
                        </p>
    
                        <div class="flex gap-5 justify-center card mt-8">
                            <button :class="choice === 'reservation' ? 'bg-pink-600 text-white' : ''" @click="handleChoice('reservation')">Réservation</button>
                            <button :class="choice === 'rendez-vous' ? 'bg-pink-600 text-white' : ''" @click="handleChoice('rendez-vous')">Rendez-vous</button>
                        </div>
                    </div>

                    <div class="mt-3 bg-gray-100 border-1 border-gray-300 p-2 rounded-2xl" v-if="choice">
                        <div v-if="choice === 'reservation'">
                            <h1 class="text-2xl text-center text-gray-500">reservation</h1>
                            <form action="" class="my-3">
                                <h2 class="text-2xl text-center mb-3"><i class="pi pi-money-bill"></i> 40 000 Ar</h2>
                                <BtnPrimary class="w-full">Valider</BtnPrimary>
                            </form>
                         </div>
                         <div v-if="choice === 'rendez-vous'">
                            <h1 class="text-2xl text-center text-gray-500">Prendre un rendez-vous</h1>

                            <form action="">
                                <FormItem>
                                    <FormLabel>Date</FormLabel>
                                    <FormInput type="date" name="date" placeholder="Date" class="bg-white" />
                                </FormItem>
                                <FormItem>
                                    <FormLabel>Heure</FormLabel>
                                    <FormInput type="time" name="time" placeholder="Heure" class="bg-white" />
                                </FormItem>
                                <FormItem>
                                    <BtnPrimary class="w-full">Valider</BtnPrimary>
                                </FormItem>
                            </form>
                         </div>
                    </div>

                </div>
            </CardSm>
         </div>
      </div>
  </section>
</template>



<style scoped lang="scss">
#map {
  height: 400px; /* Ajuste la hauteur de la carte */
  width: 100%; /* S'assure que la carte occupe toute la largeur de son parent */
}


.content {
    display: flex;
    gap: 2rem;

    @media (max-width: 768px) {
        flex-direction: column-reverse;
    }

    &-comments {
        width: 60%;
    }

    &-reserve {
        flex: 1;
    }
}

.card button {
    padding: .5rem 1rem;
    border-radius: 1rem;
    border: solid 1px gray;
    cursor: pointer;
}

</style>
