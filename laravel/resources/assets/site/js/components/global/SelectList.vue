<template>
  <div class="select-list" v-scroll-reveal>
    <template v-if="windowWidth > 768">
      <div class="select-list__inner">
        <div class="select-list__nav-list">
          <h3
            :class="{
              'select-list__nav-item': true,
              'select-list__nav-item--active': activeItem == item,
              'text-with-border': true
            }"
            v-for="(item, index) in items" :key="index"
            @click="changeActiveItem(index)"
          > 
            {{ item.title }} 
          </h3>
        </div>

        <transition name="fade" mode="out-in">
          <a 
            :href="activeItem.link" 
            class="select-list__card hover-card"
            v-if="cardIsVisible"
          >
            <span class="select-list__card-title"> {{ activeItem.title }} </span>
            <img :src="activeItem.imgURL" alt="" class="select-list__card-left">
            <div class="select-list__card-right">
              <p class="select-list__card-desc text-lg">
                {{ activeItem.desc }}
              </p>
              <div class="select-list__card-more">
                <span class="hover-card__text">see more</span>
                <img class="hover-card__arrow" src="/images/site/icons/arrows/1.svg" alt="">
              </div>
            </div>
          </a>
        </transition>
      </div>
      <a 
        class="select-list__btn btn-default btn-default--home-page"
        href="/industries"
      >
        discover more
      </a>
    </template>

    <ItemsList
      v-else
      class="select-list__items"
      :items="mobileItems"
      :columns="{
        768: 2,
        576: 1
      }"
    >
      <template v-slot="slotProps">
        <MoreCard :item="slotProps.item" bottomSide="left"/>
      </template>
    </ItemsList>
  </div>
</template>

<script>
import ItemsList from '@/js/components/global/ItemsList'
import MoreCard from '@/js/components/global/cards/MoreCard'

export default {
  components: {ItemsList, MoreCard},

  data() {
    return {
      activeItem: {},
      cardIsVisible: true,
      items: [
        {
          imgURL: '/images/site/index/solving/1-fix.svg',
          title: 'Media & Entertainment',
          desc: 'Create popular media streaming apps with our time-tested app development services.',
          link: '/industries/media-entertainment-software-development',
        },
        {
          imgURL: '/images/site/index/solving/2-fix.svg',
          title: 'Education & E-Learning',
          desc: 'Boost interactivity and learning capabilities with customized solutions for EdTech.',
          link: '/industries/elearning-software-development',
        },
        {
          imgURL: '/images/site/index/solving/3-fix.svg',
          title: 'Logistics & Tracking',
          desc: 'Improve the location tracking, supply chain business niche with a solid tracking app.',
          link: '/industries/logistics-tracking-app-development',
        },
        {
          imgURL: '/images/site/index/solving/4-fix.svg',
          title: 'Retail & E-Commerce',
          desc: 'Get profits with a multi-vendor eCommerce store and beyond.',
          link: '/industries/retail-ecommerce-software-development',
        },
        {
          imgURL: '/images/site/index/solving/5-fix.svg',
          title: 'Sports & Fitness',
          desc: 'Tune into the market of fitness mobile apps for personal health and sports activities. ',
          link: '/industries/sports-fitness-app-development',
        },
        {
          imgURL: '/images/site/index/solving/6-fix.svg',
          title: 'Healthcare',
          desc: 'Perfect patient care and medical staff efficiency with data solutions and online consultations.',
          link: '/industries/healthcare-software-development',
        },
        {
          imgURL: '/images/site/index/solving/7-fix.svg',
          title: 'Real Estate',
          desc: 'Architect an innovative way of buying, selling and renting properties with real estate apps.',
          link: '/industries/real-estate-app-development',
        },
        {
          imgURL: '/images/site/index/solving/8-fix.svg',
          title: 'Dating',
          desc: 'Refine communication and raise interaction between dating app users.',
          link: '/industries/dating-app-development',
        },
      ]
    }
  },

  created() {
    this.activeItem = this.items[0]
  },


  computed: {
    mobileItems() {
      return this.items.map(item => {
        item.imgURL = item.imgURL.replace('-new', '')
        return item
      })
    }
  },

  methods: {
    changeActiveItem(index) {
      this.cardIsVisible = false
      setTimeout(() => {
        this.activeItem = this.items[index]
      this.cardIsVisible = true
      }, 300);
    }
  },
}
</script>

<style lang="scss">
  .select-list {
    position: relative;
    z-index: 1;

    .items-list {
      &__item {
        width: 40%;

        .first-card__img {
          margin-bottom: calc(var(--space-unit) * 5);
        }

        @media (max-width: 575px) {
          width: 90%;
        }
      }
    }

    &__inner {
      padding: 0 var(--section-header-padding);
      display: flex;
      align-items: flex-start;
      margin-bottom: calc(var(--space-unit) * 6);
    }

    &__btn {
      margin-left: 3.5rem;

      @media (max-width: 767px) {
        display: none;
      }
    }

    &__nav-list {
      width: 45rem;
      flex-shrink: 0;

      @media (max-width: 1199px) {
        width: fit-content;
        margin-right: 5rem;
      }
    }

    &__nav-item {
      cursor: pointer;
      margin-bottom: 2.5rem;
      width: fit-content;
      text-transform: uppercase;
      font-weight: 400;

      &:after {
        top: calc(100% - .1em);
        height: .4rem;
      }

      &:before {
        content: '';
        position: absolute;
        left: -.80em;
        top: 50%;
        transform: translateY(-50%);
        width: .31em;
        height: .31em;
        background: var(--red-light);
        opacity: 0;
        transition: .3s;
      }

      &--active {
        &:before {
          transition: .3s;
          opacity: 1;
        }
      }
    }

    &__card {
      display: flex;
      align-items: flex-end;
      margin-top: calc(var(--space-unit) * 6);
      position: relative;

      @media (max-width: 1400px) {
        flex-direction: column;
        align-items: center;
      }

      @media (max-width: 991px) {
        align-self: center;
      }

      &-left {
        width: 50%;
        flex-shrink: 0;
        margin-right: 4rem;

        @media (max-width: 1400px) {
          margin-bottom: calc(var(--space-unit) * 4);
        }
      }

      &-right {

      }

      &-title {
        font-size: 24rem;
        font-weight: 600;
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-50%);
        width: 999rem;
        color: #DDDDDD;
        opacity: 0.8;
        z-index: -1;
        text-transform: uppercase;
        pointer-events: none;

        @media (max-width: 1400px) {
          font-size: 18rem;
        }
      }
      
      &-desc {
        font-weight: 600;
        line-height: 150%;
        letter-spacing: .03em;
        margin-bottom: 1rem;
        color: var(--black-main);
      }

      &-more {
        display: flex;
        justify-content: flex-end;

        span {
          margin-right: 1rem;
        }
      }
    }
  }
</style>
