<template>
  <div class="container">
    <div class="flex column justify-left top_margin">
      <p class="color-purple txt-left ma-none fs-lg">Edycja</p>
    </div>  

    <div class="flex column justify-left mt-xl">
      <label for="name" class="txt-left ma-none fs-xs">Nazwa</label>
      <input v-model="name" type="text" id="name" name="name" class="textGetter">
    </div>  

    <div class="flex column justify-left mt-xl">
      <label for="description" class="txt-left ma-none fs-xs">Opis</label>
      <textarea id="description" name="description" rows="1" cols="10" class="textGetter"></textarea>
    </div>  

      <ul class="cms-list mt-xl">
        <li>
          <div class="flex align-end mb-md"> 
            <img src="https://via.placeholder.com/50" alt="placeholder" class="img-thumbnail mr-md">
            <input v-model="zbychu" type="text" id="name" name="name" class="textGetter">
          </div>

          <div class="flex align-end">
            <img src="https://via.placeholder.com/50" alt="placeholder" class="img-thumbnail mr-md">
            <input v-model="mirek" type="text" id="name" name="name" class="textGetter">
          </div>
        </li>
      
      </ul>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const name = ref('');
const description = ref('');
const zbychu = ref('');
const mirek = ref('');
</script>

<style scoped lang="scss">
.container{
  width: 300px;
}
.top_margin{
  margin-top: 130px;
}

.textGetter{
  border: 0;
  border-bottom: 1px solid;
}

textarea {
  min-width: 100%; /* Minimalna szerokość textarea */
  max-width: 100%; /* Maksymalna szerokość textarea */
  min-height: 10px; /* Minimalna wysokość textarea */
}

</style>