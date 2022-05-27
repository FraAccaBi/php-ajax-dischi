<template>
  <div >
    <DisksList />
    
  </div>
</template>

<script>

import DisksList from "@/components/DisksList.vue";

export default {
  name: 'SiteMain',
  components: {
    DisksList
  }
}
</script>

<style lang="scss" scoped>

@use '@/assets/scss/style.scss';

</style>