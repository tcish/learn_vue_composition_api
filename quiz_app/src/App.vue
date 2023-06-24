<template>
  <div class="container">
    <header>
      <h1>Quizzes</h1>
      <input type="text" placeholder="Search..." />
    </header>
    <div class="options-container">
      <div class="card">
        <img
          src="https://s1.qwant.com/thumbr/0x380/1/0/0191f59a21fe103f7c846c1a94aaaf7993c3eb0be804e8585cf8fa98697a48/3Lwnjz.jpg?u=http%3A%2F%2Fcdn.wallpapersafari.com%2F47%2F95%2F3Lwnjz.jpg&q=0&b=1&p=0&a=0"
          alt=""
        />
        <div class="card-text">
          <h2>Math</h2>
          <p>12 questions</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style scoped>
.container {
  max-width: 1000px;
  margin: 0 auto;
}

header {
  margin-bottom: 10px;
  margin-top: 30px;
  display: flex;
  align-items: center;
}

header h1 {
  font-weight: bold;
  margin-right: 30px;
}

header input {
  bottom: none;
  background-color: rgba(128, 128, 128, 0.1);
  padding: 10px;
  border-radius: 5px;
}

.options-container{
  display: flex;
  flex-wrap: wrap;
  margin-top: 40px;
}

/* CARD */
.card {
  width: 310px;
  overflow: hidden;
  border-radius: 2%;
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 35px;
  margin-right: 20px;
  cursor: pointer;
}

.card img {
  width: 100%;
  height: 190px;
  margin: 0;
}

.card .card-text {
  padding: 0 5px;
}
</style>
