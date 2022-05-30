<template>
  <main class="mvp">
    <HeroSection
      class="hero-section"
      :title="['Minimum Viable', 'Product (MVP)', 'Development Services']"
      :desc="['Fine-tuned and rapidly developed minimum viable', 'product to validate your idea and reach your', 'business goals in a safe and cost-efficient way.']"
      btnText="build an mvp"
      :styleOptions="{
        smallTitle: true
      }"
    >
      <template #img>
        <SvgKeeper
          ref="svg"
          name="mvp"
        />
      </template>
    </HeroSection>

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Our MVP Development', 'Services']"
      :headerDesc="['We can step in at any stage of MVP development', 'and turn it into a quality MVP that best consolidates', 'the core business idea.']"
      headerMode="left"
      headerIcon="/images/site/icons/abstract/header-6.svg"
      :items="servicesItems"
      :columns="{
        767: 2,
        450: 1,
        default: 3
      }"
    />

    <SectionLayout
      class="benefits-section"
      :headerTitle="['Benefits of MVP', 'Development']"
      :headerDesc="['We provide you with complete control over the', 'managed MVP development team that has a good', 'record of creating MVPs for various industries.']"
      headerIcon="/images/site/icons/abstract/header-4.svg"
    >
      <CardsSlider
        :items="benefitsItems"
        :sliderOptions="{loop: false}"
      >
        <div
          slot
          slot-scope="{item}"
          class=benefits-section-card
        >
          <span class="benefits-section-card__number text-h1">
            0{{ item.idx + 1 }}
          </span>
          <FilledCard
            class="benefits-section-card__content"
            style="flex-grow: 1"
            :title="item.title"
            :desc="item.desc"
            disableCheckmark
          />
        </div>
      </CardsSlider>
    </SectionLayout>

    <SectionLayout
      class="specific-section"
      headerTitle="MVP for a Specific Project"
      :headerDesc="['We have a background in developing MVPs for any', 'type of platform or business niche.']"
      headerMode="center"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <div class="specific-section__content" v-scroll-reveal>
        <div class="specific-section__cards">
          <RowFullCard
            v-for="item in specificItems"
            :key="item.title"
            v-bind="item"
            class="specific-section-card"
            :classes="{
              icon: 'specific-section-card__icon',
              title: 'specific-section-card__title'
            }"
            imgURL="/images/site/services/mvp/specific-icon.svg"
          />
        </div>
        <img
          class="specific-section__mockup"
          src="/images/site/services/mvp/specific-mockup.svg"
        >
      </div>
    </SectionLayout>

    <ProcessSection/>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Explore the provided MVP services for startups and corporations that eventually turned into successful products."
      :items="portfolioItems"
    />

    <TechSection
      :headerTitle="['Technology', 'Stack']"
      :headerDesc="['Our in-depth expertise in top-notch technologies is at', 'your service to create an MVP of your likings.']"
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
import FilledCard from '../../components/global/cards/FilledCard';
import RowFullCard from '../../components/global/cards/RowFullCard';
import ProcessSection from '../../components/pages/services/mvp/ProcessSection';
import SvgKeeper from '../../components/global/SvgKeeper';
import gsap from 'gsap'

export default {
  components: {
    SvgKeeper,
    FilledCard,
    HeroSection,
    TheBreadcrumbs,
    ListSection,
    PortfolioSection,
    TechSection,
    LearnSection,
    ConnectSection,
    CardsSlider,
    SectionLayout,
    RowFullCard,
    ProcessSection
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
          name: 'MVP Development',
          url: '/services/mvp-development'
        }
      ],

      servicesItems: [
        {
          imgURL: '/images/site/services/mvp/services-1.svg',
          title: ['MVP Consulting Services'],
          desc: ['Get a detailed MVP implementation roadmap for your business idea including tech stack, product development strategy, and clear project estimation that will build the foundation of the future MVP.']
        },
        {
          imgURL: '/images/site/services/mvp/services-2.svg',
          title: ['MVP Design Services'],
          desc: 'Provide the elaborated visual design and user experience backed up by the clickable prototype that shows the interaction peculiarities between users and the future product. '
        },
        {
          imgURL: '/images/site/services/mvp/services-3.svg',
          title: ['End-to-End MVP Development'],
          desc: 'Utilize the full cycle of MVP development - from research and business analysis to the MVP delivery and further product development in order to showcase the full future potential of your product.'
        },
      ],

      benefitsItems: [
        {
          title: 'Idea Validation',
          desc: 'MVP helps to release your main idea implemented using the core functionality and validate its overall potential by urging user feedback.'
        },
        {
          title: 'Cost-Efficiency',
          desc: 'MVP saves investments from the start point making it possible to generate ROI earlier with the already releasable version.'
        },
        {
          title: 'Faster Launch',
          desc: 'The minimum viable product allows promoting the resulting software and accept users faster due to fewer features required for its development.'
        },
        {
          title: 'Unlimited Scalability',
          desc: 'With MVP, your idea is in the ideal position from which it can grow in any direction under the supervision of customer reviews.'
        },
        {
          title: 'Risks Mitigation',
          desc: 'MVP helps you to test the assumptions in real life within a limited amount of steps that save you from unexpected risks.'
        },
      ],

      specificItems: [
        {
          title: 'Web MVP',
          desc: 'Test the demand for your website or a web application with the MVP faster due to our vast experience in the field.'
        },
        {
          title: 'Mobile App MVP',
          desc: 'Shape your concepts into the ideal product users are looking for with our fine-tuned MVP development model for mobile apps.'
        }
      ]
    }
  },

  mounted() {
    const paths = this.$refs.svg.$el.querySelectorAll('path')
    gsap.set(paths, {autoAlpha: 0})

    setTimeout(() => {
      gsap.to(paths, {autoAlpha: 1, duration: 1, ease: 'expo.out', stagger: .05})
    }, 1000)
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
          columns: [
            {
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
          },
          columns: [
            {
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
  }
}
</script>

<style lang="scss">
.mvp {
  .hero-section {
    @media (min-width: 992px) {
      &__info {
        width: max-content;
      }

      &__desc {
        width: max-content;
      }
    }

    @media (max-width: 991px) {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    &__img {
      width: 60%;
      height: auto;
      top: 19%;
      right: -10%;
      transform: unset;
      pointer-events: none;

      @media (max-width: 1750px) {
        width: 50%;
        right: 0;
      }

      @media (max-width: 991px) {
        position: absolute;
        width: 80%;
        right: -20%;
        top: 0;
        opacity: .4;
      }

      @media (max-width: 575px) {
        height: 600px;
        width: 110%;
        top: 10%;

        .svg-container {
          width: 100%;
        }
      }
    }
  }

  .services-section {
    padding-top: var(--section-pd-y-small);

    .items-list {
      justify-content: space-between;

      &__item {
        width: 30%;

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

    &-card {
      height: 100%;
      display: flex;
      flex-direction: column;

      &__number {
        line-height: 150%;
        font-family: var(--ProximaNova);
        font-weight: normal;
        color: transparent;
        -webkit-text-stroke: 1px #505050;
      }
    }
  }

  .specific-section {
    margin-bottom: var(--section-pd-y-big);

    &__content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-column-gap: calc(var(--space-unit) * 8);
      grid-row-gap: calc(var(--space-unit) * 8);
      justify-content: center;
      align-items: center;

      @media (max-width: 575px) {
        grid-template-columns: 1fr;
      }
    }

    &-card {
      align-items: flex-start;
      margin-bottom: calc(var(--space-unit) * 7);
      height: auto;

      &:last-child {
        margin-bottom: 0;
      }

      &__title {
        color: var(--red-light);
      }

      &__icon {
        margin-right: 24px;
      }
    }

    &__mockup {
      max-width: 100%;

      @media (max-width: 575px) {
        max-width: 270px;
        margin: 0 auto;
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
