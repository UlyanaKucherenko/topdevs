<template>
  <div 
    class="portfolio-header"
    :class="{
      'portfolio-header--column': headerIsColumn,
      'portfolio-header--column-centered': __props.isCentered && headerIsColumn
    }"
    :style="{maxWidth: headerMaxWidth}"
  >
    <div class="portfolio-header__content">
      <h2 
        :class="processedTitleClass"
        :style="{color: titleTextColor, ...titleStyles}"
      >
        {{ titleText }}

        <div 
          class="portfolio-header__title-bg"
          :style="{backgroundColor: titleBgColor}"
        />

        <img 
          v-if="titleImg"
          class="portfolio-header__title-img-base"
          :src="titleImg" alt="" 
        >

        <slot name="titleImg"/>
      </h2>

      <PortfolioAside
        v-if="asideIsVisible"
        :class="`portfolio-header__aside ${asideClass}`"
        :style="{maxWidth: typeof __props.maxWidth === 'number' ? __props.maxWidth + 'px' : __props.maxWidth}"
        :descColor="asideDescColor"
        :dividerColor="asideDividerColor"
        :descText="descText"
        :descSmall="asideDescSmall"
        :descStyles="asideStyles"
      />
    </div>
  </div>
</template>

<script>
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'

export default {
  components: {PortfolioAside},

  props: {
    titleText: String,
    titleTextColor: String,
    titleBgColor: String,
    titleUppercase: Boolean,
    titleStyles: Object,
    titleClass: String,
    titleImg: String,
    descText: [String, Array],
    asideStyles: Object,
    asideClass: String,
    asideDescColor: String,
    asideDividerColor: String,
    asideDescSmall: Boolean,
    asideVisibilityBreakpoint: Number,
    dividerFilled: Boolean,
    isCentered: Boolean,
    maxWidth: [Number, String],
    headerColumnBreakpoint: {
      type: [Number, Boolean],
      default: null
    },
    headerMaxWidth: String,
    breakpoints: Object
  },

  
  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    },

    asideIsVisible() {
      if (this.asideVisibilityBreakpoint) return this.windowWidth > this.asideVisibilityBreakpoint
      else return !!this.descText
    },

    headerIsColumn() {
      if (typeof this.headerColumnBreakpoint === 'boolean') return this.headerColumnBreakpoint
      else return this.windowWidth <= (this.headerColumnBreakpoint || 1000)
    },
    
    processedTitleClass() {
      const styleObj = {
        'portfolio-header__title portfolio-text-h2': true,
        'portfolio-header__title--no-padding': !this.titleBgColor,
        'portfolio-header__title--with-margin': this.asideIsVisible,
        'uppercase': this.titleUppercase,
        [this.titleClass]: true
      }

      return styleObj
    },
  },
}
</script>

<style lang="scss">
  :root {
    --portfolio-header__title-margin: calc(var(--space-unit) * 7.4);
  }

  .portfolio-header {
    position: relative;

    &--column {
      .portfolio-header {
        &__aside {
          width: 100%;
        }

        &__content {
          flex-direction: column;
        }

        &__title {
          &--with-margin {
            margin-bottom: var(--portfolio-header__title-margin);
          }
        }
      }

      &-centered {
        text-align: center;

        .portfolio-header__content {
          align-items: center;
        }
      }
    }

    &__aside {
      width: 50%;
    }

    &__content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    &__title {
      position: relative;
      padding: calc(var(--space-unit) * 4) 0;
      font-weight: 600;
      z-index: 0;

      &--with-margin {
      }

      &--no-padding {
        padding: 0;
      }

      &-bg {
        position: absolute;
        left: -100%;
        top: 0;
        height: 100%;
        width: calc(100% + 3em);
        z-index: -1;
      }

      &-img-base {
        position: absolute;
        left: -2.5em;
        top: 50%;
        transform: translateY(-50%);

        @media (max-width: 1750px) {
          display: none;
        }
      }
    }
  }
</style>