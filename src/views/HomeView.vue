<template>
  <div>
    <h1>Home</h1>
    <button @click="login()" class="button">login</button>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios';
function login() {
  console.log('login')
  axios.post('http://localhost:8082/orion/',{
  "username": "test",
  "password": "password"
})
    .then((res) => {
      console.log(res)
    })
    .catch((err) => {
      console.log(err)
    })
}
</script>

<style scoped>
.button {
  border-radius: 5px;
  border: none;
  padding: 10px 20px;
  color: rgb(255, 255, 255);
  background-color: rgb(84, 28, 168);
}
</style>
