<template>
  <div class="container-fluid">
     <section v-if="!loading">
      <div class="container">
        <div class="row row-cols-5">
            <div class="col g-1" v-for="(item, index) in filtered" :key="index" >
            <DiskComponent 
                :poster="item.poster"
                :title="item.title"
                :author="item.author"
                :year="item.year"
                :genre="item.genre"
            />
            </div>
        </div>
        
      </div>
    </section>
    <div
      class="d-flex min-vh-100 align-items-center justify-content-center"
      v-else
    >
      <h1>loading ...</h1>
    
    </div>
  </div>

    
  
</template>


<script>

import axios from "axios";
import DiskComponent from "@/components/DiskComponent.vue";
import state from "@/state.js";

export default {
  name: "DisksList",
  computed: {
    filtered(){
    // Verifichiamo se state.searchText non é vuoto e se si filtriamo l'array facendone una copia con filter e restituendola
      if(state.searchText) {
        // applicando filter all'array stiamo generando una nuova array
        return this.list.filter(item => {
            // ora usiamo state.searchText per filtrare i dati
          return item.author.toLowerCase().includes(state.searchText.toLowerCase()
          )
        })
        
      } 
      /* Se lo state.searchText é vuoto restituiamo l'array originale */
      else {
        return this.list
      }
    }
  },  
  components: {
    DiskComponent,
  },
  data() {
    return {
      API_URL: "http://localhost/PHP/php-ajax-dischi/MILESTONE_1/db.php",
      item: null,
      loading: true,
      error:null,
      list: null
      
    };
  },
  methods: {
    callApi() {
      axios
        .get(this.API_URL)
        .then((response) => {
          this.list = response.data.response;
          this.loading = false;
        })
        .catch((error) => {
          console.error();
          error;
          this.error = `Sorry There is a problem! ${error}`;
        });
    },
    
  },
  mounted() {
    this.callApi();
  },
};
</script>





<style lang="scss" scoped>

@import '@/assets/scss/variables.scss';

.container-fluid{
    background-color: $main-bg ;
    height: calc(100vh - 60px);
    .container{
        padding-top: 2rem;
    }
}


</style>
