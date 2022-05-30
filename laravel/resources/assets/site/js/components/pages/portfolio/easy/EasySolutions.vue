<template>
  <div class="easy-solutions" v-scroll-reveal>
    <div class="container">
      <div class="easy-solutions__container">
        <div class="easy-solutions__list">
          <div
              class="easy-solutions__item"
              :class="{'easy-solutions__item--reverse': index % 2}"
              v-for="(item, index) in items" :key="`item+${index}`"
              v-scroll-reveal
          >
            <div class="easy-solutions__item-info">
              <h3 class="easy-solutions__item-title portfolio-title">
                <span class="easy-solutions__item-number">{{ item.number }}</span>
                {{ item.title }}
              </h3>
              <div class="easy-solutions__item-subtitle portfolio-desc portfolio-desc--sm">{{ item.subtitle }}</div>
            </div>

            <picture class="easy-solutions__item-img">
              <source media="(max-width: 992px)" :srcset="item.imgSmallURL">
              <img :src="item.imgURL" alt="">
              </picture>
          </div>
        </div>
      </div>
    </div>
    <picture class="easy-solutions__mokap-left">
      <source media="(max-width: 768px)" srcset="/images/site/portfolio/easy/solutions/mokap-left-768.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/easy/solutions/mokap-1200.png">
      <img src="/images/site/portfolio/easy/solutions/mokap-2.png" alt="">
    </picture>
    <picture class="easy-solutions__mokap-right">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/easy/solutions/mokap-right-1200.png">
      <img src="/images/site/portfolio/easy/solutions/mokap-3.png" alt="">
    </picture>
  </div>
</template>

<script>
export default {
  name: "EasySolutions",
  data() {
    return {
      items: [
        {
          number: '1.',
          title: 'Emergency Notifications',
          subtitle: 'In case of accidents, the selected beforehand contacts, for instance, children or emergency help will get an SOS notification with a specific location via SMS.',
          imgURL: '/images/site/portfolio/easy/solutions/mob-1.png',
          imgSmallURL: '/images/site/portfolio/easy/solutions/small-mob-1.png'

        },
        {
          number: '2.',
          title: 'Greetings Card',
          subtitle: 'The app users can receive notifications about upcoming celebrations of their loved ones. This way they will not miss it and can always send a prepared greeting card. Just one touch and the picture message gets sent to the addressee.',
          imgURL: '/images/site/portfolio/easy/solutions/mob-2.png',
          imgSmallURL: '/images/site/portfolio/easy/solutions/small-mob-2.png'
        },
        {
          number: '3.',
          title: 'Make Calls',
          subtitle: 'With the polished for elder people app design, making calls became easy and pleasant. The same with making calls to messengers and using banking or other household services.',
          imgURL: '/images/site/portfolio/easy/solutions/mob-3.png',
          imgSmallURL: '/images/site/portfolio/easy/solutions/small-mob-3.png'
        },
        {
          number: '4.',
          title: 'Google the Important',
          subtitle: 'The app helps to quickly understand smartphone logic. Now elderly people can use smart search to find the right people and the desired content online.',
          imgURL: '/images/site/portfolio/easy/solutions/mob-3.png',
          imgSmallURL: '/images/site/portfolio/easy/solutions/small-mob-4.png'
        },
      ]
    }
  },
}
</script>

<style lang="scss">

.easy-solutions {
  position: relative;
  z-index: 0;
  padding: calc(var(--space-section) * 1.4) 0;

  &__container {
    @media (min-width: 1200px) {
      padding: 0 5%;
    }
  }

  &__mokap-left {
    position: absolute;
    bottom: 24%;
    left: 0;
    z-index: -1;
    @media (max-width: 992px) {
      left: -25%;
    }

    @media (max-width: 768px) {
      left: -20%;
      top: 0;
      bottom: 0;
    }
    @media (max-width: 576px) {
      left: -86%;
    }
  }

  &__mokap-right {
    position: absolute;
    right: 0;
    bottom: 20%;
    z-index: -1;

    @media (max-width: 992px) {
      right: -25%;
    }

    @media (max-width: 768px) {
      right: -20%;
    }

    @media (max-width: 576px) {
      right: -86%;
      bottom: 0;
    }
  }

  &__item {
    --info-offset: 9rem;

    display: flex;
    align-items: center;
    justify-content: flex-end;
    position: relative;
    margin-top: -7%;

    @media (max-width: 1500px) {
      margin-top: -3%;
    }

    @media (max-width: 991px) {
      --info-offset: 6rem;
    }

    @media (max-width: 700px) {
      --info-offset: 0;

      flex-direction: column-reverse;
      margin-top: 0;
      margin-bottom: 7rem;

      &:last-child {
        margin-bottom: 0;
      }

      &:first-child img {
        //transform: translateX(-8%);
      }

      &:nth-child(2) img {
        //transform: translateX(9%);
      }

      &:nth-child(3) {
        .solutions-section__item-number {
          color: #EDF6FF;
        }

        img {
          //transform: translateX(-7.7%);
        }
      }
    }

    &:first-child {
      margin-top: 0;
    }

    &-info {
      position: relative;
      padding-right: var(--info-offset);

      @media (max-width: 700px) {
        text-align: center;
        margin-top: 2rem;
      }
    }

    &-subtitle {
      max-width: 30rem;

      @media (max-width: 700px) {
        max-width: 47rem;
      }
    }

    &-number {
      color: var(--case-color-b1);
    }

    &--reverse {
      @media (min-width: 701px) {
        flex-direction: row-reverse;

        .easy-solutions__item {
          &-info {
            padding-right: 0;
            padding-left: var(--info-offset);
          }
        }
      }
    }

    &-title {
      color: var(--case-color-grey);
      margin-bottom: calc(var(--space-unit) * 0.2)
    }
  }
}

</style>