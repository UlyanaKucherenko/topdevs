<template>
  <div class="img-preloader">
    <img
      ref="img"
      class="img-preloader__loaded-img"
      v-if="isLoaded"
      :src="src" alt="" 
    >
  </div>
</template>

<script>
export default {
  props: {
    src: String,
  },


  data() {
    return {
      isLoaded: false,
    }
  },

  
  created() {
    this.isLoaded = true
  },
}
</script>

<style lang="scss">
  .img-preloader {
    &__loaded-img {
    }
  }
</style>