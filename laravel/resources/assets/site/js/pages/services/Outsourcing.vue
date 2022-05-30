<template>
  <main class="outsourcing">
    <HeroSection
      class="hero-section"
      :title="['IT', 'Outsourcing', 'Services']"
      :desc="['Fully-covered IT project outsourcing by a top-level outsource company to enable rapid response to changing market conditions.']"
      btnText="let's start"
      imgURL="/images/site/services/outsourcing/hero-bg.svg"
      :styleOptions="{
        img: {
          width: 'calc(64% + 10vw)',
          right: '-10vw',
          height: '100%'
        }
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="offer-section"
      headerTitle="What We Offer"
      :headerDesc="['Our IT outsourcing company ensures all your', 'business needs are met within the developed', 'digital solution.']"
      headerIcon="/images/site/icons/abstract/header-5.svg"
      :items="offerItems"
      :columns="{
        767: 2,
        450: 1,
        default: 4
      }"
    />

    <SectionLayout
      class="benefits-section"
      :headerTitle="['IT Outsourcing', 'Benefits']"
      :headerDesc="['We deliver superior market-fit digital', 'products within a specified time at a', 'reasonable price.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider :items="benefitsItems" :cardOptions="{number: true}"/>
    </SectionLayout>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Explore the best outsourcing projects we've delivered so far to experience our tech expertise."
      :items="portfolioItems"
      :sliderProps="{
        rubricType: 'services',
        rubricName: 'it-outsourcing'
      }"
    />

    <TechSection
      :headerTitle="['Technology', 'Stack']"
      :headerDesc="['Our deep expertise in innovative', 'technologies is at your service that makes', 'our solutions so prominent.']"
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
      class="page-bg-img outsourcing__lines"
      src="/images/site/services/outstaffing/lines2.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ListSection from '@/js/components/pages/services/ListSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import TechSection from '@/js/components/pages/services/TechSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'
import SectionLayout from '@/js/layouts/SectionLayout'

export default {
  components: {
    HeroSection,
    TheBreadcrumbs,
    ListSection,
    PortfolioSection,
    TechSection,
    LearnSection,
    ConnectSection,
    CardsSlider,
    SectionLayout
  },

  data() {
    return {
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

      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'IT Outsourcing Services',
          url: '/services/it-outsourcing'
        }
      ],

      offerItems: [
        {
          imgURL: '/images/site/services/outsourcing/offer/1.svg',
          title: ['Digital', 'Transformation'],
          desc: ['Modernize your business to stay', 'ahead of the competition.']
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/2.svg',
          title: ['Team', 'Augmentation'],
          desc: 'Extend your development team to launch your product faster.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/3.svg',
          title: ['Full Cycle', 'Development Services'],
          desc: 'Delegate your product development to professionals from A to Z.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/4.svg',
          title: ['Project Management', 'Services'],
          desc: 'Release the tense of product outsourcing management.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/5.svg',
          title: ['Mobile App', 'Development Services'],
          desc: 'Get efficient native mobility solutions of high performance.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/6.svg',
          title: ['Web Development', 'Services'],
          desc: 'Expand your online presence with solid web solutions.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/7.svg',
          title: ['UX/UI Design', 'Services'],
          desc: 'Give your customers the best user experience possible.'
        },
        {
          imgURL: '/images/site/services/outsourcing/offer/8.svg',
          title: ['Testing', 'Services'],
          desc: 'Ensure your product is of the highest possible quality.'
        }
      ],

      benefitsItems: [
        {
          imgURL: '/images/site/services/outsourcing/benefits/1.svg',
          title: 'Company Focus',
          desc: 'Concentrate on your business while a professional team covers the tech part.'
        },
        {
          imgURL: '/images/site/services/outsourcing/benefits/2.svg',
          title: 'Risk-Free',
          desc: 'Distribute business risks with the technology partner company.'
        },
        {
          imgURL: '/images/site/services/outsourcing/benefits/3.svg',
          title: 'Skilled Manpower',
          desc: 'Choose the most skilled developers available for the appropriate price.'
        },
        {
          imgURL: '/images/site/services/outsourcing/benefits/4.svg',
          title: 'IT Infrastructure Maintenance',
          desc: 'Reduce the IT infrastructure maintenance costs readily tailored to your needs.'
        },
        {
          imgURL: '/images/site/services/outsourcing/benefits/5.svg',
          title: 'Low Operational Costs',
          desc: 'Control your budget and decrease operating cost through outsourcing.'
        },
        {
          imgURL: '/images/site/services/outsourcing/benefits/6.svg',
          title: 'Faster Launch',
          desc: 'Release a product rapidly with a finely-tuned development process.'
        },
      ]
    }
  },

  computed: {
    techBlocks() {
      let devOpsObj = this.windowWidth > 1100 ?
        [
          {
            title: 'DevOps',
            items: [
              {
                title: 'Docker',
                imgURL: '/images/site/tech-logos/docker.svg'
              },
              {
                title: 'Ansible',
                imgURL: '/images/site/tech-logos/ansible.svg'
              }
            ]
          },
          {
            title: 'hidden',
            items: [
              {
                title: 'Kubernetes',
                imgURL: '/images/site/tech-logos/kubernetes.svg'
              },
              {
                title: 'CI/CD',
                imgURL: '/images/site/tech-logos/cicd.svg'
              }
            ]
          }
        ]
        :
        [
          {
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
              },
              {
                title: 'CI/CD',
                imgURL: '/images/site/tech-logos/cicd.svg'
              }
            ]
          },
        ]

      return [
        {
          width: 100,
          title: 'Web',
          styleOptions: {
            1100: {
              gridTemplateColumns: 'repeat(2, max-content)',
              columnGap: 'calc(var(--space-unit) * 10)',
              justifyContent: 'center'
            },
            default: {gridTemplateColumns: 'repeat(5,1fr)'}
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
            ...devOpsObj
          ]
        },
        {
          width: 100,
          title: 'Mobile',
          styleOptions: {
            default: {
              gridTemplateColumns: 'repeat(2, max-content)',
              columnGap: 'calc(var(--space-unit) * 10)',
              justifyContent: 'center'
            },
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
            600: {
              gridTemplateColumns: 'repeat(2, max-content)',
              columnGap: 'calc(var(--space-unit) * 10)',
              justifyContent: 'center'
            },
            default: {
              gridTemplateColumns: 'repeat(3, max-content)',
              columnGap: 'calc(var(--space-unit) * 10)',
              justifyContent: 'center'
            },
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
.outsourcing {
  .hero-section {
  }

  .offer-section {
    background: linear-gradient(124.59deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);
    padding: var(--section-pd-y-small) 0;

    .items-list {
      &__item {
        width: 19%;

        .first-card__img {
          img {
            width: auto;
          }
        }

        @media (max-width: 767px) {
          width: 45%;
        }

        @media (max-width: 450px) {
          width: 90%;
        }
      }
    }
  }

  .benefits-section {
    padding: var(--section-pd-y-big) 0;

    .items-list__item {
      width: 22%;

      .first-card__img {
        margin-bottom: 4.8rem;

        img {
          width: 100%;
        }
      }

      .first-card__title {
        width: 120%;
      }

      .first-card__desc {
        width: 120%;
      }
    }
  }

  .portfolio-section {
    padding-bottom: var(--section-pd-y-big);
  }

  &__lines {
    transform: scaleX(-1);
  }
}
</style>
