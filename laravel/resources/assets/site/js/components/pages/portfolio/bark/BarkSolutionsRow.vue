<template>
  <div 
    class="bark-solutions-row"
    :class="{
      'bark-solutions-row--reversed': reversed
    }"
    :style="{
      '--color-front': colors.front,
      '--color-back': colors.back,
      '--color-outline': colors.outline,
      '--bg-base-height-global': bgBaseHeight + 'px',
      '--bg-base-height-local': bgBaseHeightLocal + 'px'
    }"
  >
    <div class="container">
      <div class="bark-solutions-row__content-wrapper">
        <div class="bark-solutions-row__content">
          <div 
            class="bark-solutions-row-card-wrapper"
            ref="cardWrapper"
          >
            <div 
              class="bark-solutions-row-card"
              ref="card"
            >
              <span class="bark-solutions-row-card__number">
                0{{ card.number }}
              </span>

              <PortfolioBlockBase
                :titleText="card.title"
                :descText="card.desc"
              />

              <div class="bark-solutions-row-card__underlay"/>
            </div>
          </div>

          <img 
            class="bark-solutions-row__mockup"
            :src="mockup" alt="" 
          >
        </div>

        <div class="bark-solutions-row__bg-outlined"/>
        <div class="bark-solutions-row__bg-filled"/>
      </div>
    </div>
  </div>
</template>

<script>
import { debounce } from '@/js/mixins/functions'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioBlockBase},

  props: {
    colors: {
      type: Object,
      required: true
    },
    card: {
      type: Object,
      required: true
    },
    mockup: {
      type: String,
      required: true
    },
    bgBaseHeight: {
      type: Number,
      required: true
    },
    reversed: {
      type: Boolean,
    }
  },


  data() {
    return {
      bgBaseHeightLocal: 0
    }
  },
  

  mounted() {
    this.updateCardHeight()
    window.addEventListener('resize', debounce(this.updateCardHeight, 100))
  },


  methods: {
    updateCardHeight() {
      this.bgBaseHeightLocal = this.$refs.cardWrapper.offsetHeight
    }
  },
}
</script>

<style lang="scss">
  .bark-solutions-row {
    --content-offset: 9.4rem;
    --row-card-underlay-offset: 11.5rem;
    --row-card-filled-padding: 7rem;
    --row-card-outlined-padding: 6.6rem;
    --filled-offset: 0px;
    
    @media (max-width: 1400px) {
      --content-offset: 4rem;
      --row-card-underlay-offset: 11rem;
      --row-card-filled-padding: 6rem;
      --row-card-outlined-padding: 6.5rem;
      --filled-offset: calc(var(--container-padding) / 2);
    }

    @media (max-width: 1199px) {
      --row-card-underlay-offset: 8.5rem;
      --row-card-filled-padding: 5rem;
      --row-card-outlined-padding: 5.5rem;
    }

    @media (max-width: 991px) {
      --content-offset: 5.5rem;
      --row-card-underlay-offset: 50%;
      --row-card-outlined-padding: 4.5rem; 
      --filled-offset: 0px;
    }

    @media (max-width: 575px) {
      --row-card-underlay-offset: 7rem;
      --row-card-filled-padding: 1.5rem;
      --content-offset: 10%;
    }

    @media (max-width: 450px) {
      --content-offset: 0px;
    }

    &__content {
      &-wrapper {
        position: relative;
      }

      width: calc(100% - var(--content-offset));
      margin-left: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 991px) {
        flex-direction: column;
        width: calc(100% - var(--content-offset) * 2);
        margin: 0 auto;
        margin-bottom: 8rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }
    }

    &__bg {
      &-outlined {
        position: absolute;
        border: 1px solid var(--color-outline);
        border-radius: 20px;
        right: 100%;
        top: 50%;
        width: 1000%;
        height: calc(var(--bg-base-height-global) + ((var(--row-card-filled-padding) + var(--row-card-outlined-padding)) * 2));
        transform: translateY(-50%);
      
        @media (max-width: 991px) {
          top: calc(var(--row-card-outlined-padding) * -1);
          height: calc(var(--bg-base-height-local) + var(--row-card-outlined-padding) * 2);
        }
      }

      &-filled {
        position: absolute;
        border-radius: 20px;
        left: calc(100% + var(--filled-offset));
        top: 50%;
        background: var(--color-back);
        width: 1000%;
        height: calc(var(--bg-base-height-global) + calc(var(--row-card-filled-padding) * 2));
        transform: translateY(-50%);

        @media (max-width: 991px) {
          top: 0;
          height: var(--bg-base-height-local);
        }
      }

      &-outlined, &-filled {
        @media (max-width: 991px) {
          transform: none;
        }

        @media (max-width: 575px) {
          display: none;
        }
      }
    }

    &-card {
      &-wrapper {
        position: relative;
        width: 41.5%;
        padding: var(--row-card-filled-padding) 0;

        @media (max-width: 1400px) {
          width: 49%;
        }

        @media (max-width: 991px) {
          width: 100%;
          margin-bottom: 3.5rem;
        }

        @media (max-width: 575px) {
          margin-bottom: 2rem;
        }
      }

      display: flex;
      align-items: center;
    
      @media (max-width: 575px) {
        flex-direction: column;
        align-items: flex-start;
      }

      &__number {
        color: var(--color-front);
        flex-shrink: 0;
        font-family: var(--Muli);
        font-weight: 900;
        font-size: 13rem;
        letter-spacing: 0.03em;
        line-height: normal;
        margin-right: 40px;

        @media (max-width: 1400px) {
          font-size: 11rem;
          margin-right: 3rem;
        }

        @media (max-width: 1199px) {
          font-size: 9rem;
          margin-right: 2.5rem;
        }

        @media (max-width: 575px) {
          font-size: 4rem;
          margin-right: 0;
        }
      }

      &__underlay {
        position: absolute;
        width: 1000%;
        height: calc(var(--bg-base-height-global) + calc(var(--row-card-filled-padding) * 2));
        border-radius: 20px;
        z-index: -1;
        right: var(--row-card-underlay-offset);
        top: 0;
        background: var(--color-back);

        @media (max-width: 991px) {
          height: 100%;
        }
      }
    }

    &__mockup {
      width: 53.6%;

      @media (max-width: 991px) {
        width: 100%;
        max-width: 53.7rem;
      }
    }

    &--reversed {
      @media (min-width: 992px) {
        .bark-solutions-row {
          &__content {
            flex-direction: row-reverse;
            margin-left: 0;
            margin-right: auto;
          }
  
          &__bg {
            &-filled {
              left: auto;
              right: 100%;
              // right: calc(100% + var(--container-padding));
            
              @media (max-width: 1400px) {
                right: calc(100% + var(--container-padding) / 2.5);
              }
            }
  
            &-outlined {
              right: auto;
              left: 100%;
            }
          }

          &__mockup {
            @media (min-width: 1401px) {
              transform: translateX(5%);
            }
          }
  
          &-card {
            &__underlay {
              right: auto;
              left: var(--row-card-underlay-offset);
            }
          }
        }
      }
    }
  }
</style>