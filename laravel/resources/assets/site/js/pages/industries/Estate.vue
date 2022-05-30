<template>
  <main class="estate">
    <HeroSection
      class="hero-section"
      :title="['Custom Real Estate', 'Web and Mobile App', 'Development Services']"
      :desc="['Modern real estate software solutions for architecting,', 'managing, buying, renting, booking, and selling properties.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/estate/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Real Estate App', 'Development Services']"
      :headerDesc="['We create all types of software for real estate from scratch or', 'by enhancing an existing product. ']"
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
        <img class="services-section__bg-cursor-follow bg-absolute" src="/images/site/icons/abstract/fig-40.svg" alt="" v-cursor-follow="{multiplier: .3}">
      </template>
    </ListSection>

    <FeaturesSection/>
    
    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development services to all-sized', 'real estate businesses and startups.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="careItems"
      cardType="img-title"
      :columns="{
        576: 1,
        default: 3
      }"
    >
      <template v-slot:cursor-follow>
        <img class="care-section__bg-left bg-absolute" src="/images/site/icons/abstract/fig-37.svg" alt="" v-cursor-follow="{multiplier: .2}">
        <img class="care-section__bg-right bg-absolute" src="/images/site/icons/abstract/fig-32.svg" alt="" v-cursor-follow="{multiplier: .2}">
      </template>
    </ListSection>

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of Real', 'Estate Software']"
      headerDesc="Leverage the tech advancements to reach your business goals and get more profits."
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
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import FeaturesSection from '@/js/components/pages/industries/estate/FeaturesSection'
import SectionLayout from '@/js/layouts/SectionLayout'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'

export default {
  components: {HeroSection, TheBreadcrumbs, ListSection, SplittedHeaderSection, PortfolioSection, LearnSection, ConnectSection, FeaturesSection, SectionLayout, CardsSlider},

  data() {
    return {
       breadcrumbsItems: [
        {
          name: 'Industries',
          url: '/industries'
        },
        {
          name: 'Real Estate',
          url: '/industries/real-estate-app-development'
        }
      ],

      servicesItems: [
        {
          title: 'MLS Development',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'MLS Web Services',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'Database Integration',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'Real Estate Valuation Software',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'CRM Development',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'Real Estate Transaction Standard',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'Real Estate Mobile App Development',
          icon: '/images/site/industries/estate/services/icon.svg'
        },
        {
          title: 'Property Management Systems',
          icon: '/images/site/industries/estate/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Real Estate Buyers',
          imgURL: '/images/site/industries/estate/care/1.svg'
        },
        {
          title: 'Real Estate Companies',
          imgURL: '/images/site/industries/estate/care/2.svg'
        },
        {
          title: 'Real Estate Aggregators',
          imgURL: '/images/site/industries/estate/care/3.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Qualified Leads',
          desc: 'Connect people with an intention to buy with property sellers via real estate mobile apps and web platforms.',
          imgURL: '/images/site/industries/estate/benefits/1.svg'
        },
        {
          title: 'Fitting Bookings ',
          desc: 'Increase the bookings of your property tours or inquiries for rentals to conduct real estate operations more efficiently.',
          imgURL: '/images/site/industries/estate/benefits/2.svg'
        },
        {
          title: 'Global Reach',
          desc: 'Expand your target audience with a real estate app that mitigates the distance between buyers and the property.',
          imgURL: '/images/site/industries/estate/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .estate {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 35%;

          @media (max-width: 1099px) {
            width: 32%;
          }
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list {
        width: 75%;

        @media (max-width: 991px) {
          width: 100%;
        }

        &__item {
          width: 45%;

          @media (max-width: 650px) {
            width: 90%;
          }
        }
      }

      &__bg-lines {
        opacity: .5;
        left: 2%;
        top: -15%;
      }

      &__bg-cursor-follow {
        width: 13.5%;
        bottom: 24%;
        right: 15%;

        @media (max-width: 991px) {
          display: none;
        }
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__row {
          justify-content: space-evenly;
        }

        &__item {
          width: 19%;

          @media (max-width: 1199px) {
            width: 25%;
          }

          @media (max-width: 575px) {
            width: 90%;
            max-width: 32rem;
          }
        }
      }

      &__bg {
        &-left, &-right {
          @media (max-width: 1099px) {
            display: none;
          }
        }

        &-left {
          left: 13%;
          bottom: 22%;

          @media (max-width: 1700px) {
            left: 7%;
          }
        }

        &-right {
          right: 15%;
          bottom: 20%;
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