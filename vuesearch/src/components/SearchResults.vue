<template>
  <div id="search-results">
    <ul>
      <li v-for="post in searchResults">
        <a @click="prepareModal" v-html="post.title.rendered"></a>
      </li>
    </ul>
    <result-modal v-if="showModal"></result-modal>
  </div>
</template>
<script>
  import ResultModal from './ResultModal.vue';
  export default {
    data: () => ({
      showModal: false
    }),
    components: {
      'result-modal': ResultModal
    },
    props:[
      'searchResults'
    ],
    methods: {
      prepareModal: function(){
        this.showModal = true;
      }
    }
  }
</script>
