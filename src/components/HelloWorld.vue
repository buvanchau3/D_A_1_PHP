<script setup>
defineProps({
  msg: {
    type: String,
    required: true
  }
})
</script>

<template>
  <!-- <div class="greetings">
    <h1 class="green">{{ msg }}</h1>
    <h3>
      You’ve successfully created a project with
      <a href="https://vite.dev/" target="_blank" rel="noopener">Vite</a> +
      <a href="https://vuejs.org/" target="_blank" rel="noopener">Vue 3</a>.
    </h3>
  </div> -->
 <nav>
  <ul>
    <li>Home</li>
    <li>Cart</li>
    <li>Product</li>
    <li>Contact</li>
  </ul>
 </nav>
</template>

<style scoped>
h1 {
  font-weight: 500;
  font-size: 2.6rem;
  position: relative;
  top: -10px;
}

ul{
  display: flex;
}
li{
  font-family: 'Courier New', Courier, monospace;
  margin: 20px 10px;
  list-style: none;
  cursor: pointer;
  font-size: 25px;
  font-weight: 600;
}
li:hover{
  color: red;
  cursor: pointer;
}
h3 {
  font-size: 1.2rem;
}

.greetings h1,
.greetings h3 {
  text-align: center;
}

@media (min-width: 1024px) {
  .greetings h1,
  .greetings h3 {
    text-align: left;
  }
}
</style>
