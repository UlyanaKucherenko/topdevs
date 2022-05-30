<template>
  <main class="healthcare">
    <HeroSection
      class="hero-section"
      :title="['Custom', 'Medical & Healthcare', 'Web and Mobile App', 'Development Services']"
      :desc="['Medical solutions for healthcare institutions to warrant', 'positive patient experience and modernized workflows.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/healthcare/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Healthcare Software', 'Development Services']"
      :headerDesc="['We deliver digital solutions for healthcare organizations to', 'simplify operations, diagnosis, treatment, and monitoring.']"
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
        <img class="services-section__bg-cursor-follow bg-absolute" src="/images/site/icons/abstract/fig-29.svg" alt="" v-cursor-follow="{multiplier: .4}">
        <img class="services-section__photo bg-absolute" src="/images/site/industries/healthcare/services/photo.jpg" alt="" v-scroll-reveal>
      </template>
    </ListSection>

    <FeaturesSection/>

    <!-- <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development', 'services to all-sized businesses and startups in need', 'of logistics and tracking digital solutions.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      :items="careItems"
      cardType="img-title"
      :columns="{
        992: 2,
        450: 1,
        default: 5
      }"
    /> -->
    
    <SectionLayout
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development', 'services to all-sized medical businesses and startups', 'functioning in the healthcare industry.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider 
        :items="careItems"
        :slidesCount="{
          1200: 3,
          768: 2,
          576: 1,
          default: 5
        }"
        :sliderOptions="{slideBy: 1}"
        cardType="img-title"
      />
    </SectionLayout>

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'Healthcare Software']"
      headerDesc="Leave the tech part to our healthcare development company and focus on innovations."
      headerIcon="/images/site/icons/abstract/header-5.svg"
      :items="benefitsItems"
      :listOptions="{
        columns: {
          default: 1
        }
      }"
    >
      <template v-slot:cursor-follow>
        <img src="/images/site/icons/abstract/fig-32.svg" alt="" class="benefits-section__bg-circles bg-absolute" v-cursor-follow="{multiplier: .5}">
        <img src="/images/site/icons/abstract/fig-31.svg" alt="" class="benefits-section__bg-dots bg-absolute" v-cursor-follow="{multiplier: .3}">
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
import FeaturesSection from '@/js/components/pages/industries/healthcare/FeaturesSection'
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
          name: 'Healthcare',
          url: '/industries/healthcare-software-development'
        }
      ],

      servicesItems: [
        {
          title: 'Healthcare Mobile App Development',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Medical Education Platforms',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Healthcare Solutions Development',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Pharmacy Management Systems',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Fitness & Nutrition Software',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Healthcare Analytics & Business Intelligence',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Secure Data Storage',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Medical Billing Systems',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Health Information Exchange Platforms',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        },
        {
          title: 'Third-Party Systems Integration',
          icon: '/images/site/industries/healthcare/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Healthcare Product Companies',
          imgURL: '/images/site/industries/healthcare/care/1.svg'
        },
        {
          title: 'Medical Research Centres',
          imgURL: '/images/site/industries/healthcare/care/2.svg'
        },
        {
          title: 'Medical Equipment Manufacturers',
          imgURL: '/images/site/industries/healthcare/care/3.svg'
        },
        {
          title: 'Medical Startups & ISVs',
          imgURL: '/images/site/industries/healthcare/care/4.svg'
        },
        {
          title: 'Care Providers',
          imgURL: '/images/site/industries/healthcare/care/5.svg'
        },
        {
          title: 'Hospitals & Clinics',
          imgURL: '/images/site/industries/healthcare/care/6.svg'
        },
        {
          title: 'Clinical Laboratories',
          imgURL: '/images/site/industries/healthcare/care/7.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Positive Patient Experience',
          desc: 'Engage patients with their treatment via specialized applications like pill tracker apps or health state monitoring.',
          imgURL: '/images/site/industries/healthcare/benefits/1.svg'
        },
        {
          title: 'Medical Errors Decrease',
          desc: 'Eliminate medical mistakes via electronic health record systems that resolve communication issues and tune data flow.',
          imgURL: '/images/site/industries/healthcare/benefits/2.svg'
        },
        {
          title: 'Efficient Workflows',
          desc: 'Refine medical operations with healthcare software that handles billing procedures, appointment scheduling, and more.',
          imgURL: '/images/site/industries/healthcare/benefits/3.svg'
        },
        {
          title: 'Cost Saving',
          desc: 'Reduce healthcare costs with preventive measures that specialized applications provide to monitor patients remotely.',
          imgURL: '/images/site/industries/healthcare/benefits/4.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .healthcare {
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
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list {
        width: 65%;
        
        @media (max-width: 1150px) {
          width: 100%;
        }

        &__item {
          width: 35%;

          @media (max-width: 1300px) {
            width: 45%;
          }

          @media (max-width: 1150px) {
            width: 35%;
          }

          @media (max-width: 850px) {
            width: 45%;
          }

          @media (max-width: 650px) {
            width: 90%;
          }
        }
      }

      &__photo {
        right: 16%;
        bottom: 25%;
        width: 18.75%;

        @media (max-width: 1150px) {
          display: none;
        }
      }

      &__bg {
        &-lines {
          opacity: .5;
          left: 4%;
          top: -17%;
        }

        &-cursor-follow {
          right: 8%;
          top: 27%;

          @media (max-width: 1150px) {
            display: none;
          }
        }
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .cards-slider__item-wrapper {
        padding: 0;
      }
    }

    .benefits-section {
      &__bg {
        &-circles {
          left: 40%;
          top: 10%;
        }

        &-dots {
          left: 30%;
          bottom: 5%;
          width: 6.5%;
        }

        @media (max-width: 1150px) {
          &-circles, &-dots {
            display: none;
          }
        }
      }
    }
  }
</style>