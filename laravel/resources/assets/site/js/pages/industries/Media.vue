<template>
  <main class="media">
    <HeroSection
      class="hero-section"
      :title="['Media & Entertainment', 'Web and Mobile App', 'Development Services']"
      :desc="['Powerful media and entertainment software to', 'exceed your target audience expectations and', 'boost viewership.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/industries/media/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <ListSection
      class="services-section"
      :headerTitle="['Entertainment App', 'Development Services']"
      :headerDesc="['We make visually impressive web media', 'platforms, mobile live streaming apps and', 'more to keep users hooked for hours.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      :items="servicesItems"
      cardType="row-title"
      :columns="{
        660: 1,
        default: 3
      }"
    >
      <img 
        class="services-section__bg-fig"
        src="/images/site/industries/media/services/bg-fig.svg" alt="" 
        slot="cursor-follow"
      >
    </ListSection>

    <ListSection
      class="features-section"
      headerTitle="Core Features"
      :headerDesc="['We build entertainment apps to serve endless leisure', 'activities and bring enjoyable moments for your customers.']"
      headerIcon="/images/site/icons/abstract/header-5.svg"
      headerMode="center"
      :items="featuresItems"
      cardType="row-filled"
      :columns="{
        992: 2,
        600: 1,
        default: 3
      }"
    >
      <template v-slot:cursor-follow>
        <img class="features-section__bg-spot-left" src="/images/site/icons/spots/1.svg" alt="" v-scroll-reveal="{scale: 0}">
        <img class="features-section__bg-spot-right" src="/images/site/icons/spots/2.svg" alt="" v-scroll-reveal="{scale: 0}">
        <img class="features-section__bg-lines" src="/images/site/icons/abstract/fig-27.svg" alt="">
      </template>
    </ListSection>

    <ListSection
      class="care-section"
      headerTitle="Who Should Care"
      :headerDesc="['We offer full-cycle web and mobile app', 'development services to all-sized firms functioning', 'in the media and entertainment industry.']"
      headerIcon="/images/site/icons/abstract/header-2.svg"
      cardType="img-title"
      :items="careItems"
      :columns="{
        992: 2,
        450: 1,
        default: 4
      }"
    />

    <SplittedHeaderSection
      class="benefits-section"
      :headerTitle="['Benefits of', 'Entertainment Apps']"
      :headerDesc="['Present the best possible user experience to', 'your audience to become the market leader.']"
      headerIcon="/images/site/icons/abstract/header-16.svg"
      :items="benefitsItems"
      :listOptions="{
        columns: {
          default: 1
        }
      }"
    >
      <template v-slot:cursor-follow>
        <img class="benefits-section__bg-dots" src="/images/site/icons/abstract/fig-28.svg" alt="" v-cursor-follow="{multiplier: .4}">
      </template>
    </SplittedHeaderSection>
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ListSection from '@/js/components/pages/services/ListSection'
import SplittedHeaderSection from '@/js/components/global/sections/SplittedHeaderSection'

export default {
  components: {HeroSection, TheBreadcrumbs, ListSection, SplittedHeaderSection},

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'Industries',
          url: '/industries'
        },
        {
          name: 'Media & Entertainment',
          url: '/industries/media-entertainment-software-development'
        }
      ],

      servicesItems: [
        {
          title: 'Live Streaming App Development',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'Analytics Implementation',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'TV Streaming Environment',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'VoD App Development',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'Content Distribution Management',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'Social Media Network Development',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'Interactive Second-Screen Apps',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'TV and Video Ads Management',
          icon: '/images/site/industries/media/services/circle.svg'
        },
        {
          title: 'In-App Advertising',
          icon: '/images/site/industries/media/services/circle.svg'
        }
      ],

      featuresItems: [
        {
          title: 'Audio Streaming',
          icon: '/images/site/industries/media/features/1.png'
        },
        {
          title: 'GPS Tracking',
          icon: '/images/site/industries/media/features/2.png'
        },
        {
          title: 'Push Notifications',
          icon: '/images/site/industries/media/features/3.png'
        },
        {
          title: 'Video Streaming',
          icon: '/images/site/industries/media/features/4.png'
        },
        {
          title: 'In-App Purchases',
          icon: '/images/site/industries/media/features/5.png'
        },
        {
          title: 'Social Media Integration',
          icon: '/images/site/industries/media/features/6.png'
        },
        {
          title: 'Real-Time Content Update',
          icon: '/images/site/industries/media/features/7.png'
        },
        {
          title: 'Social Media Sharing',
          icon: '/images/site/industries/media/features/8.png'
        },
        {
          title: 'Advanced CMS',
          icon: '/images/site/industries/media/features/9.png'
        }
      ],

      careItems: [
        {
          title: 'Startups',
          imgURL: '/images/site/industries/media/care/1.svg'
        },
        {
          title: 'Nonprofit Organizations',
          imgURL: '/images/site/industries/media/care/2.svg'
        },
        {
          title: 'Medium Business',
          imgURL: '/images/site/industries/media/care/3.svg'
        },
        {
          title: 'Established Enterprises',
          imgURL: '/images/site/industries/media/care/4.svg'
        }
      ],

      benefitsItems: [
        {
          title: 'User Engagement',
          desc: 'Immerse your customers with a personalized experience, fast loading speed, mobility, and cross-browser compatibility.',
          imgURL: '/images/site/industries/media/benefits/1.svg'
        },
        {
          title: 'Multimedia Streaming',
          desc: 'Expand your audience reach with modern broadcasting solutions for media and entertainment companies.',
          imgURL: '/images/site/industries/media/benefits/2.svg'
        },
        {
          title: 'Communication Efficiency',
          desc: 'Provide sufficient channels of dialogue for your clients with loyalty programs, live chatting, and social sharing features.',
          imgURL: '/images/site/industries/media/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .media {
    @media (min-width: 992px) {
      .hero-section {
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
        max-width: 105rem;
        margin: 0 auto;

        &__item {
          width: 28%;

          @media (max-width: 660px) {
            width: 90%;
          }
        }
      }

      &__bg-fig {
        position: absolute;
        right: 50vw;
        bottom: 7%;
        width: 7rem;
        transform: translateX(50rem);

        @media (max-width: 1200px) {
          right: 5vw;
          transform: unset;
        }

        @media (max-width: 500px) {
          display: none;
        }
      }
    }

    .features-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 25%;
        }

        &__row {
          justify-content: space-evenly;
        }

        @media (max-width: 991px) {
          &__row {
            justify-content: flex-start;
          }

          &__item {
            width: 40%;
            margin: 0 5%;
          }
        }

        @media (max-width: 600px) {
          &__row {
            justify-content: space-around;
          }

          &__item {
            width: 90%;
            margin: 0;
          }
        }
      }

      &__bg {
        &-spot-left, &-spot-right, &-lines {
          position: absolute;
          z-index: -1;

          @media (max-width: 1500px) {
            display: none;
          }
        }

        &-spot-left {
          left: -5%;
          top: 0%;
          transform: translateY(-70%);
        }

        &-spot-right {
          right: -5%;
          top: 50%;
          transform: translateY(-50%);
        }

        &-lines {
          left: 10%;
          top: -30%;
          opacity: .5;
        }
      }
    }

    .care-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        &__item {
          width: 20%;

          @media (max-width: 991px) {
            width: 40%;
          }

          @media (max-width: 450px) {
            width: 90%;
          }
        }
      }
    }

    .benefits-section {
      
      &__bg-dots {
        position: absolute;
        left: 20%;
        bottom: 4%;

        @media (max-width: 1150px) {
          display: none;
        }
      }
    }

    .portfolio-section {
      padding-top: var(--section-pd-y-big);
      padding-bottom: 0;

      &__bg-lines {
        position: absolute;
        z-index: -1;
        right: -5%;
        top: 5%;
        opacity: .5;

        @media (max-width: 991px) {
          display: none;
        }
      }
    }
  }
</style>