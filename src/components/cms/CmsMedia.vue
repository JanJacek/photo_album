<template>
  <div>
    <div class="flex column justify-left top_margin">
      <p class="color-purple txt-left ma-none fs-lg">Media</p>
      <button @click="addAlbum" class="cms-button txt-left">+</button>
    </div>

    <div class="flex mt-md" style="flex-wrap: wrap;">
      <img src="https://via.placeholder.com/100" alt="placeholder" class="img-thumbnail mr-md mb-md">
      <img src="https://via.placeholder.com/100" alt="placeholder" class="img-thumbnail mr-md mb-md">
      <img src="https://via.placeholder.com/100" alt="placeholder" class="img-thumbnail mr-md mb-md">
      <img src="https://via.placeholder.com/100" alt="placeholder" class="img-thumbnail mr-md mb-md">
    </div>
  </div>
</template>

<script setup lang="ts">
import { AuthStore } from '@/pinia/authStore'

const a_store = AuthStore();

</script>

<style scoped lang="scss">
.container{
  max-width: 0px;
}
.top_margin{
  margin-top: 130px;
}

</style>