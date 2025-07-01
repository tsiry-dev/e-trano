import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '@/views/pages/auth/LoginView.vue';
import RegisterView from '@/views/pages/auth/RegisterView.vue';
import CGUView from '@/views/pages/CGUView.vue';
import ServiceView from '@/views/pages/services/ServiceView.vue';
import HouseView from '@/views/pages/house/HouseView.vue';
import ContactView from '@/views/pages/contacts/ContactView.vue';
import HouseShowView from '@/views/pages/house/HouseShowView.vue';
import HouseGallery from '@/views/pages/house/HouseGallery.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue'),
    },
    {
      path: '/houses',
      name: 'houses',
      component: HouseView
    },
    {
      path: '/houses/show',
      name: 'houses.show',
      component: HouseShowView
    },
    {
      path: '/houses/gallery',
      name: 'houses.gallery',
      component: HouseGallery
    },
    {
      path: '/services',
      name: 'services',
      component: ServiceView
    },
    {
      path: '/contacts',
      name: 'contacts',
      component: ContactView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterView
    },
    {
      path: '/condion-generale-d-utilisation',
      name: 'cgu',
      component: CGUView
    },
      {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: () => import('@/views/pages/PageNotFound.vue')
      }
  ],
});


router.beforeEach((to, from, next) => {
   //Redirect to profile if user id connected
   //Redirect to login if user not connected
   //vérify user role

   return next();
});

export default router
