<template>
  <div class="flex ma-none pa-none">
    <cms-menu-list class="el_padding full-height-div" />
    <cms-albums-list class="el_padding bg-grey-1 full-height-div border-grey-1" />
    <cms-edit-album class="el_padding bg-grey-1 border-grey-1" />
    <cms-media class="el_padding bg-grey-1 border-grey-1" />
  </div>
</template>

<script setup lang="ts">
import CmsMenuList  from '@/components/cms/CmsMenuList.vue'
import CmsAlbumsList  from '@/components/cms/CmsAlbumsList.vue'
import CmsEditAlbum  from '@/components/cms/CmsEditAlbum.vue'
import CmsMedia from '@/components/cms/CmsMedia.vue'
</script>

<style scoped lang="scss">
.el_padding{
  padding: 30px;
}
// .bg-grey-1{
//   background-color: #f2f2f2;
// }
.border-grey-1{
  border-left: 1px solid #C9C9C9;
}
.full-height-div {
  height: 100vh;
}
</style>