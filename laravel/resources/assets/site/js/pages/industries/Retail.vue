<template>
  <main class="retail">
    <HeroSection
      class="hero-section"
      :title="['Custom', 'Retail & E‑Commerce', 'Web and Mobile App', 'Development Services']"
      :desc="['Cutting-edge e-commerce and retail software solutions for', 'online marketplaces and retail businesses to transform the', 'shopping experience and drive operational efficiency.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/retail/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Custom Retail', 'Development Services']"
      :headerDesc="['We build apps and eCommerce software to help online', 'retailers manage and sell billions of products easily.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="servicesItems"
      cardType="row-title"
      :columns="{
        650: 1,
        default: 3
      }"
    >
      <template v-slot:cursor-follow>
        <img class="services-section__bg-lines bg-absolute" src="/images/site/icons/abstract/fig-27.svg" alt="">
      </template>
    </ListSection>

    <FeaturesSection/>
    
    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development services to all-sized', 'e-commerce businesses and startups functioning in the retail industry.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="careItems"
      cardType="img-title"
      :columns="{
        576: 1,
        default: 3
      }"
    />

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'E-Commerce Software']"
      headerDesc="We take care of the tech layer to help retail business owners to operate better and sell more."
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
import FeaturesSection from '@/js/components/pages/industries/retail/FeaturesSection'
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
          name: 'Retail & E-Commerce',
          url: '/industries/retail-ecommerce-software-development'
        }
      ],

      servicesItems: [
        {
          title: 'Retail Mobile App Development',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Omnichannel Retail Solutions ',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Online Store Maintenance and Support',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Retail Web Development Services',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Third-Party Services Integration',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Accounting System Development',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'Online Store Migration',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'POS Systems for Retail',
          icon: '/images/site/industries/retail/services/icon.svg'
        },
        {
          title: 'CRM Implementation',
          icon: '/images/site/industries/retail/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'E-Commerce Stores',
          imgURL: '/images/site/industries/retail/care/1.svg'
        },
        {
          title: 'Online Marketplaces',
          imgURL: '/images/site/industries/retail/care/2.svg'
        },
        {
          title: 'Retail Startups',
          imgURL: '/images/site/industries/retail/care/3.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Fast Conversions',
          desc: 'Improve your website conversion rate with attractive design, convenient interface, and powerful functionality.',
          imgURL: '/images/site/industries/retail/benefits/1.svg'
        },
        {
          title: 'Customer Loyalty',
          desc: 'Validate your customers changing mood to offer personalized shopping experience and get repeat purchases.',
          imgURL: '/images/site/industries/retail/benefits/2.svg'
        },
        {
          title: 'Efficient Operations',
          desc: 'Manage your online business at the full speed to gain higher ROI and handle millions of orders easily.',
          imgURL: '/images/site/industries/retail/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .retail {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 45%;
          top: 50%;

          @media (max-width: 1510px) {
            top: 50%;
            width: 40%;
          }
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 33.3%;

          @media (max-width: 1530px) {
            width: 30%;
          }

          @media (max-width: 650px) {
            width: 90%;
          }
        }
      }

      &__bg-lines {
        position: absolute;
        z-index: -1;
        opacity: .5;
        left: 2%;
        top: -15%;
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__row {
          justify-content: space-evenly;
        }

        &__item {
          width: 17%;

          @media (max-width: 1199px) {
            width: 25%;
          }

          @media (max-width: 575px) {
            width: 90%;
            max-width: 32rem;
          }
        }
      }
    }

    .benefits-section {
      &__bg {
        &-dots {
          left: 40%;
          top: 10%;
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