<template>
  <div>
    
    <h1>Home</h1>
    <div>
      <input v-model="username" type="text" placeholder="username" />
    </div>
    <br />
    <div>
      <input v-model="password" type="password" placeholder="password" />
    </div>
    <br />
    <button @click="login()" class="button">login</button>
    <button @click="logout()" class="logoutButton"> logOut</button>
  </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import { ref } from 'vue';

const  username = ref('');
const  password = ref('');


function login() {
  console.log('?action=login')
  axios.post('http://localhost:8082/orion/',{
  'action': 'login',
  'username': username.value,
  'password': password.value
})
    .then((res) => {
      console.log(res)
    })
    .catch((err) => {
      console.log(err)
    })
}

function logout() {
  console.log('?action=logout');
  axios.post('http://localhost:8082/orion/', {'action':'logout'})
    .then((res) => {
      console.log(res)
      // if rest is success then rout to admin page
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
.logoutButton {
  border-radius: 5px;
  border: none;
  padding: 10px 20px;
  color: rgb(255, 255, 255);
  background-color: rgb(255, 0, 0);
}
</style>
