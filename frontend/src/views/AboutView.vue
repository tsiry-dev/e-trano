<template>
  <div class="map-container">
    <LMap v-model:zoom="zoom" :center="[47.41322, -1.219482]">
      <LTileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        layer-type="base"
        name="OpenStreetMap"
      />
    </LMap>
  </div>
</template>

<script setup>
import "leaflet/dist/leaflet.css";
import { LMap, LTileLayer } from "@vue-leaflet/vue-leaflet";
import { ref } from "vue";

const zoom = ref(2);
</script>

<style scoped>
.map-container {
  height: 100vh; /* Prend toute la hauteur de la fenêtre */
  display: flex;
  justify-content: center; /* Centre horizontalement */
  align-items: center; /* Centre verticalement */
}

.l-map {
  width: 100%; /* Prend toute la largeur de son parent */
  height: 80%; /* Donne à la carte une hauteur de 80% de la fenêtre */
}
</style>
