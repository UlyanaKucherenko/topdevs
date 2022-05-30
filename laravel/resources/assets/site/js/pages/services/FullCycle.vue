<template>
  <main class="full-cycle">
    <HeroSection
      class="hero-section"
      :title="['Full Cycle', 'Development']"
      :desc="['Solid end-to-end web and mobile solutions entirely tailored - from initial idea to fully-fledged product and post-launch support - to solve your specific business challenges.']"
      btnText="get an estimation"
      imgURL="/images/site/services/full-cycle/hero-bg.svg"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <SectionLayout
      class="offer-section"
      headerTitle="Our Offerings"
      :headerDesc="['We are fully committed to your product\'s', 'success so you can simply focus on your', 'business.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider :items="offerItems"/>
    </SectionLayout>

    <ProcessSection/>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Check out just some of the mobile and web solutions we've created for our numerous clients worldwide."
      :items="portfolioItems"
      :sliderProps="{
        rubricType: 'services',
        rubricName: 'full-cycle-development'
      }"
    />

    <TechSection
      class="tech-section"
      :headerTitle="['Technology', 'Stack']"
      :headerDesc="['Our deep expertise in innovative', 'technologies is at your service that makes', 'our solutions so prominent.']"
      headerIcon="/images/site/icons/abstract/header-13.svg"
      :blocks="techBlocks"
    />

    <LearnSection
      headerTitle="Learn More"
      :headerDesc="['Get to know the newest technology trends', 'and how we will incorporate them into your', 'project.']"
    />

    <ConnectSection
      headerTitle="Connect with Experts"
      :headerDesc="['Your idea - our execution. Let\'s create', 'meaningful solutions together!']"
    />

    <img
      class="page-bg-img full-cycle__lines"
      src="/images/site/services/outstaffing/lines2.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ListSection from '@/js/components/pages/services/ListSection'
import ProcessSection from '@/js/components/pages/services/full-cycle/ProcessSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import TechSection from '@/js/components/pages/services/TechSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'
import SectionLayout from '@/js/layouts/SectionLayout'

export default {
  components: {HeroSection, TheBreadcrumbs, ListSection, ProcessSection, PortfolioSection, TechSection, LearnSection, ConnectSection, SectionLayout, CardsSlider},

  data() {
    return {
      offerItems: [
        {
          imgURL: '/images/site/services/full-cycle/offer/1.svg',
          title: 'iOS Development',
          desc: 'We use proven programming languages like Objective-C and Swift to create native apps for Apple mobile devices.'
        },
        {
          imgURL: '/images/site/services/full-cycle/offer/2.svg',
          title: 'Android Development',
          desc: 'We create native mobile solutions for an extensive range of Android-compatible devices using Java and Kotlin languages.'
        },
        {
          imgURL: '/images/site/services/full-cycle/offer/3.svg',
          title: 'Web Development',
          desc: 'Both the frontend and backend part is being covered by our web developers leveraging the most popular frameworks and technologies.'
        },
        {
          imgURL: '/images/site/services/full-cycle/offer/4.svg',
          title: 'UX/UI Design',
          desc: 'Our design services extend towards both web and mobile projects providing identity, branding, prototyping and actual design.'
        },
        {
          imgURL: '/images/site/services/full-cycle/offer/5.svg',
          title: 'Project Management',
          desc: 'We keep track of accurately meeting all your stringent demands and aspirations within the specified time and pricing.'
        },
        {
          imgURL: '/images/site/services/full-cycle/offer/6.svg',
          title: 'Quality Assurance',
          desc: 'Our QA engineers ensure that the delivered solution complies with the initial business objectives via advanced testing techniques.'
        },
      ],

      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'Full Cycle Development',
          url: '/services/full-cycle-development'
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
            700: {gridTemplateColumns: 'repeat(2, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            // 700: {gridTemplateColumns: 'repeat(2, max-content)', columnGap: '3rem'},
            // 650: {gridTemplateColumns: 'repeat(2, max-content)', justifyContent: 'space-around'},
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
        },
        {
          width: 100,
          title: 'Mobile',
          styleOptions: {
            default: {gridTemplateColumns: 'repeat(2, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            // 650: {gridTemplateColumns: 'repeat(2, max-content)', justifyContent: 'space-around'},
            // default: {gridTemplateColumns: 'repeat(2, 25%)'}
          },
          columns: [
            {
              // width: {
              //   1250: '25rem',
              //   default: '25%'
              // },
              title: 'IOS',
              items: [
                {
                  title: 'Swift',
                  imgURL: '/images/site/tech-logos/swift.svg'
                },
                {
                  title: 'Objective - C',
                  imgURL: '/images/site/tech-logos/obj-c.svg'
                }
              ]
            },
            {
              // width: '25%',
              title: 'Android',
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
        },
        {
          width: 100,
          title: 'Design',
          styleOptions: {
            600: {gridTemplateColumns: 'repeat(2, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            default: {gridTemplateColumns: 'repeat(3, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
          },
          columns: [
            {
              // width: '25%',
              title: 'UX/UI',
              items: [
                {
                  title: 'Sketch',
                  imgURL: '/images/site/tech-logos/sketch.svg'
                },
                {
                  title: 'Figma',
                  imgURL: '/images/site/tech-logos/figma.svg'
                },
                {
                  title: 'Invision',
                  imgURL: '/images/site/tech-logos/invision.svg'
                }
              ]
            },
            {
              title: 'hidden',
              items: [
                {
                  title: 'Adobe Photoshop',
                  imgURL: '/images/site/tech-logos/photoshop.svg'
                },
                {
                  title: 'Adobe Illustrator',
                  imgURL: '/images/site/tech-logos/illustrator.svg'
                },
                {
                  title: 'Adobe After Effects',
                  imgURL: '/images/site/tech-logos/after-effects.svg'
                }
              ]
            },
            {
              title: 'hidden',
              items: [
                {
                  title: 'Zeplin',
                  imgURL: '/images/site/tech-logos/zeplin.svg'
                },
                {
                  title: 'Principle',
                  imgURL: '/images/site/tech-logos/principle.svg'
                },
                {
                  title: 'MarvelApp',
                  imgURL: '/images/site/tech-logos/marvel.svg'
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
  .full-cycle {
    .hero-section {
      &__info {
        @media (min-width: 1200px) {
          width: 46%;
        }
      }

      &__img {
        @media (min-width: 1250px) {
          width: auto;
        }

        @media (max-width: 1250px) and (min-width: 992px) {
          width: 60%;
        }
      }
    }

    .offer-section {
      padding: var(--section-pd-y-small) 0;

      .items-list__item {
        width: 21.8%;

        .first-card__img {
          margin-bottom: 4.8rem;
        }
      }
    }

    .portfolio-section {
      padding: var(--section-pd-y-big) 0;
    }

    .tech-section {
      padding: 0;
      background: none;
      box-shadow: none;
    }

    &__lines {
      transform: scale(1.2);
    }
  }
</style>
