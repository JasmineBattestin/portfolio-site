<script setup>
// import HelloWorld from './components/HelloWorld.vue'
// import TheWelcome from './components/TheWelcome.vue'
import Navbar from './components/Navbar.vue';
</script>

<template>

  <div id="app">
    <Navbar />
  </div>
  
  <header>

  </header>

  <main>
    <!-- <TheWelcome /> -->
  </main>
</template>

<style scoped>
header {
  line-height: 1.5;
  margin-bottom: 1rem; 
}

.logo {
  display: block;
  margin: 0 auto;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    justify-content: center;
  }


  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  
}
</style>