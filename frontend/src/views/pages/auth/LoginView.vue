<script setup>
import AuthContent from '@/components/forms/AuthContent.vue';
import FormInput from '@/components/forms/FormInput.vue';
import FormItem from '@/components/forms/FormItem.vue';
import FormLabel from '@/components/forms/FormLabel.vue';
import FormBtn from '@/components/forms/FormBtn.vue';

</script>

<template>
<section>
    <AuthContent title="Connexion">
       <form>
           <FormItem>
               <FormLabel name="email">Email</FormLabel>
               <FormInput name="email" type="email" placeholder="Email" />
           </FormItem>
           <FormItem>
               <FormLabel name="password">Mot de passe</FormLabel>
               <FormInput name="password" type="password" placeholder="Mot de passe" />
           </FormItem>

           <div>
             <p class="text-gray-500 text-lg font-medium">Mot de passe oublié ? <RouterLink to="/" class="text-blue-500">Réinitialiser votre mot de passe</RouterLink></p>
           </div>

           <FormItem class="mt-5 flex justify-end">
               <FormBtn>Connexion</FormBtn>
           </FormItem>
       </form>

       <div class="text-center mt-5">
           <p class="text-lg text-gray-500 mt-2">
              Pas encore de compte ? <RouterLink :to="{ name: 'register' }" class="text-blue-500">Inscrivez-vous</RouterLink>
            </p>
       </div>
    </AuthContent>
</section>
</template>

<style scoped>
</style>