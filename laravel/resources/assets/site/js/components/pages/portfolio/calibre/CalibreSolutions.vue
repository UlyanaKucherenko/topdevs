<template>
  <div class="calibre-solutions" v-scroll-reveal>
    <div class="container">
      <PortfolioHeader
        class="calibre-solutions-header calibre-header"
        :headerColumnBreakpoint="1400"
        titleText="Solutions"
        titleTextColor="var(--case-color-primary)"
        :descText="[
          'We have started the idea development right away. The first stage was to create a mobile app for iOS platform with only core functionality. We have also decided to show the investors how the service users and watchmakers can control the repairing process. For that purpose, we have developed the web resource.', 
          'Ultimately, our team has prepared the materials necessary for the client presentation to potential investors. It included an iOS demo app and a web version with an admin panel.'
        ]"
        asideClass="calibre-solutions-header__aside"
      >
        <div  
          class="calibre-header__line"
          slot="titleImg"
        />
      </PortfolioHeader>

      <div class="calibre-solutions__list">
        <div 
          class="calibre-solutions__item"
          :class="{'calibre-solutions__item--reverse': index % 2}"
          v-for="(item, index) in items" :key="index"
          v-scroll-reveal
        >
          <picture class="calibre-solutions__item-img">
            <source media="(max-width: 575px)" :srcset="item.imgURL.slice(0,-4) + '-575.png'">
            <img :src="item.imgURL" alt="">
          </picture>

          <PortfolioBlockBase
            class="calibre-solutions__item-info"
            :titleText="item.titleText"
            :descText="item.descText"
            titleColor="var(--case-color-primary)"
            descColor="var(--case-color-black)"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioHeader, PortfolioBlockBase},

  data() {
    return {
      items: [
        {
          titleText: '01. Service Center Tracking',
          descText: 'The app helps to accurately find an authorized watch service and repair center within the specified radius on the map.',
          imgURL: '/images/site/portfolio/calibre/solutions/mockup-1.png'
        },
        {
          titleText: '02. Ownership Transfer',
          descText: 'Watch owners can sell their devices and transfer the watch records with the entire history to the new owner via a QR code scanning.',
          imgURL: '/images/site/portfolio/calibre/solutions/mockup-2.png'
        },
        {
          titleText: '03. Real-Time Repair Monitoring',
          descText: 'Users are able to monitor the watch repair process seeing the current stage and the expected time when the work will be completed.',
          imgURL: '/images/site/portfolio/calibre/solutions/mockup-3.png'
        },
        {
          titleText: '04. Manufacturing Control',
          descText: 'The app provides an opportunity for a watchmaker to control the order and accuracy of each watch repair stage conducted by the service center.',
          imgURL: '/images/site/portfolio/calibre/solutions/mockup-4.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .calibre {
    .calibre-solutions {
      padding-bottom: 20rem;

      @media (max-width: 1400px) {
        padding-bottom: 15rem;
      }

      @media (max-width: 1199px) {
        padding-bottom: 10rem;
      }

      @media (max-width: 575px) {
        padding-bottom: 7rem;
      }

      &-header {
        position: relative;
        margin-bottom: calc(var(--space-unit) * 7.4); 

        @media (max-width: 1400px) {
          // max-width: 88rem;
        }

        &__aside {
          @media (min-width: 992px) {
            width: 59%;

            @media (max-width: 1400px) {
              width: 72%;
            }
          }
        }
      }

      &__item {
        padding: 10vw 0;
        position: relative;
        z-index: 0;

        @media (max-width: 575px) {
          max-width: 40rem;
          margin: 0 auto;
        }

        &-img {
          img, source {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translate(-4%, -50%);
            width: 56%;
            z-index: -1;

            @media (max-width: 575px) {
              position: static;
              transform: none;
              width: 100%;
              margin-bottom: 1rem;
            }
          } 
        }

        &--reverse {
          @media (min-width: 576px) {
            .calibre-solutions__item {
              &-info {
                @media (max-width: 1600px) {
                  margin-left: 15%;
                }

                @media (max-width: 991px) {
                  margin-left: 0;
                  margin-right: auto
                }
              }

              &-img {
                img, source {
                  left: auto;
                  right: 0;
                  transform: translate(4%, -50%);
                }
              }
            }
          }
        }

        &-info {
          @media (min-width: 576px) {
            max-width: 39rem;
            margin-left: 25%;

            @media (max-width: 1199px) {
              max-width: 32.7rem;
            }

            @media (max-width: 991px) {
              max-width: 50%;
              margin-left: 35%;
            }
          }
        }
      }
    }
  }
</style>