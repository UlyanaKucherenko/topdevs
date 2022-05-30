<template>
  <section class="benefits-section">
    <div class="container">
      <SectionHeader
        :title="['Benefits of', 'Native Apps']"
        :desc="['We choose to bring success to our clients', 'via an exceptional user journey that native', 'apps give.']"
      />

      <div 
        :class="{
          'benefits-section__block': true,
          'benefits-section__block--img--left': block.imgLeft
        }"
        v-for="(block, index) in items" 
        :key="index"
      >
        <div class="benefits-section__cards">
          <div 
            class="benefits-section__card"
            v-for="(card, index) in block.cards" 
            :key="index"
          >
            <div class="benefits-section__card-title">
              {{ card.title }}
              <img src="/images/site/checkmark.svg">
            </div>

            <div class="benefits-section__card-desc">
              {{ card.desc }}
            </div>
          </div>
        </div>
        <div class="benefits-section__images-container">
          <div class="benefits-section__image-front">
            <img :src="block.mainIMG" alt="" class="">
            <img :src="block.dotsIMG" alt="" class="benefits-section__image-back">
          </div>
        </div>
      </div>
    </div>
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
          mainIMG: '/images/site/services/mobile/benefits/1.png',
          dotsIMG: '/images/site/services/mobile//benefits/dots-1.svg',
          cards: [
            {
              title: 'Performance',
              desc: 'Being optimized for a particular platform, native applications are faster, smarter and more efficient while operating with a huge amount of data.'
            },
            {
              title: 'Security',
              desc: 'Only native development of mobile apps guarantees reliable data protection, as it requires the possibility to operate under high loads.'
            },
            {
              title: 'Usability',
              desc: 'Native applications leverage familiar gestures and actions to create an interactive and easy-to-use experience for users.'
            }
          ]
        },
        {
          imgSide: 'left',
          mainIMG: '/images/site/services/mobile/benefits/2.png',
          dotsIMG: '/images/site/services/mobile/benefits/dots-2.svg',
          cards: [
            {
              title: 'Access to Functionality',
              desc: 'Native apps give unlimited possibilities for users to interact with the device’s hardware, e.g. GPS, camera, microphone, calendar, etc.'
            },
            {
              title: 'Stability',
              desc: 'The continuous support of iOS and Android from respective organizations ensures that native applications will function seamlessly.'
            },
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .mobile {
    .benefits-section {
      padding: var(--section-pd-y-big) 0;

      &__block {
        display: flex;
        justify-content: space-between;
        margin-bottom: 14rem;

        &--img--left {
          flex-direction: row-reverse;
        }
      }

      &__cards {
        width: 40%;
      }

      &__card {
        background: linear-gradient(133.38deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
        box-shadow: 9px 9px 25px rgba(124, 124, 124, 0.4), -15px -15px 40px #FFFFFF, -15px -15px 40px #FFFFFF;
        border-radius: 3rem;
        padding: 4rem;
        margin-bottom: 12.8rem;
        
        &-title {
          font-weight: 600;
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-bottom: 3rem;
          font-size: 2.4rem;
          line-height: 2.8rem;
          color: var(--red-light);
        }

        &-desc {
          font-size: 2rem;
          line-height: 160%;
          color: var(--black-main);
        }

        &:last-child {
          margin-bottom: 0;
        }
      }

      &__images-container {
        width: 45%;
        margin-right: 5%;
        position: relative;
      }

      &__image-front {
        position: absolute;
        width: 80%;
        left: 50%;
        top: 4.8rem;
        transform: translateX(-50%);

        img:first-child {
          width: 100%;
        }
      }

      &__image-back {
        position: absolute;
        width: 110%;
        z-index: -1;
        transform: translate(-5%, -75%);
      }
    }
  }
</style>