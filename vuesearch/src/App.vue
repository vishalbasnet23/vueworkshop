<template>
  <div id="app">
    <search-bar></search-bar>
    <search-results></search-results>
  </div>
</template>

<script>
import SearchBar from './components/SearchBar.vue';
import SearchResults from './components/SearchResults.vue';
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  components: {
    'search-bar' : SearchBar,
    'search-results': SearchResults
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
