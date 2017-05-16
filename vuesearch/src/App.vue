<template>
  <div id="app">
    <search-bar @changedParam="getSearchParam"></search-bar>
    <search-results :searchResults="searchResults" v-if="searchResults"></search-results>
  </div>
</template>

<script>
import SearchBar from './components/SearchBar.vue';
import SearchResults from './components/SearchResults.vue'
export default {
  name: 'app',
  data () {
    return {
      searchResults: false
    }
  },
  components: {
    'search-bar' : SearchBar,
    'search-results': SearchResults
  },
  methods: {
    getSearchParam: function(event){
      this.searchResults = event;
    }
  }
}
</script>
<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
