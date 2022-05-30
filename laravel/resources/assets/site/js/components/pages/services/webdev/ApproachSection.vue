<template>
  <section class="approach-section">
    <div class="container">
      <SectionHeader
        title="Our Approach"
        :desc="['We cover you with extensive', 'tech expertise every step of the way to your scalable', 'finely-tuned product.']"
        icon="/images/site/icons/abstract/header-12.svg"
      />
      <div 
        v-if="windowWidth > 1400"
        class="approach-section__circle"
      >
        <div class="approach-section__circle-inner">
          <img class="approach-section__circle-img" src="/images/site/services/webdev/approach/circle-main.svg" alt="">

          <div 
            :class="`approach-section__item approach-section__item--number--${index+1}`"
            v-for="(item, index) in items" 
            :key="index"
            v-scroll-reveal="{delay: 100 * index}"
          >
            <img 
              :src="`/images/site/numbers/${index+1}.svg`" alt="" 
              :class="{
                'approach-section__item-number': true,
                'approach-section__item-number--pos--top-left': index == 0
              }"
            >
            <div class="approach-section__item-inner">
              <img :src="`/images/site/services/webdev/approach/icons/${index+1}.svg`" class="approach-section__item-icon">
              <h3 class="approach-section__item-title">
                {{ item.title }}
              </h3>
              <p class="approach-section__item-desc">
                {{ item.desc }}
              </p>
            </div>
          </div>
        </div>
      </div>

      <ItemsList
        v-else
        class="approach-section__grid-items"
        :items="items"
        :columns="{
          800: 2,
          450: 1,
          default: 3
        }"
        cardType="first"
        :cardOptions="{imgWidth: 'fit', titleNumber: true}"
      />
    </div>

    <img src="/images/site/icons/abstract/fig-18.svg" alt="" class="approach-section__triangles" v-cursor-follow="{multiplier: .2}">
    <img src="/images/site/icons/abstract/fig-19.svg" alt="" class="approach-section__lines" v-cursor-follow="{multiplier: .2}">
    <img src="/images/site/icons/abstract/fig-20.svg" alt="" class="approach-section__diagonal" v-cursor-follow="{multiplier: .4}">
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {ItemsList, SectionHeader},

  data() {
    return {
      items: [
        {
          title: 'Analysis & Estimation',
          desc: 'Market analysis, clearly set objectives and a step-by-step plan for your web solution implementation.',
          imgURL: '/images/site/services/webdev/approach/icons/1.svg'
        },
        {
          title: 'Design',
          desc: 'An interactive prototype, intuitive product interface, stylish design to provide a realistic touch of the future product.',
          imgURL: '/images/site/services/webdev/approach/icons/2.svg'
        },
        {
          title: 'Development',
          desc: 'High-quality code reinforced by an in-depth frontend, backend and database development expertise.',
          imgURL: '/images/site/services/webdev/approach/icons/3.svg'
        },
        {
          title: 'Quality Testing',
          desc: 'Extreme testing services ensure that the product is of the highest quality possible and works smoothly at all times.',
          imgURL: '/images/site/services/webdev/approach/icons/4.svg'
        },
        {
          title: 'Full-value Product',
          desc: 'An utterly functional web solution that got through a path from a raw idea to a scalable product operational on various devices.',
          imgURL: '/images/site/services/webdev/approach/icons/5.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .webdev {
    .approach-section {
      position: relative;

      &__circle {
        padding: 15% 0;
      }

      &__circle-inner {
        position: relative;
        width: 55%;
        margin: 0 auto;
      }

      &__circle-img {
        width: 100%;
      }

      &__item {
        width: 45%;
        position: absolute;
        background: linear-gradient(112.42deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
        box-shadow: 0.9rem 0.9rem 2.5rem rgba(124, 124, 124, 0.4), -1.5rem -1.5rem 4rem #FFFFFF, -1.5rem -1.5rem 4rem #FFFFFF;
        border-radius: 50%;

        &:after {
          content: '';
          display: block;
          padding-top: 100%;
        }
        
        @media (max-width: 1550px) {
          width: 50%;
        }

        &--number {
          &--1 {
            left: 50%;
            top: -25%;
            transform: translateX(-50%);
          }

          &--2 {
            left: 100%;
            top: 16.5%;
            transform: translateX(-50%);
          }

          &--3 {
            right: -12.3%;
            top: 75%;
          }

          &--4 {
            left: -12.3%;
            top: 75%;
          }

          &--5 {
            left: 0;
            top: 16.5%;
            transform: translateX(-50%);
          }
        }
      }

      &__item-bg {
        width: 100%;
      }

      &__item-number {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 8rem;

        &--pos {
          &--top-left {
            left: 5.2%;
            top: 11.8%;
            transform: translate(0, 0);
          }
        }
      }

      &__item-inner {
        width: 70%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: absolute;
        left: 50%;
        top: 6rem;
        transform: translateX(-50%);
        text-align: center;
      }

      &__item-icon {
        margin-bottom: calc(var(--space-unit) * 2);
      }

      &__item-title {
        font-weight: 600;
        color: var(--black-dark);
        margin-bottom: calc(var(--space-unit) * 2);
      }

      &__item-desc {
        line-height: 160%;
      }

      &__grid-items {
        .items-list {
          &__item {
            width: calc(85% / 3);
            margin: 0 2.5%;

            @media (max-width: 800px) {
              width: 45%;
              margin: 2.5%;
            }

            @media (max-width: 450px) {
              width: 90%;
            }
          }

          &__row {
            justify-content: flex-start;
          }

        }
      }

      &__triangles {
        position: absolute;
        left: 10%;
        bottom: 0;
      }

      &__diagonal {
        position: absolute;
        right: 15%;
        top: 25%;
      }

      &__lines {
        position: absolute;
        right: 8%;
        bottom: 12%;
      }

      @media (max-width: 1700px) {
        &__triangles, &__diagonal, &__lines {
          display: none;
        }
      }
    }
  }
</style>