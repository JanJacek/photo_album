<template>
  <div class="top-margin">
    <div class="flex column justify-left">
      <p class="txt-purple">Lista</p>
      <button @click="addAlbum" class="cms-button">+</button>
    </div>
    <ul v-for="(album, index) in a_store.albums" class="menu-list cms-list text-left" :key="index">
      <li>
        <p>{{ album }}</p>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { AuthStore } from '@/pinia/authStore'

const a_store = AuthStore();

</script>

<style scoped>
.top-margin{
  margin-top:86px;
}
.cms-list{
  list-style: none;
  padding: 0;
}
.cms-button {
  border: none;
  background-color: white;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0px;
  cursor: pointer;
  padding: 0;
}
.txt-purple{
    color: #7A36E8;
}
.bg-purple{
    background-color: #7A36E8;
}
.text-left{
  text-align: left;
}
</style>