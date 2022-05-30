<template>
  <main class="education">
    <HeroSection
      class="hero-section"
      :title="['Custom', 'Education & E-Learning', 'Web and Mobile App', 'Development Services']"
      :desc="['Unparalleled eLearning solutions for educational systems to', 'reach the goals of education organizations, universities,', 'businesses, and corporations.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/education/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Educational App', 'Development Services']"
      :headerDesc="['We build mobile apps and web platforms for personal', 'academic, and corporate training.']"
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
        <img class="services-section__photo bg-absolute" src="/images/site/industries/education/services/photo.jpg" alt="" v-scroll-reveal>
      </template>
    </ListSection>

    <FeaturesSection/>

    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app development services to all-sized', 'educational organizations and businesses.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      headerMode="center"
      :items="careItems"
      cardType="img-title"
      :columns="{
        992: 2,
        450: 1,
        default: 5
      }"
    >
      <template v-slot:cursor-follow>
        <img class="care-section__bg-circles bg-absolute" src="/images/site/icons/abstract/fig-32.svg" alt="" v-cursor-follow="{multiplier: .4}">
        <img class="care-section__bg-dots bg-absolute" src="/images/site/icons/abstract/fig-35.svg" alt="" v-cursor-follow="{multiplier: .4}">
      </template>
    </ListSection>

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'E-Learning Software']"
      headerDesc="We make learning interactive, collaborative, and efficient by mixing innovative technologies and our educational expertise."
      headerIcon="/images/site/icons/abstract/header-5.svg"
      :items="benefitsItems"
      :listOptions="{
        columns: {
          default: 1
        }
      }"
    >
      <img 
        class="benefits-section__fig"
        src="/images/site/industries/education/benefits/fig.svg" alt="" 
        slot="cursor-follow"
      >
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
import FeaturesSection from '@/js/components/pages/industries/education/FeaturesSection'

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
          name: 'Education & E-Learning',
          url: '/industries/elearning-software-development'
        }
      ],

      servicesItems: [
        {
          title: 'Mobile Learning Apps ',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'Talent Development Software',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'eLearning Software Development',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'Game-Based Learning Platforms',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'School Management Software',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'Quiz Apps Development',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'Learning Management Systems',
          icon: '/images/site/industries/education/services/icon.svg'
        },
        {
          title: 'Third-Party Systems Integration',
          icon: '/images/site/industries/education/services/icon.svg'
        }
      ],

      careItems: [
        {
          title: 'Educational Establishments',
          imgURL: '/images/site/industries/education/care/1.svg'
        },
        {
          title: 'Corporate Training Centers',
          imgURL: '/images/site/industries/education/care/2.svg'
        },
        {
          title: 'In-House Professional Development',
          imgURL: '/images/site/industries/education/care/3.svg'
        },
        {
          title: 'EdTech Startups',
          imgURL: '/images/site/industries/education/care/4.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'Personalized Approach',
          desc: 'Motivate learners for 100% with individualization, dynamic perception, and visibility that education applications guarantee.',
          imgURL: '/images/site/industries/education/benefits/1.svg'
        },
        {
          title: 'Learning Mobility',
          desc: 'Let the users study anywhere, anytime, and using any device of the liking with a self-paced learning opportunity.',
          imgURL: '/images/site/industries/education/benefits/2.svg'
        },
        {
          title: 'Performance Assessment',
          desc: 'Monitor the student\'s progress using automatic skills assessment and performance evaluation systems.',
          imgURL: '/images/site/industries/education/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .education {
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

          @media (max-width: 1199px) {
            width: 38%;
          }
        }
      }
    }

    .services-section {
      padding: var(--section-pd-y-small) 0 calc(var(--section-pd-y-big) * 1.25);

      .items-list {
        width: 65%;
        margin-left: auto;

        @media (max-width: 1099px) {
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
        top: 0;
        transform: translateY(-13%);
      }

      &__bg-cursor-follow {
        left: 8%;
        top: 33%;

        @media (max-width: 1099px) {
          display: none;
        }
      }

      &__photo {
        width: 18.5%;
        left: 15%;
        bottom: 17%;

        @media (max-width: 1099px) {
          display: none;
        }
      }
    }

    .benefits-section {
      &__fig {
        position: absolute;
        width: 6.5%;
        bottom: 2rem;
        left: 45%;
        transform: translate(-50%, 0);
        max-width: 13rem;

        @media (max-width: 1150px) {
          display: none;
        }
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

        @media (max-width: 992px) and (min-width: 451px) {
          &__item {
            width: 40%;
            margin: 0 5%;
          }

          &__row {
            justify-content: flex-start;
          }
        }
      }

      &__bg {
        &-circles {
          left: 4%;
          bottom: 25%;
        }

        &-dots {
          right: 8%;
          bottom: 10%;
        }

        @media (max-width: 1350px) {
          &-circles, &-dots {
            display: none;
          }
        }
      }
    }
  }
</style>