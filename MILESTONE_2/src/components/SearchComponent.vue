<template>
  <div class="d-flex justify-content-end pe-4">
  <form class="d-flex" @submit.prevent="$emit('formSubmit')">
      <input
        class="form-control me-2"
        type="search"
        placeholder="Search author"
        aria-label="Search"
        :value="searchText"
        @input="$emit('input', $event.target.value)"
        @keyup="$emit('formSubmit', searchText)"

      />
      <button
        class="btn btn-outline-success d-flex align-items-center"
        type="submit"
        :disabled="searchText < 1"
      >
        <font-awesome-icon icon="fa-solid fa-magnifying-glass" />
        Search
      </button>
      <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    What's your mood today?
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
    <li v-for="element in this.tipi" :key="element.id"><a class="dropdown-item" href="#" @click="$emit('selected', $event.target.value)">{{element.genre}}</a></li>
  </ul>
</div>
    </form>
  </div>
 
</template>

<script>
export default {
    name:"SearchBox",
    props: {
        searchText: String,
    },
    data() {
      return{
        tipi:[
          {
            genre:'Rock',
            id:1,
          },
          {
            genre:'Pop',
            id:2,
          },
          {
            genre:'Jazz',
            id:3,
          },
          {
            genre:'Metal',
            id:4,
          }
        ]
      }
    },
    methods:{
      selected(){
        /* if(this.selected === item.genre){
          return this.list.filter(item => {
            return item.genre.includes(this.selected))
          }) */
          console.log('selected');
        }
    }
    
}

    

</script>

<style lang="scss">

@import '@/assets/scss/variables.scss';
.form-control{
  width: 150px;
}


</style>