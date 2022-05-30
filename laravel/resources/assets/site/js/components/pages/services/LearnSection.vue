<template>
  <section class="learn-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        icon="/images/site/icons/abstract/header-6.svg"
      >
      </SectionHeader>

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

import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

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
.learn-section {
  padding: var(--section-pd-y-big) 0 var(--section-pd-y-small) 0;

  .section-header {
    margin-bottom: calc(var(--space-unit) * 5);
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
