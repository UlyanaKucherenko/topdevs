<template>
   <div class="circle-card">
    <img
      v-if="numbered" 
      class="circle-card__number"
      :src="`/images/site/numbers/${index+1}.svg`" 
      alt="" 
    >
    <div class="circle-card__content">
      <img :src="imgURL" class="circle-card__content-icon">
      <h3 
        :class="{
          'circle-card__content-title': true,
          'text-red-light': !numbered,
          'text-black-dark': numbered
        }"
      >
        {{ title }}
      </h3>
      <p class="circle-card__content-desc">
        {{ desc }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    desc: String,
    index: Number,
    imgURL: String,
    numbered: {
      type: Boolean,
      default: true
    }
  },
}
</script>

<style lang="scss">
  .circle-card {
    --space-unit: .7rem;
    position: relative;
    background: linear-gradient(112.42deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
    box-shadow: 0.9rem 0.9rem 2.5rem rgba(124, 124, 124, 0.4), -1.5rem -1.5rem 4rem #FFFFFF, -1.5rem -1.5rem 4rem #FFFFFF;
    border-radius: 50%;

    &:after {
      content: '';
      display: block;
      padding-top: 100%;
    }

    &__number {
      position: absolute;
      left: 0;
      top: 50%;
      transform: translate(-50%, -50%);
      height: 8rem;
    }

    &__content {
      width: 70%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: absolute;
      left: 50%;
      top: calc(var(--space-unit) * 6);
      transform: translateX(-50%);
      text-align: center;
    }

    &__content-icon {
      margin-bottom: calc(var(--space-unit) * 4);
    }

    &__content-title {
      font-weight: 600;
      margin-bottom: calc(var(--space-unit) * 3);
    }

    &__content-desc {
      line-height: 160%;
    }
  }






</style>