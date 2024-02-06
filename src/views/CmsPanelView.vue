<template>
  <div class="flex">
    <cms-menu-list class="el_padding" />
    <cms-albums-list class="el_padding" />
  </div>
</template>

<script setup lang="ts">
import CmsMenuList  from '@/components/cms/CmsMenuList.vue'
import CmsAlbumsList  from '@/components/cms/CmsAlbumsList.vue'

</script>

<style scoped>
  .flex {
    display: flex;
  }
  .column {
    flex-direction: column;
  }
  .justify-center {
    justify-content: center;
  }
  .justify-left {
    justify-content: flex-start;
  }
 
  .text-left{
  text-align: left;
}
  .el_padding{
    padding: 10px;
  }

</style>