<template>
  <div class="container">
    <router-view />
  </div>
</template>f

<script setup>
import { RouterView } from "vue-router";
import QuizzesView from "./views/QuizzesView.vue";
</script>

<style scoped>
.container {
  max-width: 1000px;
  margin: 0 auto;
}
</style>