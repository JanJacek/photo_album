<template>
  <div class="container">
    <div class="flex column justify-left top_margin">
      <p class="color-purple txt-left ma-none fs-lg">Lista</p>
      <button @click="addAlbum" class="cms-button txt-left">+</button>
    </div>
    <ul class="menu-list cms-list text-left" >
      <li  v-for="(album, index) in a_store.albums" :key="index" class >
        <p class="ma-xxs txt-left color-text">{{ album }}</p>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { AuthStore } from '@/pinia/authStore'

const a_store = AuthStore();

</script>

<style scoped lang="scss">
.container{
  width: 130px;
}
.top_margin{
  margin-top: 130px;
}

</style>