<template>
  <div class="meld-header">
    <h2 
      class="meld-header__title portfolio-text-h2"
      :class="{'meld-header__title--no-margin': !descText}"
      :style="{color: titleColor}"
    >
      {{ titleText }}

      <img 
        class="meld-header__img"
        :class="{'meld-header__img--right': titleImgSide === 'right'}"
        :src="titleImg" alt=""
      >
    </h2>
    <div class="meld-header__desc portfolio-desc">
      {{ descText }}
    </div>
  </div >
</template>

<script>
export default {
  props: {
    titleText: String,
    titleColor: String,
    titleImg: String,
    titleImgSide: String,
    descText: String,
  },
}
</script>

<style lang="scss">
  .meld-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;

    &__title {
      position: relative;
      text-transform: uppercase;
      font-weight: 800;
      margin-bottom: 4rem;

      @media (max-width: 1199px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 2.5rem;
      }

      @media (max-width: 400px) {
        width: 100%;
      }

      &--no-margin {
        margin-bottom: 0;
      }
    }

    &__img {
      --horizontal-offset: calc(100% + 3.5vw);

      position: absolute;
      right: var(--horizontal-offset);
      bottom: .19em;
      width: 7rem;

      @media (max-width: 1199px) {
        width: 6rem;
      }

      @media (max-width: 575px) {
        display: none;
      }

      &--right {
        right: auto;
        left: var(--horizontal-offset);
      }
    }

    &__desc {
      max-width: var(--desc-max-width, 90rem);
    }
  }
</style>