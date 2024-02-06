<template>
  <div>
    <h2 class="txt-purple">Admin Panel</h2>
    <ul class="menu-list cms-list txt-left">
      <li>
        <button to="/admin_panel/albums" class="txt-purple cms-button">Albumy</button>
      </li>
      <li>
        <button to="/admin_panel/informations" class="txt-purple cms-button">Informacje</button>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">

</script>

<style scoped>
.txt-purple{
    color: #7A36E8;
}
.bg-purple{
    background-color: #7A36E8;
}
.cms-button {
  border: none;
  background-color: white;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 0;
}
.cms-button:hover {
  font-weight: bold;
}
.cms-button-active {
  font-weight: bold;
}

.cms-list{
  list-style: none;
  padding: 0;
}

</style>