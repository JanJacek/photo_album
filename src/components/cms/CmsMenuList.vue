<template>
  <div class="container">
    <h2 class="color-purple txt-left fs-xl">Admin Panel</h2>
    <ul class="cms-list txt-left">
      <li>
        <button to="/admin_panel/albums" class="color-purple cms-button fs-lg">
          <p class="fs-lg ma-none mb-sm">Albumy</p>
        </button>
      </li>
      <li>
        <button to="/admin_panel/informations" class="color-purple cms-button fs-lg">
          <p class="fs-lg ma-none mb-sm">Informacje</p>
        </button>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">

</script>

<style scoped lang="scss">
.container{
  width: 220px;
}
</style>