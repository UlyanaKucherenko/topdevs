<template>
  <main class="services">
    <HeroSection
      class="hero-section"
      title="Web and Mobile App Development Services"
      desc="Custom software development services to create mobile apps, websites and web applications from idea to post-launch support for all-sized businesses of various industries."
      btnText="start now"
      imgURL="/images/site/services/index/hero-bg.svg"
      :styleOptions="{
        info: {width: '48%'},
        desc: {width: '85%'},
        img: {width: '45%'}
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <SectionLayout
      class="services-section"
      headerTitle="Our services"
      :headerDesc="['We are an IT service provider that aims at', 'turning your idea into a fully functioning', 'product.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
    >
      <CardsSlider
        class="services-section__cards-slider"
        :items="servicesItems"
        :sliderOptions="{loop: false, mouseDrag: false}"
      >
        <div
          class="services-section__cards-slide card-filled"
          slot-scope="{item}"
        >
          <FirstCard
            v-bind="item"
            imgWidth="fit"
            :newDesign="true"
          />
        </div>

      </CardsSlider>
    </SectionLayout>

<!--    <ListSection-->
<!--      class="services-section"-->
<!--      headerTitle="Our services"-->
<!--      :headerDesc="1"-->
<!--      headerIcon="/images/site/icons/abstract/header-2.svg"-->
<!--      :items="servicesItems"-->
<!--      :columns="{-->
<!--        992: 2,-->
<!--        576: 1,-->
<!--        default: 3-->
<!--      }"-->
<!--    >-->
<!--      <template v-slot="slotProps">-->
<!--        <FirstCard-->
<!--          v-bind="slotProps"-->
<!--          class="card-filled services-section__card"-->
<!--        />-->
<!--      </template>-->
<!--    </ListSection>-->

    <ProductSection/>
    <IndustriesSection/>

    <!-- <ListSection
      class="focus-section"
      headerTitle="Industries in Focus"
      :headerDesc="['Our well-proven development experience is in', 'charge of excellent software solutions for', 'numerous business niches.']"
      :items="focusItems"
      :columns="{
        992: 3,
        768: 2,
        576: 1,
        default: '4'
      }"
    >
      <template v-slot="slotProps">
        <FirstCard
          v-bind="slotProps"
          :discoverLine="true"
          class="focus-section__card"
          :titleQuery="576"
        />
      </template>
    </ListSection> -->

    <ProvenSection/>

    <SectionLayout
      class="why-us-section"
      headerTitle="Why Us"
      :headerDesc="['We are aspired to inhale your business value', 'into a competitive engineering solution in a', 'cost-efficient way.']"
      headerIcon="/images/site/icons/abstract/header-9.svg"
    >
      <AlternateList
        class="why-us-section__list"
        :items="whyUsItems"
        imgType="rounded"
        listType="checkmark"
        bgImgURL="/images/site/services/index/why-us/bg.svg"
      />

      <img src="/images/site/icons/abstract/1.svg" alt="" class="why-us-section__triangles" v-cursor-follow="{multiplier: .4}">
      <img src="/images/site/icons/abstract/4.svg" alt="" class="why-us-section__circles" v-cursor-follow="{multiplier: .6}">
    </SectionLayout>

    <PortfolioSection
      class="portfolio-section"
      headerTitle="Portfolio"
      headerDesc="Explore the best outsourcing projects we've delivered so far to experience our tech expertise."
    />

    <!-- TO REMOVE  -->

    <!-- <SectionLayout
      class="slider-section"
      headerTitle="Testimonials"
      :headerDesc="['See what our satisfied customers have to', 'say about our impact on their business', 'success.']"
    >
      <FeedbackSlider
        :items="sliderItems"
      />
    </SectionLayout> -->

    <SliderSection
      headerTitle="Testimonials"
      :headerDesc="['See what our satisfied customers have to say', 'about our impact on their business success.']"
      :items="sliderItems"
    />

    <ConnectSection
      headerTitle="Connect with Experts"
      :headerDesc="['Your idea - our execution. Let\'s create', 'meaningful solutions together!']"
    />

    <img
      class="page-bg-img"
      src="/images/site/services/index/lines.svg"
    >
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import ListSection from '@/js/components/pages/services/ListSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import FirstCard from '@/js/components/global/cards/FirstCard'
import ProductSection from '@/js/components/pages/services/index/ProductSection'
import ProvenSection from '@/js/components/pages/services/index/ProvenSection'
import IndustriesSection from '@/js/components/pages/services/index/IndustriesSection'
import SectionLayout from '@/js/layouts/SectionLayout'
import AlternateList from '@/js/components/pages/services/AlternateList'
import FeedbackSlider from '@/js/components/global/sliders/FeedbackSlider'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import SliderSection from '@/js/components/global/sections/SliderSection'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'

export default {
  components: {
    HeroSection,
    ListSection,
    TheBreadcrumbs,
    FirstCard,
    PortfolioSection,
    ProductSection,
    IndustriesSection,
    ProvenSection,
    SectionLayout,
    AlternateList,
    FeedbackSlider,
    ConnectSection,
    SliderSection,
    CardsSlider
  },

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'Services',
          url: '/services'
        }
      ],

      servicesItems: [
        {
          imgURL: '/images/site/services/index/services/5.svg',
          title: 'Mobile App Development',
          desc: 'Engage your customers with an extraordinary user experience inherent in our custom mobile apps for business of any scale.',
          link: '/services/mobile-app-development'
        },
        {
          imgURL: '/images/site/services/index/services/4.svg',
          title: 'Web Development',
          desc: 'Harness the web power with our custom web development services and grab specific solutions for your business growth.',
          link: '/services/web-development'
        },
        {
          imgURL: '/images/site/services/index/services/7.svg',
          title: 'MVP Development',
          desc: 'Test your idea fast with an MVP that will save costs, reduce the product\'s time to market, and may offer constant scalability.',
          link: '/services/mvp-development'
        },
        {
          imgURL: '/images/site/services/index/services/6.svg',
          title: 'UX/UI Design',
          desc: 'Fascinate users with masterpieces that come out of our creative web designers\' hands to boost conversion rates notably.',
          link: '/services/ui-ux-design'
        },
        {
          imgURL: '/images/site/services/index/services/1.svg',
          title: 'IT Outsourcing',
          desc: 'Obtain scalable, flexible, rapidly-deployed digital solutions at a reasonable cost with our IT infrastructure outsourcing services.',
          link: '/services/it-outsourcing'
        },
        {
          imgURL: '/images/site/services/index/services/2.svg',
          title: 'IT Outstaffing',
          desc: 'Find highly-motivated professionals in web and mobile development for your team extension and start fast with your project.',
          link: '/services/it-outstaffing'
        },
        {
          imgURL: '/images/site/services/index/services/3.svg',
          title: 'Full Cycle Development',
          desc: 'Get your back covered with our tech expertise from your idea discussion until the end of the software development process and beyond.',
          link: '/services/full-cycle-development'
        }
      ],

      whyUsItems: [
        {
          textBlocks: [
            {
              title: 'Focus on Native Development',
              desc: 'Our experienced native developers create mobile apps and web solutions of exceptional quality.',
            },
            {
              title: 'Non-Disclosure Agreement',
              desc: 'We value your confidentiality and offer NDA signing to protect sensitive information from third-parties.'
            },
            {
              title: '11+ Years of Experience',
              desc: 'Our development team is always ready to put into practice their rock-solid expertise in iOS app development.'
            }
          ],
          imgURL: '/images/site/services/index/why-us/1.png'
        },

        {
          textBlocks: [
            {
              title: 'Smooth Communication',
              desc: 'Our clients don\'t feel the distance with the well-organized ongoing connection and ease in progress monitoring.',
            },
            {
              title: 'Full Cycle Development',
              desc: 'We take care of all technical aspects of your product delivery from discovery to deployment and more.'
            },
            {
              title: 'Appealing UX/UI Design',
              desc: 'We invest in perfect first impression with inspiring design to exceed user expectations and push brands further.'
            }
          ],
          imgSide: 'left',
          imgURL: '/images/site/services/index/why-us/2.png'
        },
      ],
      sliderItems: [
        {
          logo: '/images/site/temp/1.png',
          title: 'John Civijovski',
          desc: 'Director - Civi Corp Pty Limited (AU)',
          quote: 'I\'ve worked with TopDevs Inc since late 2012 and have been very pleased with development of our mobile iOS and Android apps. They\'ve been flexible with our hands on approach with app ideas making the development process very much collaborative. The team work hard for us so we can get the results we want from our mobile apps.'
        }
      ],
    }
  },
}
</script>

<style lang="scss">
  .services {
    .services-section {
      padding: var(--section-pd-y-small) 0;
      background: linear-gradient(120.79deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

      .items-list {
        &__row {
          justify-content: center;
        }

        &__item {
          width: 27%;
          margin: 0 calc(var(--space-unit) * 3);

          &:first-child {
            margin-left: 0;
          }

          &:last-child {
            margin-right: 0;
          }

          @media (max-width: 1300px) {
            width: 28%;
          }

          @media (max-width: 991px) {
            width: 45%;
          }

          @media (max-width: 575px) {
            width: 90%;
          }
        }
      }

      &__card {
        transition: .5s;

        &:hover {
          transform: translateY(-1rem) scale(1.02);
        }

        .first-card__title {
          margin-bottom: 2rem;
        }

        img {
          width: auto;
        }
      }

      &__cards-slide {
        height: 100%;
      }
    }

   .focus-section {
     padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 18.5%;
        }

        @media (max-width: 991px) {
          &__item {
            width: 25%;
          }
        }

        @media (max-width: 767px) {
          &__item {
            width: 40%;
          }
        }

        @media (max-width: 575px) {
          &__item {
            width: 80%;
          }

          &__row {
            margin-bottom: 5rem;
          }
        }
      }

      &__card {
        .first-card__img {
          margin-bottom: 5rem;
        }
      }
    }

    .why-us-section {
      padding-bottom: var(--section-pd-y-big);
      padding-top: var(--section-pd-y-small);

      &__list {
        padding: 0 7%;

        .alternate-list {
          &__text-block {
            width: 80%;
          }

          &__bg-img {
            width: 106%;
            height: 101%;
          }
        }

        @media (max-width: 575px) {
          padding: 0;

          .alternate-list {
            &__text-block {
              width: 100%;
            }
          }
        }
      }

      .portfolio-section {
        padding-bottom: var(--section-pd-y-big);
      }

      .slider-section {
        padding: 7.5rem 0 13rem 0;
        background: linear-gradient(133.98deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
        box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);
      }

      &__triangles {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 2.6%;
      }

      &__circles {
        position: absolute;
        left: 42.5%;
        top: 56%;
        width: 1.9%;
      }

      @media (max-width: 991px) {
        &__triangles, &__circles {
          display: none;
        }
      }
    }
  }
</style>
