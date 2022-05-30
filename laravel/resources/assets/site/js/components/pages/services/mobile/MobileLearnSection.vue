<template>
  <section class="mobile-learn-section">
    <div class="container">

      <ServicesSectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        mode="left"
        class="mobile-learn-section__header"
      />


      <ItemsList
        :items="randomPosts"
        :columns="{
          992: 2,
          576: 1,
          default: 3
        }"
        cardType="learn"
      />
    </div>
    <slot/>
  </section>
</template>

<script>
import api from '@/js/api'

import ItemsList from '@/js/components/global/ItemsList'
import ServicesSectionHeader from "./global/ServicesSectionHeader";

export default {
  name: 'MobileLearnSection',
  components: {ServicesSectionHeader, ItemsList},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    industry: String
  },


  data() {
    return {
      randomPosts: []
    }
  },


  async created() {
    let posts
    if (this.industry) posts = await api.posts.getPostsByIndustry(this.industry)
    else posts = await api.posts.getLatestPosts()

    this.randomPosts = posts.data.data.map(post => {
      const dirtyDesc = post.short_description
      const preparedDesc = dirtyDesc.length > 120 ? dirtyDesc.slice(0, 120) + '...' : dirtyDesc

      return {
        imgURL: post.picture.thumbnail,
        title: post.title,
        desc: preparedDesc,
        date: this.$options.filters.formatDate(post.created_at),
        href: `/blog/${post.slug}`
      }
    })
  },
}
</script>

<style lang="scss">
.mobile-learn-section {
  padding: var(--section-pd-y-big) 0 var(--section-pd-y-small) 0;

  &__header {
    margin: 0 auto calc(var(--space-unit) * 5);
    width: 80%;
    @media (max-width: 700px) {
      width: 100%;
    }
  }

  .items-list {
    &__item {
      width: 25.7%;

      @media (max-width: 1300px) {
        width: 28%;
      }

      @media (max-width: 991px) {
        width: 40%;
      }

      @media (max-width: 700px) {
        width: 45%;
      }

      @media (max-width: 575px) {
        width: 90%;
      }
    }

    &__row {
      justify-content: space-evenly;
    }
  }
}
</style>
