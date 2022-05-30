<template>
  <section class="meld-gist" v-scroll-reveal>
    <div class="container">
      <div class="meld-gist__list">
        <div 
          class="meld-gist-item"
          v-for="(item, index) in gistItems" :key="index"
        >
        <h3 
            class="meld-gist-item__category"
            :style="{
              '--category-color': item.categoryColor
            }"
          >
            {{ item.categoryText }}
          </h3>

          <!-- <picture class="meld-gist-item__category">
            <source media="(max-width: 1199px)" :srcset="`/images/site/portfolio/meld/gist/${item.categoryText}-1199.svg`">
            <source media="(max-width: 1400px)" :srcset="`/images/site/portfolio/meld/gist/${item.categoryText}-1400.svg`">
            <img :src="`/images/site/portfolio/meld/gist/${item.categoryText}.svg`" alt="">
          </picture> -->

          <div class="meld-gist-item__value">
            <SvgKeeper 
              class="meld-gist-item__value-icon"
              :name="item.valueIcon" 
            />

            <div 
              class="meld-gist-item__value-text text-lg portfolio-text-lg"
              :style="{color: item.valueColor}"
            >
              {{ item.valueText }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SvgKeeper from '@/js/components/global/SvgKeeper'

export default {
  components: {SvgKeeper},

  data() {
    return {
      gistItems: [
        {
          categoryText: 'Country',
          categoryColor: '#3A4049',
          valueIcon: 'portfolio-gps',
          valueColor: '#011E50',
          valueText: 'USA'
        },
        {
          categoryText: 'Platform',
          categoryColor: '#3A4049',
          valueIcon: 'portfolio-monitor',
          valueColor: '#011E50',
          valueText: 'iOS'
        },
        {
          categoryText: 'Industry',
          categoryColor: 'var(--case-color-orange)',
          valueIcon: 'portfolio-case',
          valueColor: '#011E50',
          valueText: 'Dating'
        },
        {
          categoryText: 'Duration',
          categoryColor: 'var(--case-color-orange)',
          valueIcon: 'portfolio-clock',
          valueColor: '#011E50',
          valueText: '7 months'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .meld-gist {
    padding: 5rem 0 21.8rem;

    @media (max-width: 1400px) {
      padding: 3.5rem 0 15.5rem;
    }

    @media (max-width: 1199px) {
      padding: 2.5rem 0 10rem;
    }

    @media (max-width: 991px) {
      padding-top: 4.4rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__list {
      display: grid;
      grid-template-columns: repeat(4, max-content);
      column-gap: 8rem;

      @media (max-width: 1400px) {
        column-gap: 5.5rem;
      }

      @media (max-width: 991px) {
        grid-template-columns: repeat(4, max-content);
        justify-content: space-around;
        column-gap: normal;
      }

      @media (max-width: 650px) {
        grid-template-columns: repeat(2, max-content);
        justify-content: space-evenly;
        row-gap: 1.5rem;
      }

      @media (max-width: 575px) {
        row-gap: 2rem;
      }
    }

    &-item {
      // &:nth-child(even) {
      //   .meld-gist-item__category {
      //     img, source {
      //       margin-bottom: .9rem;

      //       @media (max-width: 1400px) {
      //         margin-bottom: .8rem;
      //       }

      //       @media (max-width: 1199px) {
      //         margin-bottom: .7rem;
      //       }
      //     }
      //   }
      // }

      @media (max-width: 650px) {
        &:nth-child(2) {
          grid-row-start: 2;
        }
      }

      &__category {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 160%;
        letter-spacing: .08em;
        color: transparent;
        -webkit-text-stroke: 1px var(--category-color);

        @media (max-width: 1400px) {
          font-size: 3rem;
        }

        @media (max-width: 1199px) {
          font-size: 2.5rem;
          -webkit-text-stroke: .75px var(--category-color);
        }
      }

      &__value {
        display: flex;

        &-icon {
          width: 2rem;
          margin-right: 1.15rem;

          path {
            fill: var(--case-color-primary);
          }
        }

        &-text {
          font-weight: 700;
          line-height: 160%;
          letter-spacing: 0.03em;
        }
      }
    }
  }
</style>