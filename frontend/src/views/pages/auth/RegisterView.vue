<script setup>
import AuthContent from '@/components/forms/AuthContent.vue';
import FormInput from '@/components/forms/FormInput.vue';
import FormItem from '@/components/forms/FormItem.vue';
import FormLabel from '@/components/forms/FormLabel.vue';
import FormBtn from '@/components/forms/FormBtn.vue';
import { RouterLink } from 'vue-router';

</script>

<template>
<section>
    <AuthContent title="Inscription">
       <form>
           <FormItem>
               <FormLabel name="name">Nom</FormLabel>
               <FormInput name="name" type="text" placeholder="Votre nom" />
           </FormItem>

           <FormItem>
               <FormLabel name="email">Email</FormLabel>
               <FormInput name="email" type="email" placeholder="Email" />
           </FormItem>

           <FormItem>
               <FormLabel name="password">Mot de passe</FormLabel>
               <FormInput name="password" type="password" placeholder="Mot de passe" />
           </FormItem>

           <FormItem>
               <FormLabel name="password_confirmation">Confirmer votre mot de passe</FormLabel>
               <FormInput name="password_confirmation" type="password" placeholder="Confirmer votre mot de passe" />
           </FormItem>

          <div class="flex items-center">
            <input id="link-checkbox" type="checkbox" value="" class="">
            <label for="link-checkbox" class="ms-2 text-lg font-medium text-gray-900 dark:text-gray-500">
              J'accepte les <RouterLink  :to="{ name: 'cgu' }" class="text-blue-600 dark:text-blue-500 hover:underline">Condition génerale d'utilisation</RouterLink>.</label>
          </div>

           <FormItem class="mt-5 flex justify-end">
               <FormBtn>Connexion</FormBtn>
           </FormItem>
       </form>

       <div class="text-center mt-5">
           <p class="text-lg text-gray-500 mt-2">
              Vous avez déjà un compte ? <RouterLink :to="{ name: 'login' }" class="text-blue-500">Connexion</RouterLink>
            </p>
       </div>
    </AuthContent>
</section>
</template>

<style scoped>
</style>