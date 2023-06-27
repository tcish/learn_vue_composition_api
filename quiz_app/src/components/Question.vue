<template>
  <div>
    <div class="question_container">
      <h1 class="question">{{ question.text }}</h1>
    </div>
    <div class="options_container">
      <div
        class="option"
        v-for="option in question.options"
        :key="option.id"
        @click="emitSelectedOption(option.isCorrect)"
      >
        <p class="option_label">{{ option.label }}</p>
        <div class="option_value">
          <p>{{ option.text }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from "vue";

const emit = defineEmits(["selectOption"]);
const { question } = defineProps(["question"]);

const emitSelectedOption = (isCorrect) => {
  emit("selectOption", isCorrect);
};
</script>

<style scoped>
.questions_container {
  margin-top: 20px;
}

.question {
  margin-bottom: 20px;
  font-size: 40px;
}

.option {
  display: flex;
  margin-bottom: 20px;
  cursor: pointer;
}

.option_label {
  background: bisque;
  width: 50px;
  height: 50px;
  font-size: 30px;
  display: flex;
  justify-items: center;
  justify-content: center;
}

.option_value {
  background: rgb(230, 227, 227);
  width: 100%;
  font-size: 30px;
  padding: 0;
  padding-left: 20px;
}
</style>