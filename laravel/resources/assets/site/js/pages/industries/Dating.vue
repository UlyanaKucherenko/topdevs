<template>
  <main class="dating">
    <HeroSection
      class="hero-section"
      :title="['Custom Dating', 'Website and Mobile App', 'Development Services']"
      :desc="['Exclusive dating apps with location-based matchmaking to', 'connect people and provide an exceptional user experience.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/dating/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Dating App', 'Development Services']"
      :headerDesc="['We create dating apps for iOS and Android phones, web communities to', 'satisfy all user tastes and solve their challenges easily.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="servicesItems"
      cardType="row-title"
      :columns="{
        650: 1,
        default: 2
      }"
    >
      <template v-slot:cursor-follow>
        <img class="services-section__bg-lines bg-absolute" src="/images/site/icons/abstract/fig-27.svg" alt="">
        <img class="services-section__bg-cursor-follow bg-absolute" src="/images/site/icons/abstract/fig-38.svg" alt="" v-cursor-follow="{multiplier: .4}">
      </template>
    </ListSection>

    <FeaturesSection/>

    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development services to', 'businesses and startups engaged in the dating industry.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="careItems"
      cardType="img-title"
      :columns="{
        992: 2,
        576: 1,
        default: 5
      }"
    >
      <template v-slot:cursor-follow>
        <img class="care-section__bg-left-circles bg-absolute" src="/images/site/icons/abstract/fig-39.svg" alt="" v-cursor-follow="{multiplier: .3}">
        <img class="care-section__bg-right-circles bg-absolute" src="/images/site/icons/abstract/fig-41.svg" alt="" v-cursor-follow="{multiplier: .2}">
      </template>
    </ListSection>

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of Dating', 'Applications']"
      headerDesc="Utilize our dating application development experience to create the next big thing in the online dating industry."
      headerIcon="/images/site/icons/abstract/header-5.svg"
      :items="benefitsItems"
      :listOptions="{
        columns: {
          default: 1
        }
      }"
    >
      <template v-slot:cursor-follow>
        <img src="/images/site/icons/abstract/fig-33.svg" alt="" class="benefits-section__bg-dots bg-absolute" v-cursor-follow="{multiplier: .5}">
      </template>
    </SplittedHeaderSection>
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ListSection from '@/js/components/pages/services/ListSection'
import SplittedHeaderSection from '@/js/components/global/sections/SplittedHeaderSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import FeaturesSection from '@/js/components/pages/industries/dating/FeaturesSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'

export default {
  components: {HeroSection, TheBreadcrumbs, ListSection, SplittedHeaderSection, PortfolioSection, LearnSection, ConnectSection, FeaturesSection},

  data() {
    return {
       breadcrumbsItems: [
        {
          name: 'Industries',
          url: '/industries'
        },
        {
          name: 'Dating',
          url: '/industries/dating-app-development'
        }
      ],

      servicesItems: [
        {
          title: 'Native iOS Dating App Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Relationship Tracker Apps',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Native Android Dating App Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Matchmaking Mobile App Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Dating App Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Dating Website Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Matrimony App Development',
          icon: '/images/site/industries/dating/services/icon.svg'
        },
        {
          title: 'Dating Application Design',
          icon: '/images/site/industries/dating/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Dating Websites Expanding To Mobile',
          imgURL: '/images/site/industries/dating/care/1.svg'
        },
        {
          title: 'Geo-Specific Dating Networks',
          imgURL: '/images/site/industries/dating/care/2.svg'
        },
        {
          title: 'Dating Startups',
          imgURL: '/images/site/industries/dating/care/3.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Audience Expansion',
          desc: 'Enlarge your user base and form a loyal clientele with a mobile dating app for iOS and Android devices.',
          imgURL: '/images/site/industries/dating/benefits/1.svg'
        },
        {
          title: 'Secure Communication',
          desc: 'Ensure delightful communication within your dating software for the audience that keeps all their secrets in a safe place.',
          imgURL: '/images/site/industries/dating/benefits/2.svg'
        },
        {
          title: 'Unrivaled Profits',
          desc: 'Benefit from the well-known money-making business by simply creating a charming dating application.',
          imgURL: '/images/site/industries/dating/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .dating {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 36%;
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 calc(var(--section-pd-y-big) * 1.25);

      .items-list {
        @media (max-width: 1099px) {
          width: 100%;
        }

        &__item {
          width: 40%;
          margin-right: 2.5%;

          &:last-child {
            margin-right: 0;
          }

          @media (max-width: 650px) {
            width: 90%;
          }
        }

        &__row {
          justify-content: center;
        }
      }

      &__bg-lines {
        opacity: .5;
        left: 2%;
        top: 0;
        transform: translateY(-13%);
      }

      &__bg-cursor-follow {
        left: 8%;
        top: 33%;

        @media (max-width: 1099px) {
          display: none;
        }
      }

      &__photo {
        width: 18.5%;
        left: 15%;
        bottom: 17%;

        @media (max-width: 1099px) {
          display: none;
        }
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 19%;

          @media (max-width: 1199px) {
            width: 30%;
          }

          @media (max-width: 575px) {
            width: 90%;
            max-width: 32rem;
          }
        }

        @media (max-width: 992px) and (min-width: 576px) {
          &__item {
            width: 40%;
            margin: 0 5%;
          }

          &__row {
            justify-content: flex-start;
          }
        }
      }

      &__bg {
        &-left-circles {
          width: 6%;
          left: 4%;
          bottom: 20%;
        }

        &-right-circles {
          width: 8%;
          right: 2%;
          bottom: 15%;
        }

        @media (max-width: 1199px) {
          &-left-circles, &-right-circles {
            display: none;
          }
        }

        &-dots {
          right: 8%;
          bottom: 10%;

          @media (max-width: 1350px) {
            display: none;
          }
        }
      }
    }

    .benefits-section {
      &__bg {
        &-dots {
          left: 37%;
          bottom: 10%;
          width: 7%;
        }

        @media (max-width: 1150px) {
          &-dots {
            display: none;
          }
        }
      }
    }
  }
</style>