<template>
  <div >
     <div class="col card" >
        <img :src="poster" alt="title" />
        <div class="title">{{title}}</div>
        <div class="text">
          <div>{{author}}</div>
          <div>{{year}}</div>
        </div>
        
    </div>
  </div>

    
  
</template>

<script>

export default {
  name: 'DiskComponent',
  props: {
    poster:String,
    title: String,
    author: String,
    year: String,
    genre: String
  }
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/variables.scss';
img{
  height: 160px;
}
.card{
  background-color: $header-bg ;
  height: 280px;
  padding: 1rem;
}
.text{
  color: $text-secondary;
}
.title{
  color: #ffffff;
  text-transform: uppercase;
  font-weight: 600;
  font-size: larger;
  
}
</style>