<template>
  <div 
    class="filter-column"
    :class="{
      'filter-column--opened': mobileBarIsVisible && windowWidth <= mobileQuery,
      'filter-column--mobile': windowWidth <= mobileQuery
    }"
  >
    <div 
      class="filter-column__mobile-header"
      v-if="windowWidth <= mobileQuery"
    >
      <img src="/images/site/logo-invert.svg" alt="" class="filter-column__mobile-header-logo">
      <img 
        src="/images/site/icons/cross.svg" alt="" 
        class="filter-column__mobile-header-close"
        @click="closeFilterColumn"
      >
    </div>

      <div class="filter-column__filters-list">  <!-- v-if="filtersAreLoaded" -->
        <BorderedDropdown
          v-for="(rubric, index) in rubrics" :key="index"
          :title="rubric.name"
          :items="rubric.filters"
          @filterChange="dropdownOnFilterChange({value: $event.value, filterSlug: $event.slug, rubricSlug: rubric.slug})"
        />
        <template v-if="tags.length">
          <div class="filter-column__tags-title text-md">tags</div>
          <div class="filter-column__tags-list">
            <div 
              class="filter-column__tags-item"
              :class="{'filter-column__tags-item--active': tag.checked}"
              v-for="(tag, index) in tags" :key="index"
              @click="tagOnChange({value: !tag.checked, slug: tag.slug})"
            >
              {{ tag.name }}
            </div>
          </div>
        </template>
      </div>
    <div 
      class="btn-default filter-column__btn"
      @click="$emit('filtersSubmit')"
    >
      submit
    </div>
  </div>
</template>

<script>
import BorderedDropdown from '@/js/components/global/dropdowns/BorderedDropdown'

export default {
  components: {BorderedDropdown},

  props: {
    mobileBarIsVisible: {
      type: Boolean,
      default: false
    },
    mobileQuery: Number,
    rubrics: {
      type: Array,
      default: () => []
    },
    tags: {
      type: Array,
      default: () => []
    }
  },


  watch: {
    windowWidth(next, prev) {
      if (prev < 1200 && next >= 1200) {
        this.closeFilterColumn()
      }
    }
  },


  methods: {
    closeFilterColumn() {
      this.$emit('mobileBarClose')
    },

    tagOnChange(tag) {
      this.$emit('tagChange', tag)
    },

    dropdownOnFilterChange(payload) {
      this.$emit('filterChange', payload)
    }
  },
}
</script>

<style lang="scss">
  .filter-column {
    width: 26rem;
    overflow: auto;

    &--opened {
      transform: translateX(100%);
    }

    &__filters-list {
      margin-bottom: 4rem;
    }

    &__lazy {
      &-chip {
        display: inline-block;
        height: 5rem;
        border-radius: 3rem;
        background-color: #e6e3e3;
        margin-right: 1rem;
        margin-bottom: 1rem;
      }
    }

    &__btn {
      margin-top: 4rem;
    }

    &__tags {
      &-title {
        text-transform: uppercase;
        padding: 2.5rem 0;
        border-bottom: 1px solid #DDDDDD;
        margin-bottom: 1rem;
      }

      &-list {
        display: flex;
        flex-wrap: wrap;
      }

      &-item {
        border: 1px solid var(--red-lighter);
        border-radius: 20px;
        padding: .8rem 2rem;
        margin-right: 1rem;
        margin-top: 1rem;
        cursor: pointer;
        line-height: 120%;
        transition: .3s;

        &:hover {
          background: #ce073714;
        }

        &--active {
          background: #ce07374a;

          &:hover {
            background: #ce073759;
          }
        }
      }
    }

    &--mobile {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 200;
      background: white;
      width: 100%;
      padding: 0 3rem 2rem;
      left: -100%;
      transition: transform 1s cubic-bezier(.33,.24,0,1);
      height: 100vh;
    }

    &__mobile-header {
      display: flex;
      justify-content: space-between;
      height: 7rem;

      &-close {
        cursor: pointer;
      }
    }
  }
</style>