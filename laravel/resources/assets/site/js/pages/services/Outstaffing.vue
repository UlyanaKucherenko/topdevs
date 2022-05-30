<template>
  <main class="outstaffing">
    <HeroSection
      class="hero-section"
      :title="['IT Outstaffing &', 'Staff Augmentation', 'Services']"
      desc="High-calibre web and mobile developers at your service to extend and reinforce your development team leading to better business results."
      btnText="Get Your Expert"
      imgURL="/images/site/services/outstaffing/hero-bg.svg"
      :styleOptions="{
        info: {width: '54%'},
        desc: {width: '70%'},
        img: {
          width: 'calc(64%)',
          height: '75%',
          right: '-10vw'
        }
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="find-section"
      headerTitle="Find Developers"
      :headerDesc="['Leverage the all-encompassing expertise', 'of our dedicated team members for your', 'team extension.']"
      headerIcon="/images/site/icons/abstract/header-4.svg"
      :items="findItems"
      :columns="{
        768: 2,
        450: 1,
        default: 3
      }"
    />

    <ListSection
      class="benefits-section"
      :headerTitle="['Benefits of Staff', 'Augmentation']"
      :headerDesc="['Our highly motivated creative minds are', 'always at your command for cost-efficient', 'cooperation.']"
      headerIcon="/images/site/icons/abstract/header-10.svg"
      :items="benefitsItems"
      :columns="{
        1400: 2,
        576: 1,
        default: 4
      }"
    >
      <template v-slot="slotProps">
        <ImgOutCard
          v-bind="slotProps"
          mode="center"
          class="benefits-section__card"
        />
      </template>

      <template v-slot:cursor-follow>
        <img src="/images/site/icons/abstract/fig-17.svg" alt="" class="benefits-section__triangles" v-cursor-follow="{multiplier: .4}">
        <img src="/images/site/icons/abstract/4.svg" alt="" class="benefits-section__circles" v-cursor-follow="{multiplier: .3}">
      </template>
    </ListSection>

    <StaffSection/>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Dig into case studies of the most prominent outstaffing projects that our dedicated team has completed so far."
      :sliderProps="{
        rubricType: 'services',
        rubricName: 'it-outstaffing'
      }"
    />

    <LearnSection
      headerTitle="Learn More"
      :headerDesc="['Get to know the newest technology trends', 'and how we will incorporate them into your', 'project.']"
    />

    <ConnectSection
      headerTitle="Connect with Experts"
      :headerDesc="['Ready to augment your team? Hire the top', '1% talents to boost your project!']"
    />

    <img
      class="page-bg-img"
      src="/images/site/services/outstaffing/lines2.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import ListSection from '@/js/components/pages/services/ListSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import FirstCard from '@/js/components/global/cards/FirstCard'
import ImgOutCard from '@/js/components/global/cards/ImgOutCard'
import StaffSection from '@/js/components/pages/services/outstaffing/StaffSection'

export default {
  components: {HeroSection, ListSection, TheBreadcrumbs, PortfolioSection, LearnSection, ConnectSection, FirstCard, ImgOutCard, StaffSection},

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        },
        {
          name: 'IT Outstaffing & Staff Augmentation Services',
          url: '/services/it-outstaffing'
        }
      ],

      findItems: [
        {
          imgURL: '/images/site/services/outstaffing/find/1.svg',
          title: 'iOS Developers',
          desc: 'Our iOS app developers have extensive experience in iPhone app development and build mobile apps for all Apple platforms.'
        },
        {
          imgURL: '/images/site/services/outstaffing/find/2.svg',
          title: 'Android Developers',
          desc: 'We provide Android app development services to give you stunning mobile apps for smartphones and tablets.'
        },
        {
          imgURL: '/images/site/services/outstaffing/find/3.svg',
          title: 'Web Developers',
          desc: 'Our front-end, back-end and full-stack web developers cater websites and web applications to all your business needs.'
        },
        {
          imgURL: '/images/site/services/outstaffing/find/4.svg',
          title: 'UX/UI Designers',
          desc: 'We have skilled web designers that can create appealing product design from scratch or make a redesign of existing solution.'
        },
        {
          imgURL: '/images/site/services/outstaffing/find/5.svg',
          title: 'Project Managers',
          desc: 'Our PM specialists have solid experience in providing project management services to ensure your product is built on time and within a budget.'
        },
        {
          imgURL: '/images/site/services/outstaffing/find/6.svg',
          title: 'Testing Engineers',
          desc: 'We have professional quality assurance engineers able to provide full-cycle testing services and help you deliver a high-grade product.'
        },
      ],

      benefitsItems: [
        {
          imgURL: '/images/site/services/outstaffing/benefits/1-new.svg',
          title: 'Full Control',
          desc: 'Choosing outstaffing services you go with an outsourced team and have complete control of all development processes.'
        },
        {
          imgURL: '/images/site/services/outstaffing/benefits/2-new.svg',
          title: 'Ease of Hiring',
          desc: 'You get technically skilled and highly capable professionals within a finely-tuned remote recruitment process.'
        },
        {
          imgURL: '/images/site/services/outstaffing/benefits/3-new.svg',
          title: 'Reasonable Price',
          desc: 'Having an opportunity to select the best developers for your project within a remote collaboration reduces the development cost.'
        },
        {
          imgURL: '/images/site/services/outstaffing/benefits/4-new.svg',
          title: 'Efficient Reporting',
          desc: 'Web-based tools give you direct access to remote staff and allow you to monitor their productivity and results.'
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
      ]
    }
  },
}
</script>

<style lang="scss">
  .outstaffing {
    .hero-section {
      @media (max-width: 1450px) {

      }
    }

    .find-section {
      padding: var(--section-pd-y-small) 0;
      background: linear-gradient(124.72deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

      .items-list {
        &__item {
          width: 22.4%;

          @media (max-width: 767px) {
            width: 40%;
          }

          @media (max-width: 450px) {
            width: 90%;
          }
        }
      }

      .first-card {
        &__img {
          img {
            width: auto;
          }
        }
      }
    }

    .benefits-section {
      padding: var(--section-pd-y-big) 0;

      .items-list {
        &__item {
          width: 22%;

          @media (max-width: 1400px) {
            width: 45%;
          }

          @media (max-width: 575px) {
            width: 90%;
          }
        }
      }

      .first-card {
        &__img {
          margin-bottom: calc(var(--space-unit) * 5);
        }
      }

      &__circles {
        position: absolute;
        left: 65%;
        bottom: 9%  ;
      }

      &__triangles {
        position: absolute;
        left: 35%;
        top: 9%;
      }

      @media (max-width: 1099px) {
        &__circles, &__triangles {
          display: none;
        }
      }
    }

    // .staff-section {
    //   padding: var(--section-pd-y-small) 0;
    //   background: linear-gradient(128.4deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    //   box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

    //   .items-list {
    //     &__item {
    //       width: 34rem;

    //       @media (max-width: 1320px) {
    //         width: 30%;
    //       }
    //     }
    //   }
    // }

    .portfolio-section {
      padding-top: var(--section-pd-y-big);
      padding-bottom: 0;
    }
  }
</style>
