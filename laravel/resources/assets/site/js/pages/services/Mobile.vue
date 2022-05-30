<template>
  <main class="mobile">
    <HeroSection
        class="hero-section"
        :title="['Mobile App', 'Development', 'Services']"
        :desc="['Perfectly crafted custom iOS and Android apps', 'for every industry to bring unparalleled user', 'experience and meet your business objectives.']"
        btnText="Build Your App"
    >
      <template v-slot:img>
        <HeroSectionImageNew
            v-if="windowWidth > 991"
            class="hero-section__bg-img"
        />
        <img v-else src="/images/site/services/mobile/hero-new.svg" alt="">
      </template>
    </HeroSection>

    <TheBreadcrumbs :items="breadcrumbsItems"/>
    <MobileOfferSection/>

    <WhyNativeSection/>
    <FunctionalitySection/>
    <ComparisonChartSection/>
    <ServicesSectionLayout
        class="benefits-section"
        headerTitle="Benefits of Native Apps"
        :headerDesc="[`We choose to bring`, `success to our clients`,` via an exceptional user journey that native apps give both for tech-savvy and non-technical product owners.`]"
        headerMode="left"
    >
      <CardsSlider
          :items="benefitsItems"
          :sliderOptions="{loop: false}"
          cardType="row-full"
          :cardComponent="CustomCard"
          :slidesCount="{default: 1}"

      />
      <template v-slot:cursor-follow>
        <img src="/images/site/services/mobile/benefits/1.png" alt="" class="benefits-section__cursor-follow"
             v-cursor-follow="{multiplier: .4}">
      </template>

    </ServicesSectionLayout>

    <StagesSection/>

    <MobilePortfolioSection class="portfolio-section"/>

    <MobileTechSection
        :headerTitle="['Technology Stack']"
        :headerDesc="['Our in-depth expertise in top-notch technologies is at your service to create efficient mobile solutions.']"
    >
    </MobileTechSection>

    <ClientsReviews />

    <MobileLearnSection
        headerTitle="Learn More"
        :headerDesc="['Get to know the newest technology trends and how we will incorporate them into your DevOps solution.']"
    />

    <ConnectSection
        headerTitle="Connect with Experts"
        :headerDesc="['Your idea - our execution. Let\'s create', 'meaningful solutions together!']"
    />

    <img
        class="page-bg-img"
        src="/images/site/services/outstaffing/lines2.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import StagesSection from '@/js/components/pages/services/mobile/StagesSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'
import HeroSectionImage from '@/js/components/pages/services/mobile/HeroSectionImage'

import WhyNativeSection from "../../components/pages/services/mobile/WhyNativeSection";
import ServicesSectionLayout from "../../components/pages/services/mobile/global/ServicesSectionLayout";
import FunctionalitySection from "../../components/pages/services/mobile/FunctionalitySection";
import ComparisonChartSection from "../../components/pages/services/mobile/ComparisonChartSection";
import MobilePortfolioSection from "../../components/pages/services/mobile/MobilePortfolioSection";
import MobileTechSection from "../../components/pages/services/mobile/MobileTechSection";
import MobileLearnSection from "../../components/pages/services/mobile/MobileLearnSection";
import MobileOfferSection from "../../components/pages/services/mobile/MobileOfferSection";
import CustomCard from "../../components/pages/services/mobile/CustomCard";
import HeroSectionImageNew from "../../components/pages/services/mobile/HeroSectionImageNew";
import ClientsReviews from "../../components/pages/services/mobile/ClientsReviews";


export default {
  components: {
    ClientsReviews,
    HeroSectionImageNew,
    CustomCard,
    MobileOfferSection,
    MobileLearnSection,
    MobileTechSection,
    MobilePortfolioSection,
    ComparisonChartSection,
    FunctionalitySection,
    ServicesSectionLayout,
    WhyNativeSection,
    HeroSection,
    TheBreadcrumbs,
    StagesSection,
    ConnectSection,
    CardsSlider,
    HeroSectionImage
  },

  data() {
    return {
      CustomCard,
      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'Mobile App Development',
          url: '/services/mobile-app-development'
        }
      ],

      benefitsItems: [
        {
          title: 'Performance',
          desc: 'Being optimized for a particular platform, native applications are faster, smarter and more efficient while operating with a huge amount of data.'
        },
        {
          title: 'Security',
          desc: 'Only native development of mobile apps guarantees reliable data protection, as it requires the possibility to operate under high loads.'
        },
        {
          title: 'Usability',
          desc: 'Native applications leverage familiar gestures and actions to create an interactive and easy-to-use experience for users.'
        },
        {
          title: 'Stability',
          desc: 'The continuous support of iOS and Android from respective organizations ensures that native applications will function seamlessly.'
        },
        {
          title: 'Access to Functionality',
          desc: 'Native apps give unlimited possibilities for users to interact with the device’s hardware, e.g. GPS, camera, microphone, calendar, etc.'
        }
      ],

      portfolioItems: [
        {
          imgURL: '/images/site/services/outsourcing/portfolio/1.png',
          title: 'Slogger',
          desc: 'JavaScript, Jquery, PHP'
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/2.png',
          title: 'Helpy',
          desc: 'JavaScript, Jquery, PHP'
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/3.png',
          title: 'Tmm',
          desc: 'JavaScript, Jquery, PHP'
        }
      ],

      techItems: [
        {
          width: 100,
          title: '-',
          styleOptions: {
            default: {
              gridTemplateColumns: 'repeat(2, max-content)',
              columnGap: 'calc(var(--space-unit) * 10)',
              justifyContent: 'center'
            },
          },
          columns: [
            {
              title: 'iOS',
              imgURL: '/images/site/tech-logos/ios.svg',
              items: [
                {
                  title: 'Objective - C',
                  imgURL: '/images/site/tech-logos/obj-c.svg'
                },
                {
                  title: 'Swift',
                  imgURL: '/images/site/tech-logos/swift.svg'
                }
              ]
            },
            {
              title: 'Android',
              imgURL: '/images/site/tech-logos/android.svg',
              items: [
                {
                  title: 'Java',
                  imgURL: '/images/site/tech-logos/java.svg'
                },
                {
                  title: 'Kotlin',
                  imgURL: '/images/site/tech-logos/kotlin.svg'
                }
              ]
            }
          ]
        }
      ]
    }
  }
}
</script>

<style lang="scss">

:root {
  --case-color-grey: rgba(255, 255, 255, 0.2);
  --color-gradient: radial-gradient(52.52% 160.99% at 50% 51.07%, #010311 0%, #060921 100%);
  --color-bg-section-dark: var(--color-gradient);
  --color-border: var(--case-color-grey);

  --mulish: 'Mulish', sans-serif;
}

.mobile {


  .hero-section {
    &__title {
      font-family: var(--mulish);
      font-weight: 400;
      text-transform: uppercase;
      letter-spacing: 0.03em;

      span:nth-child(3) {
        color: var(--blue-main);
      }
    }

    @media (min-width: 992px) {
      &__info {
        width: max-content;
      }

      //&__img {
      //  width: 77%;
      //  transform: translateY(-61%);
      //}
    }
  }

  .benefits-section {
    padding-bottom: var(--section-pd-y-big);

    &__cursor-follow {
      position: absolute;
      right: 10%;
      top: 0;
      z-index: -1;
      //opacity: .5;

      @media (max-width: 800px) {
        display: none;
      }
    }

    .filled-card__title {
      color: var(--red-light);
    }
  }

  .portfolio-section {
    padding: var(--section-pd-y-big) 0;

    &__cursor-follow {
      position: absolute;
      left: 40%;
      top: 8%;

      @media (max-width: 991px) {
        display: none;
      }
    }
  }

  .tech-section {
    &__cursor-follow {
      position: absolute;
      right: 9%;
      top: 5%;
      width: 10%;

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
}
</style>
