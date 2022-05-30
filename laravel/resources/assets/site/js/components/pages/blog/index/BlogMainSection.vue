<template>
  <section class="blog-main-section">
    <div
      class="blog-main-section__content container"
      id="main-section"
      v-scroll-reveal
    >
      <img
        @click="openFilterColumn"
        src="/images/site/icons/filter.svg" alt=""
        class="blog-main-section__filter-icon"
      >

      <FilterColumn
        class="blog-main-section__filter-column"
        :mobileQuery="992"
        :mobileBarIsVisible="$store.state.blog.mobileFilterColumnIsVisible"
        :rubrics="$store.state.blog.nextRubrics"
        :tags="$store.state.blog.nextTags"
        @mobileBarClose="closeMobileBar"
        @tagChange="columnOnTagChange"
        @filterChange="columnOnFilterChange"
        @filtersSubmit="columnOnFiltersSubmit"
      />

      <div
        class="blog-main-section__articles-column"
        ref="articles"
      >
        <div
          class="blog-main-section__articles-404"
          v-if="(!$store.state.blog.filteredPosts.length && $store.state.blog.initFetchIsDone)"
        >
          <img
            class="blog-main-section__articles-404-img"
            src="/images/site/blog/filter.svg" alt=""
          >
          <div class="blog-main-section__articles-404-text text-lg">
            The search returned no results on the requested criteria.
            Please try to change the requests for search
          </div>
        </div>

        <template v-else>
          <div class="blog-main-section__articles-grid">
            <BlogItemOutside
              v-for="(item, index) in $store.getters['blog/formattedFilteredPosts']"
              :key="item.id"
              :item="item"
            />
          </div>

          <Paginate
            v-if="$store.state.blog.pagination.lastPage != 1"
            :value="pagination.currentPage"
            @input="paginateOnPageChange"
            :pageCount="pagination.lastPage"
            :containerClass="'blog-main-section__articles-pagination pagination text-lg'"
          />
        </template>
      </div>
    </div>
  </section>
</template>

<script>
import gsap from 'gsap'

import Paginate from 'vuejs-paginate'
import BlogItemOutside from '@/js/components/pages/blog/index/BlogItemOutside'
import FilterColumn from '@/js/components/global/FilterColumn'

export default {
  components: {BlogItemOutside, FilterColumn, Paginate},

  data() {
    return {
      gridHeight: 0,
      resizeHandlerTimeout: null,
    }
  },


  computed: {
    pagination() {
      return this.$store.state.blog.pagination
    },

    columnIsVisible() {
      return this.$store.state.blog.mobileFilterColumnIsVisible
    }
  },


  async mounted() {
    window.addEventListener('resize', this.resizeHandler)
    this.postsInitialFetch()
  },


  methods: {
    openFilterColumn() {
      this.$store.commit('blog/SET_STATE', {mobileFilterColumnIsVisible: true})
    },

    closeMobileBar() {
      this.$store.commit('blog/SET_STATE', {mobileFilterColumnIsVisible: false})
    },

    columnOnTagChange(payload) {
      this.$store.commit('blog/SET_TAG', payload)
    },

    columnOnFilterChange(payload) {
      this.$store.commit('blog/SET_RUBRIC_FILTER', payload)
    },

    columnOnFiltersSubmit() {
      this.$store.dispatch('blog/submitFilters')
      if (this.columnIsVisible) this.$store.commit('blog/SET_STATE', {mobileFilterColumnIsVisible: false})
      this.getPosts()
    },

    async paginateOnPageChange(num) {
      this.$store.commit('blog/SET_STATE', {
        pagination: {
          ...this.$store.state.blog.pagination,
          currentPage: num
        }
      })

      await this.getPosts()
    },

    async getPosts() {
      await gsap.to(this.$refs.articles, {autoAlpha: 0, duration: .5, ease: 'power3.inOut'})
      this.scrollTo(this.$refs.articles, {y: -130})
      await this.$store.dispatch('blog/getPosts')
      gsap.to(this.$refs.articles, {autoAlpha: 1, duration: .5, ease: 'power3.inOut'})
      gsap.set(this.$refs.articles, {height: 'auto'})
      await gsap.from(this.$refs.articles, {height: this.gridHeight, duration: .5})
      this.gridHeight = this.$refs.articles.style.height
    },

    async postsInitialFetch() {
      await this.$store.dispatch('blog/getPosts')
      this.$store.commit('blog/SET_STATE', {initFetchIsDone: true})
      this.gridHeight = this.$refs.articles.getBoundingClientRect().height
    },

    resizeHandler() {
      clearTimeout(this.resizeHandlerTimeout)
      this.resizeHandlerTimeout = setTimeout(() => {
        gsap.set(this.$refs.articles, {height: 'auto'})
        this.gridHeight = this.$refs.articles.getBoundingClientRect().height
      }, 1000)
    }
  },
}
</script>

<style lang="scss">
  .blog-main-section {
    &__content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;

      @media (max-width: 991px) {
        flex-direction: column;
      }
    }

    &__filter-icon {
      display: none;
      margin-bottom: 2.5rem;
      cursor: pointer;

      @media (max-width: 991px) {
        display: block;
        margin-bottom: 25px;
      }
    }

    &__articles-column {
      position: relative;
      width: calc(100% - 30rem);

      @media (max-width: 991px) {
        width: 100%;
      }
    }

    &__articles-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-column-gap: calc(var(--space-unit) * 4);
      grid-template-rows: repeat(2, max-content);
      grid-row-gap: calc(var(--space-unit) * 4);

      @media (max-width: 650px) {
        grid-template-columns: 100%;
      }
    }

    &__articles-404 {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-right: 9rem;
      margin-top: calc(var(--space-unit) * 3);

      &-img {
        margin-right: 3rem;
      }

      &-text {
        font-family: var(--Muli);
        font-weight: 600;
      }
    }

    &__articles-pagination {
      width: fit-content;
      margin: calc(var(--space-unit) * 10) auto 0;
    }
  }
</style>
