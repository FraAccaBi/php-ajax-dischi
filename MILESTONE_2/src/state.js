import Vue from 'vue'
// crea un oggetto usando .observable
const state = Vue.observable({
    searchText: '',
    selected: '',
    genre: '',
})
// esporta lo state
export default state