<template>
  <section class="process-section">
    <div class="container">
      <SectionHeader
        :title="['Process From', 'A to Z']"
        :desc="['We cover the whole product lifecycle - from the', 'discovery stage to product deployment and', 'support.']"
        icon="/images/site/icons/abstract/header-5.svg"
      />

      <div 
        v-if="windowWidth > 1200"
        class="process-section__circle"
      >
        <div class="process-section__circle-inner">
          <img 
            class="process-section__circle-img" 
            src="/images/site/services/full-cycle/process/circle.svg" alt=""
            v-scroll-reveal
          >

          <div 
            :class="`process-section__item process-section__item--number--${index+1} process-section__item--side--${item.side}`"
            v-for="(item, index) in items" 
            :key="index"
            v-scroll-reveal="{delay: 50 * index}"
          >
            <div class="process-section__item-text">
              <h3 class="process-section__item-title"> 
                {{ item.title }} 
                <img :src="`/images/site/services/full-cycle/process/titles/${index+1}.svg`" alt="" class="process-section__item-title-img">
              </h3>
              <p class="process-section__item-desc">
                {{ item.desc }}
                <img :src="`/images/site/numbers/${index+1}.svg`" alt="" class="process-section__item-number">
              </p>
            </div>
          </div>
        </div>
      </div>

      <ItemsList
        v-else
        class="process-section__grid-items"
        :items="items"
        :columns="{
          768: 2,
          450: 1,
          default: 3
        }"
        cardType="first"
        :cardOptions="{imgWidth: 'fit'}"
      />
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  data() {
    return {
      items: [
        {
          title: 'Idea Discussion',
          desc: 'Initial idea discovery and specific requirements gathering to see the project\'s core value and transmit the business true vision to the end-user.',
          side: 'right',
          imgURL: '/images/site/services/full-cycle/process/titles/1.svg'
        },
        {
          title: 'Architecture Design',
          desc: 'Overall design ideation and interactive prototyping to observe the project architecture and make improvements before the development stage.',
          side: 'right',
          imgURL: '/images/site/services/full-cycle/process/titles/2.svg'
        },
        {
          title: 'Scope of Work',
          desc: 'Full cost estimation of both software appearance and functionality along with each iteration planning to present access to the client for project monitoring.',
          side: 'right',
          imgURL: '/images/site/services/full-cycle/process/titles/3.svg'
        },
        {
          title: 'Development',
          desc: 'The actual development process includes both coding and testing to deliver a product of exceptional quality and high performance.',
          side: 'left',
          imgURL: '/images/site/services/full-cycle/process/titles/4.svg'
        },
        {
          title: 'Product Release',
          desc: 'Project finalization along with all source code and design materials being transferred to the client with the possibility to publish mobile apps on app stores.',
          side: 'left',
          imgURL: '/images/site/services/full-cycle/process/titles/5.svg'
        },
        {
          title: 'Post-Launch Maintenance',
          desc: 'Continuous product support after release and functionality upgrades to fit your software solution for the newest market needs.',
          side: 'left',
          imgURL: '/images/site/services/full-cycle/process/titles/6.svg'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .full-cycle {
    .process-section {
      background: linear-gradient(119.64deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);
      padding: var(--section-pd-y-small) 0;

      &__circle {
        width: 41%;
        margin: 0 auto;
        padding: 7.5% 0;

        &-inner {
          position: relative;
          display: flex;
        }

        &-img {
          width: 100%;
        }
      }

      &__item {
        position: absolute;
        width: 52.5%;

        &--number {
          &--1 {
            top: -16%;
            left: 97%;
          }
          
          &--6 {
            top: -16%;
            right: 95%;
          }

          &--2 {
            top: 50%;
            left: 116%;
            transform: translateY(-50%);
          }

          &--5 {
            top: 50%;
            right: 116%;
            transform: translateY(-50%);
          }

          &--3 {
            top: 88%;
            left: 97%;
          }

          &--4 {
            top: 88%;
            right: 97%;
          }
        }

        &--side {
          &--right {
            text-align: left;

            .process-section__item-number {
              position: absolute;
              top: 0;
              right: calc(100% + 4rem);
              transform: translateX(50%);
              height: 5rem;
            }

            .process-section__item-title-img {
              position: absolute;
              left: calc(100% + 4rem);
              top: 50%;
              transform: translateY(-50%);
            }
          }

          &--left {
            text-align: right;

            .process-section__item-number {
              position: absolute;
              top: 0;
              left: calc(100% + 4rem);
              transform: translateX(-50%);
              height: 5rem;
            }

            .process-section__item-title {
              margin-left: auto;
            }

            .process-section__item-title-img {
              position: absolute;
              right: calc(100% + 4rem);
              top: 50%;
              transform: translateY(-50%);
            }
          }
        }
      }

      &__item-title {
        position: relative;
        font-size: 2.4rem;
        color: var(--black-dark);
        font-weight: 600;
        margin-bottom: 3rem;
        width: fit-content;
        white-space:nowrap;
      }

      &__item-desc {
        position: relative;
        color: var(--black-main);
        line-height: 160%;
      }

      &__grid-items {
        .items-list {
          &__item {
            width: 30%;

            @media (max-width: 767px) {
              width: 45%;
            }

            @media (max-width: 450px) {
              width: 90%;
            }
          }
        }
      }
    }
  }
</style>