<template>
  <div
    :class="blockClassName"
    :style="{
      '--title-color': titleColor,
      '--list-pre-color': listPreColor || titleColor,
      '--list-item-color': listItemColor,
      '--background': cardBgColor
    }"
  >
    <div class="portfolio-bullet-block__inner">
      <h3 class="portfolio-bullet-block__title portfolio-title">
        {{ titleText }}

        <img
          v-if="titlePreIcon"
          class="portfolio-bullet-block__title-pre"
          :src="titlePreIcon"
        >
      </h3>

      <div
        class="portfolio-bullet-block__item portfolio-desc portfolio-desc--sm"
        :class="{'portfolio-bullet-block__item--no-padding': preIconIsDisabled}"
        v-for="(item, index) in items" :key="index"
        :style="{color: listItemColor}"
      >
        {{ item.preIcon ? item.text : item }}
        <div
          v-if="!preIconIsDisabled"
          class="portfolio-bullet-block__item-pre"
          :class="{...bulletItemPreStyles(item)}"
        >
          {{ item.preIcon ? item.preIcon : '' }}
        </div>
      </div>
    </div>

    <img
      v-if="cardBgImage"
      class="portfolio-bullet-block__bg"
      :src="cardBgImage" alt=""
    >
  </div>
</template>

<script>
export default {
  props: {
    titleColor: String,
    titleText: String,
    titlePreIcon: String,
    listPreIcon: {type: String},
    listPreType: String,
    listPrePos: String,
    listPreColor: String,
    listItemColor: String,
    items: {type: Array, default: () => []},
    caseName: String,
    cardBgColor: String,
    cardBgImage: String,
    preIconIsDisabled: Boolean
  },


  computed: {
    blockClassName() {
      let classes = ['portfolio-bullet-block']

      if (this.caseName) classes.push(`portfolio-bullet-block--case--${this.caseName}`)
      if (this.titlePreIcon) classes.push('portfolio-bullet-block--visible')

      return classes
    }
  },


  methods: {
    bulletItemPreStyles(item) {
      if (item.preIcon) return {'portfolio-bullet-block__item-pre--type--custom': true}
      else return {
        'portfolio-bullet-block__item-pre--type--circle': this.listPreType == 'circle',
        'portfolio-bullet-block__item-pre--pos--bottom': this.listPrePos == 'bottom',
        'portfolio-bullet-block__item-pre--pos--top': this.listPrePos == 'top'
      }
    }
  },
}
</script>

<style lang="scss">
  .portfolio-bullet-block {
    --title-color: black;
    --list-item-color: black;
    --padding-left: 1.5rem;

    position: relative;
    overflow: hidden;
    z-index: 0;
    padding: var(--padding);
    border-radius: var(--border-radius);
    background: var(--background);

    &--visible {
      overflow: visible;
    }

    &--case {
      &--qliq {
        --padding: 4.5rem;
        --border-radius: 3.3rem;
        --background: #EDF6FF;

        @media (max-width: 1250px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--real {
        --padding: 4.5rem;
        background: var(--background);

        @media (max-width: 1350px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--calibre {
        --padding: 4.5rem;
        --border-radius: 15px;
        --background: #FFF3EA;

        @media (max-width: 1350px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--meld {
        --padding: 4.5rem;
        --background: transparent;
        border: 2px solid #DDDDDD;

        @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--pet {
        --padding: 4.5rem;

        @media (max-width: 1350px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--gera {
        --padding: 4.5rem;
        --border-radius: 1.9rem;

         @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--gog {
        --padding: 4.5rem;
        --border-radius: 1.5rem;

        @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--artv {
        --padding: 4.5rem;

        @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--bark {
        --padding: 4.5rem;
        --border-radius: 2rem;

        @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--helpy {
        --padding: 4.5rem;
        --border-radius: 1rem;
        box-shadow: -12px -12px 25px rgba(255, 255, 255, 0.7), 12px 12px 25px rgba(0, 0, 0, 0.05);

        @media (max-width: 1400px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--solocator {
        --padding: 4.5rem;
        border: 2px solid #E2E2E2;

        @media (max-width: 1250px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--beauty {
        --padding: 4.5rem;
        box-shadow: 4px 4px 35px rgba(0, 0, 0, 0.06);
        background: white;

        @media (max-width: 1250px) {
          --padding: 4rem;
        }

        @media (max-width: 991px) {
          --padding: 3.5rem;
        }

        @media (max-width: 767px) {
          --padding: 3rem;
        }
      }

      &--event {
        --padding: 2rem 3rem;
        border-radius: 15px;
        box-shadow: -6px 12px 40px rgba(34, 32, 32, 0.2);;
      }

      &--easy {
        --padding: 2rem 3rem;
        border-radius: 15px;
        box-shadow: -6px 12px 40px rgba(34, 32, 32, 0.2);;
      }

      &--dancebug {
        --padding: 2rem 3rem;
        border-radius: 14px;
        box-shadow: -6px 12px 40px rgba(34, 32, 32, 0.2);;
      }

      &--golf {
        --padding: 2rem 0;
        display: flex;
      }
    }

    &__title {
      color: var(--title-color);
      position: relative;
      z-index: 0;
      margin-bottom: 1.5rem;

      @media (max-width: 1199px) {
        margin-bottom: 1rem;
      }

      &-pre {
        position: absolute;
        top: 50%;
        left: 0;
        width: 2.8em;
        height: 2.8em;
        transform: translate(-35%, -58%);
        z-index: -1;
      }
    }

    &__item {
      position: relative;
      display: flex;
      padding-left: var(--padding-left);
      line-height: 160%;
      margin-bottom: .3rem;
      letter-spacing: 0.03em;

      &--no-padding {
        padding-left: 0;
      }

      &-pre {
        position: absolute;
        left: 0;
        top: .78em;
        transform: translateY(-50%);
        width: .5rem;
        height: .5rem;
        background-color: var(--list-pre-color);
        color: var(--list-item-color);

        &--type {
          &--custom {
            width: auto;
            height: auto;
            background: none;
            color: var(--list-pre-color);
            font-weight: 700;
            top: 50%;
          }

          &--circle {
            border-radius: 50%;
          }
        }

        &--pos {
          &--top {
            top: 0;
            transform: translateY(0);
          }

          &--bottom {
            bottom: 0;
            transform: translateY(0);
          }
        }
      }

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__bg {
      position: absolute;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  }
</style>
