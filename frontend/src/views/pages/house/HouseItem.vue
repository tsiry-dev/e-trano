<script setup>
defineProps({
   house: {
      type: Object,
      default: () => {}
   }
})
</script>

<template>
    <div >
        <div class="houseItem bg-white rounded-xl overflow-hidden" >
            <div class="houseItem-content">
            <div class="houseItem-content-title">
                <span><i class="pi pi-map-marker text-gray-800"></i></span>
                {{ house.name }}
            </div>
            </div>
            <img class="houseItem-img" :src="house.image" alt="">
            <div class="houseItem-stars">
               <span class="" v-for="i in 5">
                  <i class="pi pi-star text-yellow-400" :style="{ color: i <= house.stars ? '#ffc107' : '#fff' }"></i>
               </span>
            </div>
        </div>
        <div class="mt-4">
            <h4 class="text-lg font-semibold">
                <span><i class="pi pi-map-marker text-gray-800"></i></span>
               {{ house.name  }}
            </h4>
            <p>
               <span><i class="pi pi-address-book"></i></span>
               {{ house?.city ?? 'Autre' }} | {{ house.address ?? 'Autre' }}
            </p>
            <p>
                <span><i class="pi pi-money-bill text-gray-800"></i></span>
               {{ house.price }} Ar / mois
            </p>
        </div>
    </div>
</template>

<style scoped lang="scss">
.houseItem {
      height: 20rem;
      width: 100%;
      position: relative;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

      
      &:hover .houseItem-content-title {
         background: white;
         opacity: 1;
      }

      &-content {
         position: absolute;
         top: 0;
         width: 100%;
         padding: 1rem;

         &-title {
            background: rgb(232, 229, 229);
            opacity: 0.7;
            padding: .5rem 2rem;
            display: inline-block;
            border-radius: 3rem;
            transition: .3s;
         }
      }

      &-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
      }

      &-stars {
         position: absolute;
         bottom: 0;
         left: 0;
         padding: 1rem;
         font-size: 1.5rem;
         z-index: 9;
         display: flex;
         gap: 1rem;
         margin-top: 1rem;
         background: linear-gradient(180deg, rgba(255, 255, 255, 0), rgb(14, 14, 14));
         width: 100%;

         i {
            // color: white;
            font-size: 1.5rem;
         }
      }
}
</style>