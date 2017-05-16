<template>
  <div id="search-results">
    <ul>
      <li v-for="post in searchResults">
        <a @click="prepareModal(post.id)" v-html="post.title.rendered"></a>
      </li>
    </ul>
    <result-modal v-if="showModal" :resultData="resultData"></result-modal>
  </div>
</template>
<script>
  import ResultModal from './ResultModal.vue';
  import {HTTP} from '../http';
  export default {
    data: () => ({
      showModal: false,
      resultData: [],
      errors: []
    }),
    components: {
      'result-modal': ResultModal
    },
    props:[
      'searchResults'
    ],
    methods: {
      prepareModal: function(postId){
        HTTP.get(`posts/${postId}`)
        .then(response =>{
          this.resultData = response.data;
        })
        .catch(e => {
          this.errors.push(e);
        })
        this.showModal = false;
        this.showModal = true;
      }
    }
  }
</script>
