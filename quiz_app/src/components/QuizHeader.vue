<template>
  <header>
    <h4>Question {{ questionStatus }}</h4>
    <div class="bar">
      <div class="completion" :style="{ width: barParentage }"></div>
    </div>
  </header>
</template>

<script setup>
import { defineProps } from "vue";

const { questionStatus, barParentage } = defineProps([
  "questionStatus",
  "barParentage",
]);
</script>

<style scoped>
header {
  margin-top: 20px;
}

header h4 {
  font-size: 30px;
}

.bar {
  width: 300px;
  height: 50px;
  border: 3px solid bisque;
}

.completion {
  height: 100%;
  width: 0%;
  background: bisque;
}
</style>