<template>
  <section class="blog-hero-section z-default-rel">
    <div class="container">
      <h1 class="blog-hero-section__title" v-scroll-reveal>Blog About Tech, Trends & Tips</h1>
      <p class="blog-hero-section__desc text-md" v-scroll-reveal>A gathering of articles for startups and enterprises to easily navigate in the jungle of innovative technologies and modern trends.</p>
      <div class="blog-hero-section__grid" v-scroll-reveal>
        <BlogItemInside
          :class="{'blog-hero-section__grid-item--big': index == 2}"
          v-for="(item, index) in $store.getters['blog/formattedLatestPosts']" :key="index"
          :item="item"
        />
      </div>
    </div>
  </section>
</template>

<script>
import BlogItemInside from '@/js/components/pages/blog/index/BlogItemInside'

export default {
  components: {BlogItemInside},

  data() {
    return {
    }
  },
}
</script>

<style lang="scss">
  .blog-hero-section {
    padding-bottom: calc(var(--space-unit) * 7);

    @media (max-width: 991px) {
      padding-bottom: 2.5rem;
    }

    &__title {
      text-transform: uppercase;
      margin: 0 auto;
      margin-bottom: calc(var(--space-unit) * 3);
      text-align: center;
      color: var(--black-dark);
      font-weight: 800;
    }

    &__desc {
      max-width: 85rem;
      text-align: center;
      margin: 0 auto;
      margin-bottom: calc(var(--space-unit) * 5);
    }

    &__grid {
      display: grid;
      grid-template-columns: calc(30rem + calc(100% - 30rem) / 2.1) 4fr;
      grid-column-gap: calc(var(--space-unit) * 4);
      grid-template-rows: repeat(2, 1fr);
      grid-row-gap: calc(var(--space-unit) * 4);

      @media (max-width: 991px) {
        grid-template-columns: repeat(2, 2fr);
      }

      @media (max-width: 650px) {
        grid-template-columns: 100%;
        grid-template-rows: repeat(3, 1fr);
      }

      &-item {
        &--big {
          grid-row: 1 / 3;

          @media (max-width: 650px) {
            grid-row: auto;
          }
        }
      }
    }
  }
</style>
