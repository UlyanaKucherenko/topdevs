<template>
  <main class="design">
    <HeroSection
      class="hero-section"
      :title="['Web & Mobile', 'UX/UI Design', 'Services']"
      desc="Spectacular design solutions for businesses of all kinds to immerse your customers with a clear and distinctive brand voice leading to great conversions."
      btnText="Reach Out"
      imgURL="/images/site/services/design/hero-bg.svg"
      :styleOptions="{
        img: {
          width: '53%',
          height: '90%',
          top: 'auto',
          right: 0,
          bottom: '3%',
          transform: 'translate(0)'
        }
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <SectionLayout
      class="offer-section"
      headerTitle="What We Offer"
      :headerDesc="['Our design solutions improve product logic', 'and view to give users what they desire.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider :items="offerItems"/>
    </SectionLayout>

    <SectionLayout
      class="why-us-section"
      :headerTitle="['Benefits of UX/UI', 'Design']"
      :headerDesc="['We develop fit-for-purpose design', 'solutions to boost your customer', 'satisfaction, loyalty, and retention rates.']"
      headerIcon="/images/site/icons/abstract/header-5.svg"
    >
      <AlternateList
        class="why-us-section__list"
        :items="benefitsItems"
        listType="dot"
        dotColor="#FB475D"
        bgImgURL="/images/site/services/design/benefits/bg.svg"
      />
    </SectionLayout>

    <ListSection
      class="stages-section"
      headerTitle="Design Stages"
      :headerDesc="['We make eye-catching design from scratch for', 'web and mobile apps that make a product', 'stand out.']"
      headerIcon="/images/site/icons/abstract/header-11.svg"
      :items="stagesItems"
      :columns="{
        900: 2,
        600: 1,
        default: 3
      }"
      :cardOptions="{descNumber: true}"
    />

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Explore the best outsourcing projects we've delivered so far to experience our tech expertise."
      :items="portfolioItems"
      :sliderProps="{
        rubricType: 'services',
        rubricName: 'uxui-design'
      }"
    />

    <TechSection
      class="tech-section"
      headerTitle="Tools Involved"
      :headerDesc="['We leverage the most efficient and', 'modern design tools to create an alluring', 'look for web and mobile products. ']"
      headerIcon="/images/site/icons/abstract/header-14.svg"
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
      class="page-bg-img design__lines"
      src="/images/site/services/outstaffing/lines2.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import ListSection from '@/js/components/pages/services/ListSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import SectionLayout from '@/js/layouts/SectionLayout'
import AlternateList from '@/js/components/pages/services/AlternateList'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import TechSection from '@/js/components/pages/services/TechSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'


export default {
  components: {HeroSection, ListSection, TheBreadcrumbs, SectionLayout, AlternateList, PortfolioSection, TechSection, LearnSection, ConnectSection, CardsSlider},

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'UX/UI Design Services',
          url: '/services/ui-ux-design'
        }
      ],

      offerItems: [
        {
          imgURL: '/images/site/services/design/offer/1.svg',
          title: 'UX Design',
          desc: 'We think through the ways to solve business challenges and fascinate the target audience with intuitive, smooth and consistent user experiences.'
        },
        {
          imgURL: '/images/site/services/design/offer/2.svg',
          title: 'UI Design',
          desc: 'We design user interfaces that win customer attention with engaging and visually appealing look turning them into loyal clientele.'
        },
        {
          imgURL: '/images/site/services/design/offer/3.svg',
          title: 'Branding & Identity',
          desc: 'We express your business personality via clear brand strategy, logo design and visual identity to rise above the competition.'
        },
        {
          imgURL: '/images/site/services/design/offer/4.svg',
          title: 'Prototype Development',
          desc: 'We create interactive prototypes to lay down product architecture and navigation, get early feedback, validate and even sell an idea.'
        }
      ],

      stagesItems: [
        {
          imgURL: '/images/site/services/design/stages/1.svg',
          title: 'Discussion',
          desc: 'Area of concern allocation, expert consulting, close cooperation to identify the issue, its complexity and your message to the world.'
        },
        {
          imgURL: '/images/site/services/design/stages/2.svg',
          title: 'Research',
          desc: 'User profile qualification including age, interests, and other factors that helps us to create the user-centric design solution.'
        },
        {
          imgURL: '/images/site/services/design/stages/3.svg',
          title: 'Ideation',
          desc: 'Ideas generation during brainstorming sessions to draw effective conclusions create a list of concepts and user flow diagram.'
        },
        {
          imgURL: '/images/site/services/design/stages/4.svg',
          title: 'Prototyping',
          desc: 'A bare skeleton creation to outline the logic of product operation, define its strengths and weaknesses, get clarity of user interaction.'
        },
        {
          imgURL: '/images/site/services/design/stages/5.svg',
          title: 'Visual Design',
          desc: 'A unique visual part creation through style, color schemes, fonts, logos, animations to present the brand voice and capture the audience.'
        },
        {
          imgURL: '/images/site/services/design/stages/6.svg',
          title: 'Testing',
          desc: 'A final complex test to make sure all set up for providing favorable user experience and reaching the client\'s business goals.'
        }
      ],

      benefitsItems: [
        {
          textBlocks: [
            {
              title: 'User Journey',
              desc: 'Flawless navigation combined with an impressive look and feel of the digital solution resonates with the highest user expectations.',
            },
            {
              title: 'Brand Awareness',
              desc: 'A unique and appealing brand style speaks loudly to your customers and makes your product recognizable on the market.'
            },
          ],
          imgURL: '/images/site/services/design/benefits/1.jpg'
        },

        {
          textBlocks: [
            {
              title: 'Customer Loyalty',
              desc: 'Great user-centric design inspires, captivates and makes your clientele stay with your brand to satisfy aesthetic needs with appealing art.',
            },
            {
              title: 'Revenue Increase',
              desc: 'Enjoyable usability with thought-through customer journey leads to winning users\' hearts and increasing your conversions.'
            }
          ],
          imgSide: 'left',
          imgURL: '/images/site/services/design/benefits/2.jpg'
        },
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

      techBlocks: [
        {
          width: 100,
          styleOptions: {
            370: {gridTemplateColumns: 'repeat(1, max-content)', rowGap: 'calc(var(--space-unit) * 4)', justifyContent: 'center'},
            550: {gridTemplateColumns: 'repeat(2, max-content)', rowGap: 'calc(var(--space-unit) * 4)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            default: {gridTemplateColumns: 'repeat(3, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            // 1100: {gridTemplateColumns: 'repeat(3, max-content)', columnGap: 'calc(var(--space-unit) * 10)', justifyContent: 'center'},
            // default: {gridTemplateColumns: '20rem 25rem 20rem', justifyContent: 'center'}
          },
          columns: [
            {
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
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .design {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: 42%;
        }
      }
    }

    .offer-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      .items-list__item {
        width: 21.8%;

        .first-card__img {
          margin-bottom: 5rem;
        }
      }
    }

    .why-us-section {
      padding-bottom: var(--section-pd-y-big);

      .alternate-list {
        padding: 0 5%;

        &__bg-img {
          left: -14%;
          top: 0%;
          width: 126%;
          height: 116%;
        }

        &__row {
          margin-bottom: calc(var(--space-unit) * 30);

          &:last-child {
            margin-bottom: 0rem;
          }

          @media (max-width: 767px) {
            margin-bottom: calc(var(--space-unit) * 5);
          }
        }
      }
    }

    .stages-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__row {
          justify-content: space-evenly;

          @media (max-width: 900px) {
            justify-content: space-around;
          }
        }

        &__item {
          width: 20%;

          @media (max-width: 900px) {
            width: 35%;
          }

          @media (max-width: 600px) {
            width: 80%;
          }
        }
      }

      .first-card__img {
        img {
          width: auto;
        }
      }
    }

    .portfolio-section {
      padding-bottom: var(--section-pd-y-big);
    }

    .tech-section {
      &__table {
        // width: 70%;
        margin: 0 auto;
        padding: calc(var(--space-unit) * 7) calc(var(--space-unit) * 6.7);
      }
    }

    &__lines {
      transform: scaleX(-1);
    }
  }
</style>
