<script setup>
import { RouterLink } from 'vue-router'
import logo from '@/assets/images/logo.png'
import BoxRadius from '@/components/ui/buttons/BoxRadius.vue'
import ModalLg from '@/components/ui/modal/ModalLg.vue'
import { ref } from 'vue'
import { useRoute } from 'vue-router'

const isActiveSearch = ref(false);
const route = useRoute();

defineProps({
    isActive: {
        type: Boolean,
        default: true,
    }
})

const emit = defineEmits(['toggle', 'hideOverlay']);

const toggle = () => {
    emit('toggle')
}

// Fonction pour fermer le menu et l'overlay
const closeMenuAndOverlay = () => {
    emit('toggle') // Fermer le menu
    emit('hideOverlay', false) // Fermer l'overlay
}


</script>

<template>
<nav class="nav"  v-if="route.name !== 'login' && route.name !== 'register'">
    <div class="nav-left">
        <RouterLink to="/" class="nav-logo">
             <img class="nav-logo-img" :src="logo" alt="logo">
        </RouterLink>

        <ul class="nav-left-links" :style="!isActive ? 'left: -30rem' : 'left: -3rem'">
            <li><RouterLink to="/" @click="closeMenuAndOverlay">Acceuil</RouterLink></li>
            <li class="nav-left-line"></li>
            <li><RouterLink :to="{ name: 'houses'}" @click="closeMenuAndOverlay">Maison à louer</RouterLink></li>
            <li class="nav-left-line"></li>
            <li><RouterLink :to="{ name: 'services' }" @click="closeMenuAndOverlay">Nos Services</RouterLink></li>
            <li class="nav-left-line"></li>
            <li><RouterLink :to="{ name: 'contacts'}" @click="closeMenuAndOverlay">Contactez nous</RouterLink></li>
        </ul>

    </div>

    <ul class="nav-list nav-right">
        <li><RouterLink :to="{ name: 'register' }" @click="closeMenuAndOverlay">Inscription</RouterLink></li>
        <li class="nav-left-line"></li>
        <li><RouterLink :to="{ name: 'login' }" @click="closeMenuAndOverlay">Connexion</RouterLink></li>
    </ul>

    <BoxRadius class="nav-bars cursor-pointer" @click="toggle">
        <i class="pi pi-bars text-xl" v-if="!isActive"></i>
        <i class="pi pi-times text-xl" v-else></i>
    </BoxRadius>
</nav>

</template>

<style scoped lang="scss">

@mixin nav-box {
    border: solid 1px rgba(128, 128, 128, 0.261);
    padding: 1rem 2rem;
    border-radius: 5rem;
    box-shadow: 1px 1px 2px -1px rgba(0, 0, 0, 0.3);
}

.nav {
    background: $color-white;
    height: 6rem;
    padding: 0 5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2rem;

      @media (max-width: $lg) {
        margin-top: 0;
        padding: 0 1rem;
        position: fixed;
        width: 100%;
        left: 0;
        top: 0;
        z-index: 15;
     }

    &-bars {
        display: none;

        @media (max-width: $lg) {
            display: initial;
        }
    }

    &-list {
        display: flex;
        gap: 1rem;
    }

    &-left {
        display: flex;
        align-items: center;

        &-line {
            border-left: solid 1px rgba(128, 128, 128, 0.261);
            height: 1.5rem;
            width: 1px;

             @media (max-width: $lg) {
                height: 2px;
                width: 100%;
                background: gray;
             }
        }

        &-links {
            display: flex;
            gap: 1rem;
            margin-left: 3rem;
            @include nav-box;
            transition: .3s;
            z-index: 15;

            @media (max-width: $lg) {
                position: fixed;
                z-index: 9;
                flex-direction: column;
                gap: 1.5rem;
                // left: -3rem;
                left: -30rem;
                top: 0;
                background: lighten($color-primary, 30);
                border-radius: 0;
                height: 100vh;
                padding-top: 9rem;
                align-items: center;
                width: 20rem;
            }
        }
    }

    &-right {
        @include nav-box;
    }

    &-logo {
        width: 12rem;
        height: 5rem;

        @media (max-width: $lg) {
           position: relative;
           z-index: 10;
        }
        
        &-img {
            width: 100%;
            height: 100%;
        }
    }
}

//Utils

</style>