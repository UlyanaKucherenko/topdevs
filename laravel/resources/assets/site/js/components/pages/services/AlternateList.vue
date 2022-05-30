<template>
  <div class="alternate-list">
    <img 
      v-if="bgImgURL"
      class="alternate-list__bg-img" :src="bgImgURL"
      v-cursor-follow="{multiplier: .3}"
    >

    <div 
      :class="{
        'alternate-list__row': true,
        'alternate-list__row--img--left': block.imgSide == 'left'
      }"
      v-for="(block, index) in items" 
      :key="index"
      v-scroll-reveal
    >
      <div class="alternate-list__text-blocks">
        <div 
          class="alternate-list__text-block"
          v-for="(textBlock, index) in block.textBlocks" 
          :key="index"
        >
          <h3 
            :class="{
              'alternate-list__title': true,
              'text-with-dot text-with-dot--blue': listType == 'dot',
              'text-with-dot--has-width': listType == 'dot' && windowWidth < 769,
              'text-with-checkmark': listType == 'checkmark',
              'text-with-checkmark--has-width': listType == 'checkmark' && windowWidth < 769
            }"
            :style="{'--color': dotColor}"
          > 
            {{ textBlock.title }} 
          </h3>
          <p class="alternate-list__desc"> {{ textBlock.desc }} </p>
        </div>
      </div>

      <div class="alternate-list__img-block">
        <div :class="{
            'alternate-list__img-block-inner': true,
            'alternate-list__img-block-inner--form--rounded': imgType == 'rounded',
          }"
        >
          <img class="alternate-list__img" :src="block.imgURL">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    items: Array,
    imgType: {
      type: String,
    },
    listType: {
      type: String,
      default: 'dot'
    },
    bgImgURL: String,
    dotColor: {
      type: String,
      default: 'var(--blue-main)'
    }
  },
}
</script>

<style lang="scss">
  .alternate-list {
    position: relative;

    &__bg-img {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;

      @media (max-width: 767px) {
        display: none;
      }
    }
    
    &__row {
      display: flex;
      justify-content: space-between;
      margin-bottom: calc(var(--space-unit) * 8);
      align-items: center;
      position: relative;

      @media (max-width: 767px) {
        flex-direction: column;
      }

      &:last-child {
        margin-bottom: 0;
      }

      &--img {
        &--left {
          flex-direction: row-reverse;

          @media (max-width: 767px) {
            flex-direction: column;
          }
        }
      }
    }

    &__text-blocks {
      width: 45.45%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    
      @media (max-width: 767px) {
        width: 90%;
        margin-bottom: calc(var(--space-unit) * 5);
      }

      @media (max-width: 575px) {
        width: 100%;
      }
    }

    &__text-block {
      margin: 0 auto;
      margin-bottom: calc(var(--space-unit) * 6.4);
      color: var(--black-main);
      width: 90%;

      @media (max-width: 767px) {
        // text-align: center;
      }

      @media (max-width: 575px) {
        width: 100%;
      }

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__title {
      font-weight: 600;
      margin-bottom: calc(var(--space-unit) * 3.2);
      letter-spacing: 0.01em;
      line-height: 100%;

      @media (max-width: 767px) {
        display: inline-block;
      }
    }

    &__desc {
      line-height: 160%;
      line-height: 160%;
      letter-spacing: 0.03em;
    }

    &__img-block {
      width: 45.45%;

      @media (max-width: 767px) {
        width: 70%;
      }

      @media (max-width: 575px) {
        width: 100%;
      }
    }

    &__img-block-inner {
      margin: 0 auto;
      position: relative;
      box-shadow: 0.5rem 0.5rem 1.5rem rgba(108, 108, 108, 0.2), -0.5rem -0.5rem 1.5rem #FFFFFF;

      &--form {
        &--rounded {
          width: 80%;
          border-radius: 50%;
          background: linear-gradient(112.42deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);

          &:after {
            content: '';
            display: block;
            padding-top: 100%;
          }

          .alternate-list__img {
            position: absolute;
            width: 80%;
            height: 80%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            object-fit: cover;
          }
        }
      }
    }

    &__img {
      width: 100%;
    }
  }
</style>