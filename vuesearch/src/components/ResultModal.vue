<template>
  <div id="result-modal">
    <h1 v-html="resultData.title.rendered"></h1>
    <div id="featured-image" v-if="resultData.thumbnail_data">
      <img :src="resultData.thumbnail_data.full" />
    </div>
    <p v-html="resultData.content.rendered"></p>
  </div>
</template>
<script>
  export default {
    data: () => ({
    }),
    props:[
      'resultData'
    ],
  }
</script>
