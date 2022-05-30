<template>
  <main class="blog">
    <BlogHeroSection/>
    <BlogMainSection/>
  </main>
</template>

<script>
import api from '@/js/api/index'
import BlogHeroSection from '@/js/components/pages/blog/index/BlogHeroSection'
import BlogMainSection from '@/js/components/pages/blog/index/BlogMainSection'

export default {
  components: {BlogHeroSection, BlogMainSection},
  props: ['latestPosts', 'tags', 'categories'],

  data() {
    return {}
  },

  async created() {
    this.$store.commit('blog/SET_STATE', {
      latestPosts: this.latestPosts
    })
    this.$store.commit('blog/SET_RUBRICS', this.categories)
    this.$store.commit('blog/SET_TAGS', this.tags[0])
    this.$store.commit('blog/PARSE_URL')
  },
}
</script>

<style lang="scss">
.blog {
  z-index: unset;
  padding-top: calc(var(--header-height) * 1.5);
  padding-bottom: var(--section-pd-y-small);
}

// TODO -> position sticky
</style>
