<template>
  <div>
    <input type="text" v-model="searchParam" @change="prepareParam"/>
  </div>
</template>
<script>
import {HTTP} from '../http';
export default {
  data: () => ({
    message: 'This is search Bar',
    searchParam: '',
    posts: [],
    errors: []
  }),
  methods: {
    prepareParam: function() {
      HTTP.get(`posts?search="${this.searchParam}"`)
      .then(response =>{
        this.posts = response.data;
        this.$emit('changedParam', this.posts)
      })
      .catch(e => {
        this.errors.push(e);
        this.$emit('changedParam', this.errors)
      })
    }
  }
}
</script>
