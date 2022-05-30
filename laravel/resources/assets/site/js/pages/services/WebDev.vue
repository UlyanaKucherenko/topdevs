<template>
  <main class="webdev">
    <HeroSection
      class="hero-section"
      :title="['Custom Web Development Services']"
      :desc="['Full-scale websites and web apps delivered with speed, accuracy, and agility to respond effectively to your business calls.']"
      btnText="Get Your Web Solution"
      imgURL="/images/site/services/webdev/hero-bg.svg"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <SectionLayout
      class="offer-section"
      headerTitle="What We Offer"
      :headerDesc="['Our web solutions are built with the latest', 'technologies to scale up your business', 'effectiveness and profitability.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider :items="offerItems"/>
      <img
        class="offer-section__bg-circle"
        src="/images/site/services/webdev/offer/bg-circle.svg" alt=""
      >
    </SectionLayout>


    <ListSection
      :headerTitle="['Web Solutions', 'We Deliver']"
      :headerDesc="['Lift the curtain towards just a small bit of', 'industry-specific websites and web applications', 'we can help you with.']"
      headerIcon="/images/site/icons/abstract/header-5.svg"
      class="solutions-section"
      :items="solutionsItems"
      :columns="{
        1200: 3,
        870: 2,
        550: 1,
        default: 4
      }"
    />

    <ApproachSection class="webdev__approach-section"/>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Take a look at the way we've served brands to spread their online presence with ease and confidence."
      :sliderProps="{
        rubricType: 'services',
        rubricName: 'web-development'
      }"
    />

    <TechSection
      class="tech-section"
      :headerTitle="['Technology', 'Stack']"
      :headerDesc="['Meet a pile of our most reliable frameworks and', 'programming languages that make the products', 'stand out.']"
      headerIcon="/images/site/icons/abstract/header-12.svg"
      :blocks="techBlocks"
    />

    <LearnSection
      headerTitle="Learn More"
      :headerDesc="['Get to know the newest technology trends', 'and how we will incorporate them into your', 'outsourcing project.']"
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
import ApproachSection from '@/js/components/pages/services/webdev/ApproachSection'
import ListSection from '@/js/components/pages/services/ListSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import TechSection from '@/js/components/pages/services/TechSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'
import SectionLayout from '@/js/layouts/SectionLayout'

export default {
  components: {HeroSection, TheBreadcrumbs, ApproachSection, ListSection, PortfolioSection, TechSection, LearnSection, ConnectSection, CardsSlider, SectionLayout},

  data() {
    return {
      offerItems: [
        {
          imgURL: '/images/site/services/webdev/offer/1.svg',
          title: 'Frontend Web Development',
          desc: 'An intuitive user-friendly interface helps your business to win the competition, attract and capture a wider audience.'
        },
        {
          imgURL: '/images/site/services/webdev/offer/2.svg',
          title: 'Backend Web Development',
          desc: 'A stable smart stuffing of your web solution makes it possible to stand out under high-loads and gain user\'s trust.'
        },
        {
          imgURL: '/images/site/services/webdev/offer/3.svg',
          title: 'Database Development',
          desc: 'Our on-demand websites and web applications can receive, store, process data precisely and efficiently.'
        },
        {
          imgURL: '/images/site/services/webdev/offer/4.svg',
          title: 'Infrastructure Management',
          desc: 'The server infrastructure is managed with a decent level of security and reliability to guarantee full data protection. '
        }
      ],

      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'Custom Web Development Services',
          url: '/services/web-development'
        }
      ],

      solutionsItems: [
        {
          imgURL: '/images/site/services/webdev/solutions/1.svg',
          title: 'e - Commerce Website',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/2.svg',
          title: 'Online courses',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/3.svg',
          title: 'CMS',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/4.svg',
          title: 'Digital Wallet',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/5.svg',
          title: 'Marketplace',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/6.svg',
          title: 'Live Streaming',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/7.svg',
          title: 'ERP Solution',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/8.svg',
          title: 'Patient Portal',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/9.svg',
          title: 'e - Learning Portal',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/10.svg',
          title: 'Media portal',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/11.svg',
          title: 'CRM Solution',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/12.svg',
          title: 'SaaS Solution',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/13.svg',
          title: 'Online Payment System',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/14.svg',
          title: 'Online Booking System',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/15.svg',
          title: 'Trading Platform',
        },
        {
          imgURL: '/images/site/services/webdev/solutions/16.svg',
          title: 'Electronic Medical Records',
        }
      ],

      portfolioItems: [
        {
          imgURL: '/images/site/services/full-cycle/portfolio/1.png',
          title: 'Sunny studio',
          desc: 'Vue.JS, Docker, Express, Laravel, MySQL, PHP'
        },
        {
          imgURL: '/images/site/services/full-cycle/portfolio/2.png',
          title: 'Par champ',
          desc: 'Kit, Objective-C, Parse SDK'
        },
        {
          imgURL: '/images/site/services/full-cycle/portfolio/3.png',
          title: 'Solocator',
          desc: 'CoreData, CoreLocation,  KML'
        }
      ],

      techBlocks: [
        {
          width: 100,
          title: 'Web',
          styleOptions: {
            700: {gridTemplateColumns: 'repeat(2, max-content)', columnGap: '3rem'},
            650: {gridTemplateColumns: 'repeat(2, max-content)', justifyContent: 'space-around'},
            default: {gridTemplateColumns: 'repeat(4,1fr)'}
          },
          // columnsWidth: {
          //   1250: '25rem',
          //   default: '25%'
          // },
          columns: [
            {
              // width: '25%',
              title: 'Backend',
              items: [
                {
                  title: 'PHP',
                  imgURL: '/images/site/tech-logos/php.svg'
                },
                {
                  title: 'Laravel',
                  imgURL: '/images/site/tech-logos/laravel.svg'
                },
                {
                  title: 'Node.js',
                  imgURL: '/images/site/tech-logos/node.svg'
                }
              ]
            },
            {
              // width: '25%',
              title: 'Frontend',
              items: [
                {
                  title: 'Javascript',
                  imgURL: '/images/site/tech-logos/js.svg'
                },
                {
                  title: 'Vue.js',
                  imgURL: '/images/site/tech-logos/vue.svg'
                },
                {
                  title: 'React.js',
                  imgURL: '/images/site/tech-logos/react.svg'
                }
              ]
            },
            {
              // width: '25%',
              title: 'Database',
              items: [
                {
                  title: 'MySQL',
                  imgURL: '/images/site/tech-logos/mysql.svg'
                },
                {
                  title: 'MongoDB',
                  imgURL: '/images/site/tech-logos/mongo.svg'
                },
                {
                  title: 'RedisDB',
                  imgURL: '/images/site/tech-logos/redis.svg'
                }
              ]
            },
            {
              // width: '25%',
              title: 'DevOps',
              items: [
                {
                  title: 'Docker',
                  imgURL: '/images/site/tech-logos/docker.svg'
                },
                {
                  title: 'Ansible',
                  imgURL: '/images/site/tech-logos/ansible.svg'
                },
                {
                  title: 'Kubernetes',
                  imgURL: '/images/site/tech-logos/kubernetes.svg'
                }
              ]
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .webdev {

    .offer-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big) 0;

      .items-list {
        &__row {
          justify-content: space-evenly;
        }

        &__item {
          width: 25%;
        }
      }

      &__bg-circle {
        position: absolute;
        bottom: 0;
        left: 50%;
        z-index: -1;
        transform: translateX(-80%);

        @media (max-width: 575px) {
          display: none;
        }
      }
    }

    .solutions-section {
      background: linear-gradient(133.48deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);
      padding: var(--section-pd-y-small) 0;

      .items-list {
        &__row {
          margin-bottom: calc(var(--space-unit) * 5);
          justify-content: flex-start;
        }

        &__item {
          width: 100%;

          .first-card {
            flex-direction: row;
            align-items: center;
          }

          .first-card__title {
            margin: 0;
            font-weight: 400;
          }

          .first-card__img {
            margin-bottom: 0;
            margin-right: 3.2rem;

            img {
              width: 5rem;
            }
          }

          @media (max-width: 1199px) {
            margin: 0 2.5%;
            width: calc(85% / 3);
          }

          @media (max-width: 870px) {
            width: 45%;
          }

          @media (max-width: 550px) {
            margin: 0;
            width: 90%;
          }
        }
      }
    }

    .portfolio-section {
      padding: var(--section-pd-y-big) 0;
    }

    .approach-section {
      padding-top: var(--section-pd-y-big);
    }

    .tech-section {
      background: linear-gradient(127.04deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);
    }
  }
</style>
