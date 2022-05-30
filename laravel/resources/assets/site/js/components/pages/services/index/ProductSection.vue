<template>
  <section class="product-section">
    <div class="container">
      <SectionHeader
        :title="['End-to-End Product', 'Development ']"
        :desc="['We support product owners,', 'entrepreneurs and corporate leadership', 'boards every step of the way.']"
        icon="/images/site/icons/abstract/header-7.svg"
      />
      <AlternateList 
        class="product-section__list"
        :items="productItems"
      />
    </div>

    <img src="/images/site/icons/abstract/fig-15.svg" alt="" class="product-section__blue-dots" v-cursor-follow="{multiplier: .2}">
    <img src="/images/site/icons/abstract/2.svg" alt="" class="product-section__red-dots" v-cursor-follow="{multiplier: .4}">
    <img src="/images/site/icons/abstract/fig-14.svg" alt="" class="product-section__triangles" v-cursor-follow="{multiplier: .3}">
  </section>
</template>

<script>
// TO REMOVE -> bgImgURL="/images/site/services/index/product/bg.svg"

import SectionHeader from '@/js/components/global/SectionHeader'
import AlternateList from '@/js/components/pages/services/AlternateList'

export default {
  components: {SectionHeader, AlternateList},

  data() {
    return {
      productItems: [
        {
          textBlocks: [
            {
              title: 'Early-Stage Startup',
              desc: 'Helping startups in idea validation through prototyping and MVP development along with full cycle product development and further support.',
            }
          ],
          imgURL: '/images/site/services/index/product/1.jpg'
        },
        {
          textBlocks: [
            {
              title: 'Established Business',
              desc: 'Creating technical specifications for business solutions and handling full cycle project delivery along with continuous product maintenance.',
            }
          ],
          imgSide: 'left',
          imgURL: '/images/site/services/index/product/2.jpg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .services {
    .product-section {
      padding: var(--section-pd-y-big) 0;
      position: relative;
      z-index: 0;

      &__list {
        padding: 0 10.7%;

        .alternate-list__bg-img {
          left: 4%;
          top: 10%;
        }
      }

      @media (max-width: 575px) {
        &__list {
          padding: 0;
        }
      }

      &__blue-dots {
        position: absolute;
        top: 28%;
        left: 58%;
        z-index: -1;
      }

      &__red-dots {
        position: absolute;
        left: 30%;
        top: 57%;
        z-index: -1;
      }

      &__triangles {
        position: absolute;
        top: 62%;
        right: 17%;
      }

      @media (max-width: 1199px) {
        &__blue-dots, &__red-dots, &__triangles {
          display: none;
        }
      }
    }
  }

</style>