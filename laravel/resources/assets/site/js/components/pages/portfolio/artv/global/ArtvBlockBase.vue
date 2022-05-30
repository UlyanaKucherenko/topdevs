<template>
  <div 
    class="artv-block-base"
    :style="{'--color': color}"
  >
    <div 
      class="artv-block-base__title-container"
      :class="{'flex align-center': $slots.title}"
      :style="{marginBottom: $slots.title ? '10px' : ''}"
    >
      <slot name="title"/>
      <div class="artv-block-base__title-inner">
        <div class="artv-block-base__title">{{ title }}</div>
        <div class="artv-block-base__divider"></div>
      </div>
    </div>
    <div 
      class="artv-block-base__desc"
      :class="{'artv-block-base__desc--size--sm': size == 'sm'}"
    >
      {{ desc }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    desc: String,
    color: String,
    size: String
  }
}
</script>

<style lang="scss">
  .artv-block-base {
    &__title {
      font-size: 3rem;
      color: var(--color);
      line-height: 135%;
      letter-spacing: 0.05em;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-transform: uppercase;

      @media (max-width: 1400px) {
        font-size: 2.7rem;
      }

      @media (max-width: 1199px) {
        font-size: 2.2rem;
      }

      @media (max-width: 991px) {
        font-size: 1.8rem;
        margin-bottom: 1rem;
      }

      @media (max-width: 575px) {
        margin-bottom: .8rem;
      }
    }

    &__divider {
      width: 2.5rem;
      height: .3rem;
      background: var(--color);
      margin-bottom: 2.5rem;

      @media (max-width: 1199px) {
        width: 2.3rem;
        height: .3rem;
        margin-bottom: 2rem;
      }

      @media (max-width: 991px) {
        width: 2rem;
        height: .2rem;
        margin-bottom: 1.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 1.3rem;
      }
    }

    &__desc {
      font-size: 2rem;
      color: var(--color);
      line-height: 160%;
      letter-spacing: .03em;

      @media (max-width: 1199px) {
        font-size: 1.6rem;
      }

      &--size {
        &--sm {
          font-size: 1.6rem;

          @media (max-width: 1199px) {
            font-size: 1.4rem;
          }
        }
      }
    }
  }
</style>