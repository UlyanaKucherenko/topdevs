<template>
  <div class="solutions-section" v-scroll-reveal>
    <div class="container">
      <div class="solutions-section__inner">
        <img 
          class="solutions-section__rhombus"
          src="/images/site/portfolio/qliq/solutions/rhombus.svg" alt="" 
        >

        <PortfolioHeader
          class="solutions-section__header"
          titleText="Solutions"
          titleTextColor="var(--case-color-primary)"
        >
          <div 
            class="qliq-header-line"
            slot="titleImg"
          />
        </PortfolioHeader>

        <p class="solutions-section__desc portfolio-desc">
          We've started our cooperation with a goal to provide a dedicated team for a client. Our extended expertise in delivering tracking solutions became handy and allowed us to enhance the core features of the project with a real-time component. The communication transparency has led to the further technical support of the project after launch. Additionally, we've perfected the product with accurate bug fixing execution. 
        </p>

        <div class="solutions-section__list">
          <div 
            class="solutions-section__item"
            :class="{'solutions-section__item--reverse': index % 2}"
            v-for="(item, index) in items" :key="index"
            v-scroll-reveal
          >
            <img 
              class="solutions-section__item-img"
              :src="item.imgURL" alt="" 
            >
            <div class="solutions-section__item-info">
              <div class="solutions-section__item-number">{{ item.number }}</div>
              <h3 class="solutions-section__item-title portfolio-title">{{ item.title }}</h3>
              <div class="solutions-section__item-subtitle portfolio-desc portfolio-desc--sm">{{ item.subtitle }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <picture class="solutions-section__bg">
      <source media="(max-width: 700px)" srcset="/images/site/portfolio/qliq/solutions/bg-360.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/qliq/solutions/bg-768.png">
      <source media="(max-width: 1199px)" srcset="/images/site/portfolio/qliq/solutions/bg-1199.png">
      <source media="(max-width: 1700px)" srcset="/images/site/portfolio/qliq/solutions/bg-1700.png">
      <img src="/images/site/portfolio/qliq/solutions/bg-1920.png" alt="">
    </picture>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  data() {
    return {
      items: [
        {
          number: '01',
          title: '01. Secure Messaging',
          subtitle: 'Patients’ data is fully protected and, at the same time, shared within the care team to ensure accurate information exchange and improved patient outcomes.',
          imgURL: '/images/site/portfolio/qliq/solutions/mockup-1.png'
        },
        {
          number: '02',
          title: '02. On-Call Scheduling',
          subtitle: 'A real-time view of calendar records with the information of who is on duty at the specified time in any particular department. All data can be easily managed to allocate the required staff for specific needs and contact them instantly.',
          imgURL: '/images/site/portfolio/qliq/solutions/mockup-2.png'
        },
        {
          number: '03',
          title: '03. Visit Path',
          subtitle: 'A real-time overview of the scheduled, conducted, and completed care delivery sessions with GPS-tracking and accurate reporting to optimize service shipment and billing procedures.',
          imgURL: '/images/site/portfolio/qliq/solutions/mockup-3.png'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .qliq .solutions-section {
    position: relative;
    z-index: 0;
    padding: calc(var(--space-unit) * 14) 0;

    &__inner {
      position: relative;
    }

    &__rhombus {
      position: absolute;
      top: 16%;
      right: 2%;

      @media (max-width: 1400px) {
        top: -2.3%;
        right: 13%;
      }

      @media (max-width: 991px) {
        width: 5rem;
      }

      @media (max-width: 575px) {
        display: none;
      }
    }

    &__header {
      position: relative;
  		margin-bottom: var(--portfolio-header__title-margin);
    }

    &__desc {
      width: 60%;
      margin-bottom: calc(var(--space-unit) * 8);

      @media (max-width: 991px) {
        width: 100%;
      }
    }

    &__item {
      display: flex;
      align-items: center;
      margin-top: -7%;
      padding: 0 4.5rem;

      @media (max-width: 1500px) {
        padding: 0;
        margin-top: -3%;
      }

      @media (max-width: 700px) {
        flex-direction: column;
        margin-top: 0;
        margin-bottom: 6rem;

        &:last-child {
          margin-bottom: 0;
        }

        &:first-child img {
          transform: translateX(-8%);
        }

        &:nth-child(2) img {
          transform: translateX(9%);
        }

        &:nth-child(3) {
          .solutions-section__item-number {
            color: #EDF6FF;
          }

          img {
            transform: translateX(-7.7%);
          }
        }
      }

      &:first-child {
        margin-top: 0;
      }

      &--reverse {
        @media (min-width: 701px) {
          flex-direction: row-reverse;
          justify-content: flex-start;

          .solutions-section__item {
            &-info {
              margin-left: auto;
            }

            &-img {
              margin-right: 0;
              margin-left: 5vw;

              @media (max-width: 1300px) {
                margin-left: 5%;
              }
            }
          }
        }
      }

      &-img {
        width: 37%;
        margin-right: 6vw;

        @media (max-width: 1300px) {
          width: 40%;
          margin-right: 5%;      
        }

        @media (max-width: 991px) {
          width: 47.5%;
        }

        @media (max-width: 700px) {
          margin-right: 0;
          width: 87%;
          max-width: 36rem;
        }
      }

      &-info {
        width: 54rem;
        position: relative;
        padding-left: 9.6rem;

        @media (max-width: 1300px) {
          width: 55%;
        }

        @media (max-width: 991px) {
          width: 47.5%;
          padding-left: 6rem;
        }

        @media (max-width: 700px) {
          margin-top: 2rem;
          width: 100%;
          max-width: 50rem;
        }
      }

      &-number {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-30%);
        z-index: -1;
        font-size: 25rem;
        font-weight: 900;
        font-family: var(--Muli);
        color: var(--white-clear);
        letter-spacing: 1px;

        @media (max-width: 1199px) {
          font-size: 22.5rem;
        }

        @media (max-width: 991px) {
          font-size: 20.5rem;
        }

        @media (max-width: 700px) {
          font-size: 15.5rem;
          transform: translateY(-17%);
        }
      }

      &-title {
        color: var(--case-color-secondary);
        margin-bottom: calc(var(--space-unit) * 1.5)
      }
    }

    &__bg {
      img, source {
        position: absolute;
        top: -4%;
        left: 0%;
        width: 100%;
        height: 100%;
        z-index: -2;

        @media (max-width: 700px) {
          left: 0;
          top: -2%;
          width: 100%;
          height: 84%;
        }
      }
    }
  }
</style>