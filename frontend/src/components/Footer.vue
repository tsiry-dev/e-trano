<script setup>
</script>

<template>
<footer class="footer">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-col md:flex-row items-center">
                <img src="/src/assets/images/logo.png" alt="logo" class="w-40 mr-4">
            </div>

            <div class="flex flex-col md:flex-row items-center gap-4">
                <a href="#" class="text-gray-900 hover:text-gray-700 transition-all duration-200 text-sm">
                    Contact
                </a>
                <a href="#" class="text-gray-900 hover:text-gray-700 transition-all duration-200 text-sm">
                    FAQ
                </a>
                <a href="#" class="text-gray-900 hover:text-gray-700 transition-all duration-200 text-sm">
                    Mentions légales
                </a>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-gray-500">© {{ new Date().getFullYear() }} E-Trano ,By Tsiry Andria</p>
        </div>
    </div>
</footer>
</template>

<style scoped>

.footer {
    background: white;
    margin: 3rem 0;
}
</style>