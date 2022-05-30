<template>
  <div 
    class="artv-solutions-item"
    :class="{'artv-solutions-item--squares-side-reverse': squaresSideReverse}"
    :style="{
      '--color-bg-main': colorReverse ? 'rgba(21, 20, 17, 0.08)' : null,
      '--color-bg-sub': colorReverse ? 'rgba(21, 20, 17, 0.04)' : null
    }"
  >
    <div 
      class="artv-solutions-item__number artv-solutions-item__square"
    >
      0{{ number }}

      <div 
        class="artv-solutions-item__bg-squares-list artv-solutions-item__square"
        :class="`artv-solutions-item__bg-squares-list--to-${squaresTurnTo}`"
      >
        <div class="artv-solutions-item__bg-squares-item artv-solutions-item__square"/>
        <div class="artv-solutions-item__bg-squares-item artv-solutions-item__square"/>
        <div class="artv-solutions-item__bg-squares-item artv-solutions-item__square"/>
      </div>
    </div>

    <ArtvBlockBase
      :title="title"
      :desc="desc"
      :color="colorReverse ? 'var(--case-color-primary)' : 'white'"
      size="sm"
    />
  </div>
</template>

<script>
import ArtvBlockBase from './global/ArtvBlockBase'

export default {
  components: {ArtvBlockBase},

  props: {
    title: String,
    desc: String,
    number: Number,
    colorReverse: Boolean,
    squaresSideReverse: Boolean,
    squaresTurnTo: {
      type: String,
      required: true,
      default: 'left'
    }
  }
}
</script>

<style lang="scss">
  .artv-solutions-item {
    --size: 18.6rem;
    --color-bg-main: rgba(255, 255, 255, 0.15);
    --color-bg-sub: rgba(255, 255, 255, 0.05);
    position: relative;
    display: flex;
    align-items: center;

    @media (max-width: 1400px) {
      align-items: flex-start;
    }

    &--squares-side-reverse {
      .artv-solutions-item__bg-squares-list {
        @media (min-width: 768px) {
          left: 275%;
        }

        @media (min-width: 1200px) {
          left: 300%;
        }
      }
    }

    @media (max-width: 767px) {
      align-items: center;
    }

    @media (max-width: 650px) {
      align-items: flex-start;
    }

    @media (max-width: 575px) {
      flex-direction: column;
    }

    &__square {
      --size: 18.6rem;
      width: var(--size);
      height: var(--size);

      @media (max-width: 1400px) {
        --size: 17rem;
      }

      @media (max-width: 1199px) {
        --size: 13.6rem;
      }

      @media (max-width: 991px) {
        --size: 12rem;
      }
    }

    &__number {
      position: relative;
      flex-shrink: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 5rem;
      font-weight: 800;
      font-size: 6rem;
      line-height: 160%;
      color: #FFFFFF;
      font-family: var(--Muli);
      background: var(--color-bg-main);
      z-index: -1;

      @media (max-width: 1400px) {
        margin-right: 4rem;
        font-size: 5rem;
      }

      @media (max-width: 1199px) {
        margin-right: 3rem;
        font-size: 4.5rem;
      }

      @media (max-width: 991px) {
        margin-right: 2rem;
        font-size: 3.5rem;
      }

      @media (max-width: 575px) {
        margin-right: 0;
        margin-bottom: 1.5rem;
      }
    }

    &__bg-squares-list {
      position: absolute;

      &--to-left {
        .artv-solutions-item__square {
          &:first-child {
            display: none;
          }

          &:nth-child(2) {
            top: calc(100% + 5px);
            left: 0;
          }

          &:last-child {
            top: calc(100% + 5px);
            right: calc(100% + 5px);            
          }
        }
      }

      &--to-right {
        .artv-solutions-item__square {
          &:first-child {
            top: 0;
            left: 0;
          }

          &:nth-child(2) {
            top: calc(100% + 5px);
            left: 0;
          }

          &:last-child {
            top: calc(100% + 5px);
            left: calc(100% + 5px);            
          }
        }
      }

      @media (max-width: 767px) {
        .artv-solutions-item__square {
          &:first-child {
            display: block;
            top: auto;
            right: auto;
            bottom: calc(100% + 5px);
          }

          &:nth-child(2) {
            top: auto;
            right: auto;
            bottom: calc(100% + 5px);
            left: calc(100% + 5px);
          }

          &:last-child {
            top: auto;
            right: auto;
            left: calc(200% + 5px);
          }
        }
      }

      @media (max-width: 575px) {
        .artv-solutions-item__square {
          &:first-child {
            display: none;
          }

          &:nth-child(2) {
            top: calc(100% + 5px);
            right: auto;
            bottom: auto;
            left: calc(100% + 5px);
          }

          &:last-child {
            top: calc(100% + 5px);
            right: auto;
            bottom: auto;
            left: calc(200% + 10px);
          }
        }
      }
    }

    &__bg-squares-item {
      position: absolute;
      background: var(--color-bg-sub);
    }
  }
</style>