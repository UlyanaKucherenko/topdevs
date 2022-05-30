<template>
  <div class="solutions-section-row">
      <div class="solutions-section-row__inner">
        <SolutionsSectionItem 
          class="solutions-section-row__left-item"
          v-bind="leftItem"
        />

        <SolutionsSectionItem 
          class="solutions-section-row__right-item"
          v-bind="rightItem"
        />
      </div>      
  </div>
</template>

<script>
import SolutionsSectionItem from './SolutionsSectionItem'

export default {
  components: {SolutionsSectionItem},

  props: {
    leftItem: Object,
    rightItem: Object
  },

  mounted() {
  },
}
</script>

<style lang="scss">
  .solocator .solutions-section-row {
    
    &__inner {
      position: relative;
    }

    &__left-item {
      width: 60%;

      @media (max-width: 1450px) {
        width: 100%;
      }

      @media (max-width: 550px) {
        margin-bottom: 3.5rem;
      }
    }

    &__right-item {
      width: 60%;
      position: absolute;
      left: 37%;
      top: 50%;
      height: 100%;

      @media (max-width: 1450px) {
        width: calc(100% - 32rem);
        left: 32rem;
        top: 35%;
      }

      @media (max-width: 991px) {
        width: calc(100% - 25rem);
        left: 25rem;
        top: 48%;
      }

      @media (max-width: 880px) {
        position: relative;
        transform: none;
        width: 100%;
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
      }
    }
  }
</style>