<template>
  <main class="sports">
    <HeroSection
      class="hero-section"
      :title="['Custom', 'Fitness & Sports', 'Web and Mobile App', 'Development Services']"
      :desc="['Specialized health and fitness apps for every aspect of', 'sports activities from personal training to managing', 'sports events and beyond.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/sports/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Sports App', 'Development Services']"
      :headerDesc="['We make web and mobile apps for sports teams and individuals from', 'scratch or enhance existing apps for diverse kinds of sports.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="servicesItems"
      cardType="row-title"
      :columns="{
        992: 2,
        450: 1,
        default: 4
      }"
    >
      <template v-slot:cursor-follow>
        <img class="services-section__bg-lines" src="/images/site/icons/abstract/fig-27.svg" alt="">
      </template>
    </ListSection>

    <FeaturesSection/>

    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development', 'services to all-sized businesses and startups', 'functioning in the fitness and sports industry.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      :items="careItems"
      cardType="img-title"
      :columns="{
        992: 2,
        450: 1,
        default: 5
      }"
    />

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'Sports & Fitness Apps']"
      headerDesc="Focus on your business goals while we take care of your digital sports solution."
      headerIcon="/images/site/icons/abstract/header-16.svg"
      :items="benefitsItems"
      :listOptions="{
        columns: {
          default: 1
        }
      }"
    />
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ListSection from '@/js/components/pages/services/ListSection'
import SplittedHeaderSection from '@/js/components/global/sections/SplittedHeaderSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import FeaturesSection from '@/js/components/pages/industries/sports/FeaturesSection'

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
          name: 'Sports & Fitness',
          url: '/industries/sports-fitness-app-development'
        }
      ],

      servicesItems: [
        {
          title: 'Sports Mobile App Development',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Sports Health Software Solutions',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Data Management Software Development',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Sports Coaching Software',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Web Platforms Development',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Nutrition Management Software',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Fitness Club and Gym Management Software',
          icon: '/images/site/industries/sports/services/icon.svg'
        },
        {
          title: 'Third-Party Systems Integration',
          icon: '/images/site/industries/sports/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Fitness Coaches',
          imgURL: '/images/site/industries/sports/care/1.svg'
        },
        {
          title: 'Yoga Instructors',
          imgURL: '/images/site/industries/sports/care/2.svg'
        },
        {
          title: 'Gym Owners',
          imgURL: '/images/site/industries/sports/care/3.svg'
        },
        {
          title: 'Golf Court Owners',
          imgURL: '/images/site/industries/sports/care/4.svg'
        },
        {
          title: 'Dietitians',
          imgURL: '/images/site/industries/sports/care/5.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Fans Engagement',
          desc: 'Stay connected with the fanbase via an all-in-one robust sports solution that manages all athletic activities.',
          imgURL: '/images/site/industries/sports/benefits/1.svg'
        },
        {
          title: 'Mobile Experience',
          desc: 'Enjoy the user-friendliness of mobility solutions that can take you to a new sports arena via live streaming and beyond.',
          imgURL: '/images/site/industries/sports/benefits/2.svg'
        },
        {
          title: 'Sports-Specific Solutions',
          desc: 'Create specialized sports software for any kind of sports activity with a unique feature set and secure data storage. ',
          imgURL: '/images/site/industries/sports/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .sports {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 40%;

          @media (max-width: 1160px) {
            width: 36%;
          }
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 22%;

          @media (max-width: 991px) {
            width: 40%;
          }

          @media (max-width: 450px) {
            width: 90%;
          }
        }
      }

      &__bg-lines {
        position: absolute;
        z-index: -1;
        opacity: .5;
        left: 2%;
        top: -40%;
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {

        &__item {
          width: 17%;

          @media (max-width: 450px) {
            width: 90%;
          }
        }

        @media (max-width: 992px) and (min-width: 451px) {
          &__item {
            width: 40%;
            margin: 0 5%;
          }

          &__row {
            justify-content: flex-start;
          }
        }
      }
    }
  }
</style>