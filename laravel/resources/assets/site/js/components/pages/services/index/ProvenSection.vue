<template>
  <section class="proven-section">
    <div class="container">
      <SectionHeader
        :title="['Proven Development', 'Process']"
        :desc="['Our all-rounded software development cycle', 'seamlessly fits into each specific business', 'vision and set of requirements.']"
        icon="/images/site/icons/abstract/header-6.svg"
      />

      <div class="proven-section__circle">
        <img class="proven-section__circle-img" src="/images/site/services/index/proven/circle-light.svg" alt="">

        <div 
          :class="`proven-section__item proven-section__item--number--${index+1}`"
          v-for="(item, index) in items" 
          :key="index"
        >
          <div class="proven-section__counter">
            <div class="proven-section__line"></div>
            <img :src="`/images/site/numbers/grey/w-zero/0${index+1}.svg`" alt="" class="proven-section__number">
          </div>

          <div class="proven-section__text-block">
            <h3 class="proven-section__title"> {{ item.title }} </h3>
            <p class="proven-section__desc"> {{ item.desc }} </p>
          </div>
        </div>
      </div>
    </div>

    <img src="/images/site/icons/abstract/fig-16.svg" alt="" class="proven-section__cursor-follow" v-cursor-follow="{multiplier: .5}">
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'

export default {
  components: {SectionHeader},

  data() {
    return {
      items: [
        {
          title: 'Discovery Phase',
          desc: 'Initial idea discussion and project requirements gathering to get the whole understanding and correctly plan further work.'
        },
        {
          title: 'Concept & Design ',
          desc: 'Reasoning out the project architecture with design ideation and interactive prototyping to imagine the future product.'
        },
        {
          title: 'Estimation & Planning',
          desc: 'Detailed project estimation with planning each product development iteration to fully see the comprehensive scope of work.'
        },
        {
          title: 'Product Delivery',
          desc: 'All cycle of software development including PM services and QA testing to ensure the product of first-class quality.'
        },
        {
          title: 'Support & Maintenance',
          desc: 'Post-release support including feature update and product improvement to tackle the ever-changing market conditions.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .services {
    .proven-section {
      padding-top: var(--section-pd-y-small);
      padding-bottom: var(--section-pd-y-big);
      background: linear-gradient(117.73deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      position: relative;
      box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

      @media (max-width: 1150px) {
        padding-bottom: (var(--section-pd-y-small));
      }

      &__circle {
        position: relative;
        width: 55%;
        transform: translateX(-50%);

        @media (max-width: 1150px) {
          transform: translateY(0);
          width: 90%;
          margin: 0 auto;
        }

        @media (max-width: 575px) {
          width: 100%;
        }

        &-img {
          width: 100%;

          @media (max-width: 1150px) {
            display: none;
          }
        }
      }

      &__item {
        display: flex;
        position: absolute;
        width: 90%;
        align-items: flex-start;

        @media (max-width: 1150px) {
          position: relative;
          width: 100%;
          margin-bottom: 4rem;
        }

        @media (max-width: 500px) {
          flex-direction: column;
        }

        &--number {
          &--1 {
            left: 71%;
            top: -1%;
          }

          &--2 {
            left: 94%;
            top: 22%;
          }

          &--3 {
            left: 101%;
            top: 46.5%;
          }

          &--4 {
            left: 94%;
            top: 72%;
          }

          &--5 {
            left: 71%;
            top: 95%;
          }
        }
      }

      

      &__counter {
        display: flex;
        align-items: center;
        margin-right: 3rem;
        width: 28%;

        @media (max-width: 1150px) {
          margin-top: .8rem;
        }

        @media (max-width: 500px) {
          width: auto;
          margin-bottom: 1.5rem;
        }
      }

      &__line {
        width: 42%;
        height: 0.3rem;
        margin-right: 20%;
        background-color: #FB475D;

        @media (max-width: 500px) {
          width: 3rem;
          margin-right: 1rem;
        }
      }

      &__number {
        width: 36.8%;

        @media (max-width: 1150px) {
          width: 25.8%;
        }

        @media (max-width: 991px) {
          width: 36.8%;
        }

        @media (max-width: 500px) {
          width: 2rem;
        }
      }

      &__text-block {
        width: 66%;

        @media (max-width: 500px) {
          width: 100%;
        }
      }

      &__title {
        font-weight: 600;
        margin-bottom: 2rem;
      }

      &__desc {
        line-height: 160%;
        letter-spacing: 0.03em;
      }

      &__cursor-follow {
        position: absolute;
        right: 5%;
        bottom: 5%;

        @media (max-width: 1150px) {
          display: none;
        }
      }
    }
  }

  @media (max-width: 1150px) {
    .services .proven-section__item--number {
      &--1, &--2, &--3, &--4, &--5 {
        left: auto;
        top: auto;
        right: auto;
        bottom: auto;
      }
    }
  }
</style>