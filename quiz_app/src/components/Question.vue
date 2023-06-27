<template>
  <div>
    <div class="question_container">
      <h1 class="question">question will go here</h1>
    </div>
    <div class="options_container">
      <div class="option">
        <p class="option_label">A</p>
        <div class="option_value">
          <p>NaCl</p>
        </div>
      </div>
      <div class="option">
        <p class="option_label">B</p>
        <div class="option_value">
          <p>NaCl</p>
        </div>
      </div>
      <div class="option">
        <p class="option_label">C</p>
        <div class="option_value">
          <p>NaCl</p>
        </div>
      </div>
      <div class="option">
        <p class="option_label">D</p>
        <div class="option_value">
          <p>NaCl</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
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