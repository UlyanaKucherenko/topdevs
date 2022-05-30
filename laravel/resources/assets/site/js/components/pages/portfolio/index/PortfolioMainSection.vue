<template>
  <section class="portfolio-main-section">
    <div class="portfolio-main-section__content container">
      <img 
        @click="openFilterColumn"
        src="/images/site/icons/filter.svg" alt="" 
        class="portfolio-main-section__filter-icon"
      >

      <FilterColumn 
        class="portfolio-main-section__filter-column"
        :mobileQuery="1200"
        :mobileBarIsVisible="$store.state.portfolio.mobileFilterColumnIsVisible"
        :rubrics="$store.state.portfolio.nextRubrics"
        @mobileBarClose="closeMobileBar"
        @filterChange="columnOnFilterChange"
        @filtersSubmit="columnOnFiltersSubmit"
      />
      
      <div 
        class="portfolio-main-section__cases-column"
        ref="cases"
      >
        <div 
          class="blog-main-section__articles-404"
          v-if="(!$store.state.portfolio.filteredCases.length)"
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
          <div class="portfolio-main-section__cases-grid">
            <PortfolioCase
              class="portfolio-main-section__cases-item"
              v-for="(item, index) in $store.getters['portfolio/formattedFilteredCases']"
              :key="item.id"
              :item="item"
              :reversed="!!(index % 2)"
            />

          </div>
          <Paginate
            v-if="$store.state.portfolio.pagination.lastPage != 1"
            :value="+pagination.currentPage"
            @input="paginateOnPageChange"
            :pageCount="pagination.lastPage"
            :containerClass="'portfolio-main-section__cases-pagination pagination text-lg'"
          />
        </template>
      </div>
    </div>
  </section>
</template>

<script>
import gsap from 'gsap'
import Paginate from 'vuejs-paginate'

import PortfolioCase from '@/js/components/pages/portfolio/index/PortfolioCase'
import FilterColumn from '@/js/components/global/FilterColumn'

export default {
  components: {PortfolioCase, FilterColumn, Paginate},

  computed: {
    pagination() {
      return this.$store.state.portfolio.pagination
    },

    columnIsVisible() {
      return this.$store.state.portfolio.mobileFilterColumnIsVisible
    }
  },


  methods: {
    openFilterColumn() {
      this.$store.commit('portfolio/SET_STATE', {mobileFilterColumnIsVisible: true})
    },
    
    closeMobileBar() {
      this.$store.commit('portfolio/SET_STATE', {mobileFilterColumnIsVisible: false}) 
    },

    columnOnFilterChange(payload) {
      this.$store.commit('portfolio/SET_RUBRIC_FILTER', payload)
    },

    columnOnFiltersSubmit() {
      this.$store.dispatch('portfolio/submitFilters')
      if (this.columnIsVisible) this.$store.commit('portfolio/SET_STATE', {mobileFilterColumnIsVisible: false}) 
      this.getCases()
    },

    async paginateOnPageChange(num) {
      this.$store.commit('portfolio/SET_STATE', {
        pagination: {
          ...this.$store.state.portfolio.pagination,
          currentPage: num
        }
      })

      await this.getCases()
    },

    
    async getCases() {
      await gsap.to(this.$refs.cases, {autoAlpha: 0, duration: .5, ease: 'power3.inOut'})
      this.scrollTo(this.$refs.cases, {y: -130})
      await this.$store.dispatch('portfolio/getCases')
      gsap.to(this.$refs.cases, {autoAlpha: 1, duration: .5, ease: 'power3.inOut'})
    },
  }
}
</script>

<style lang="scss">
  .portfolio-main-section {
    &__content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;

      @media (max-width: 1199px) {
        flex-direction: column;
      }
    }

    &__filter-column {
      // width: 26rem;
      flex-shrink: 0;
      margin-right: 9rem;
    }

    &__filter-icon {
      display: none;
      margin-bottom: 2.5rem;
      cursor: pointer;

      @media (max-width: 1199px) {
        display: block;
        margin-bottom: 25px;
      }
    }

    &__cases {
      &-item {
        margin-bottom: calc(var(--space-unit) * 7.5);
        padding: calc(var(--space-unit) * 5) calc(var(--space-unit) * 4);
        box-shadow: -5px -5px 12px rgba(255, 255, 255, 0.25), 0px 5px 12px #DDDDDD;

        &:last-child {
          margin-bottom: 0;
        }
      }

      &-pagination {
        width: fit-content;
        margin: calc(var(--space-unit) * 10) auto 0;
      }
    }
  }
</style>