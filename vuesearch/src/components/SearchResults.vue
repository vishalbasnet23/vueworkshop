<template>
  <div id="search-results">
    {{message}}
    <result-modal></result-modal>
  </div>
</template>
<script>
  import ResultModal from './ResultModal.vue';
  export default {
    data: () => ({
      message: 'This is search results'
    }),
    components: {
      'result-modal': ResultModal
    }
  }
</script>
