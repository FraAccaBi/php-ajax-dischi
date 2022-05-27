<template>
  <div id="app">
    
    <SiteHeader />
    <SiteMain />

  </div>
</template>

<script>
import SiteHeader from '@/components/SiteHeader.vue'
import SiteMain from '@/components/SiteMain.vue'

export default {
  name: 'App',
  components: {
    SiteHeader,
    SiteMain
  }
}
</script>

<style lang="scss">

@use '@/assets/scss/style.scss';

</style>
