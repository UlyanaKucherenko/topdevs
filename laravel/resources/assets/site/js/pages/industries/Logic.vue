<template>
  <main class="logic">
    <HeroSection
      class="hero-section"
      :title="['Custom', 'Logistics & Tracking', 'Web and Mobile App', 'Development Services']"
      :desc="['Location tracking apps for diverse use cases and', 'multiple business fields from travel to automotive', 'and beyond.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/logic/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Location Tracking App', 'Development Services']"
      :headerDesc="['We implement supply chain systems, location-based services,', 'and real-time monitoring to improve your logistics operations.']"
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
        <img class="services-section__bg-lines" src="/images/site/icons/abstract/fig-27.svg" alt="">
      </template>
    </ListSection>

    <FeaturesSection/>

    <ListSection
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
    >
      <template v-slot:cursor-follow>
        <img class="care-section__bg-fig" src="/images/site/industries/logic/care/bg-fig.svg" alt="">
      </template>
    </ListSection>

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'Logistics Software']"
      headerDesc="Our custom supply chain management software helps to automate hundreds of operations and give beneficial outcomes."
      headerIcon="/images/site/icons/abstract/header-5.svg"
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
import FeaturesSection from '@/js/components/pages/industries/logic/FeaturesSection'

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
          name: 'Logistics & Tracking',
          url: '/industries/logistics-tracking-app-development'
        }
      ],

      servicesItems: [
        {
          title: 'Location Tracking Mobile App Development',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Freight Forwarding Software',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Inventory & Supply Chain Management',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Logistics Software Development',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Business Intelligence Software',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Third-Party Management Systems',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Warehouse Management System',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Mapping & Navigation',
          icon: '/images/site/industries/logic/services/icon.svg'
        },
        {
          title: 'Order Fulfillment System',
          icon: '/images/site/industries/logic/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Freight Companies',
          imgURL: '/images/site/industries/logic/care/1.svg'
        },
        {
          title: 'Freight Forwarders',
          imgURL: '/images/site/industries/logic/care/2.svg'
        },
        {
          title: 'Carriers',
          imgURL: '/images/site/industries/logic/care/3.svg'
        },
        {
          title: 'Food Delivery Companies',
          imgURL: '/images/site/industries/logic/care/4.svg'
        },
        {
          title: 'Travel Agencies',
          imgURL: '/images/site/industries/logic/care/5.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Cost Saving',
          desc: 'Minimize operational costs with optimized transportation routes and continuous reporting system preventing overhead.',
          imgURL: '/images/site/industries/logic/benefits/1.svg'
        },
        {
          title: 'Supply Chain Visibility',
          desc: 'Give your customers an opportunity to see how their product delivery happens to gain trust and returning purchases.',
          imgURL: '/images/site/industries/logic/benefits/2.svg'
        },
        {
          title: 'Process Management',
          desc: 'Monitor each supply chain stage to elevate operational efficiency and strike better business results.',
          imgURL: '/images/site/industries/logic/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .logic {
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
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 28%;

          // @media (max-width: 991px) {
          //   width: 40%;
          // }

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

        @media (max-width: 991px) and (min-width: 451px) {
          &__item {
            width: 40%;
            margin: 0 5%;
          }

          &__row {
            justify-content: flex-start;
          }
        }
      }

      &__bg-fig {
        position: absolute;
        right: 28%;
        bottom: calc(var(--section-pd-y-big) / 2);
        transform: translateY(50%);
        width: 8.5%;

        @media (max-width: 991px) {
          display: none;
        }
      }
    }
  }
</style>