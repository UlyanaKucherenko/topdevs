<template>
  <main class="industries">
    <HeroSection
      class="hero-section"
      :title="['Custom Web and Mobile', 'Solutions for Business', 'and Startups']"
      :desc="['Tackling your business challenges with effective', 'software solutions that become your rock-solid', 'competitive advantage on the market.']"
      btnText="Go Digital"
      imgURL="/images/site/industries/index/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />
    
    <ServicesSlider
      :items="sectionSliderItems"
      v-scroll-reveal
    />

    <ListSection
      class="why-us-section"
      headerTitle="Why Us"
      :headerDesc="['We are aspired to inhale your business', 'value into a competitive engineering', 'solution in a cost-efficient way.']"
      headerIcon="/images/site/icons/abstract/header-15.svg"
      :items="whyUsItems"
      :cardOptions="{
        imgWidth: 'fit'
      }"
      :columns="{
        900: 2,
        600: 1,
        default: 3
      }"
    />

    <PortfolioSection
      headerTitle="Portfolio"
      :headerDesc="['Discover the cases where our high-class', 'specialists have imprinted their unique skills.']"
      slidesIds="solocator"
    >
      <template v-slot:cursor-follow>
        <img class="portfolio-section__bg-spot" src="/images/site/industries/index/portfolio/bg-spot.svg">
      </template>
    </PortfolioSection>

    <SliderSection
      class="slider-section"
      headerTitle="Testimonials"
      :headerDesc="['See what our satisfied customers have to say about', 'our impact on their business success.']"
      :items="sliderItems"
    />

    <ConnectSection
      headerTitle="Reach Industry Experts"
      :headerDesc="['Your idea - our execution. Let\'s create', 'meaningful solutions together!']"
    />
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'
import ServicesSlider from '@/js/components/global/sliders/ServicesSlider'
import ListSection from '@/js/components/pages/services/ListSection'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import SliderSection from '@/js/components/global/sections/SliderSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'

export default {
  components: {HeroSection, TheBreadcrumbs, ServicesSlider, ListSection, PortfolioSection, SliderSection, ConnectSection},

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'Industries',
          url: '/industries'
        },
      ],

      sectionSliderItems: [
        {
          title: 'Media & Entertainment',
          desc: ['Appeal to your user gracefully with entertainment', 'apps extremely popular these days.'],
          imgURL: '/images/site/industries/index/section-slider/1.jpg',
          headerIconURL: '/images/site/icons/abstract/header-2.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-1.svg',
          link: '/industries/media-entertainment-software-development',
          items: [
            'Live Broadcasting Apps',
            'Video Streaming Apps',
            'Online Media Platforms',
            'Music Streaming Apps',
            'Photo Editing & Sharing Apps'
          ]
        },
        {
          title: 'Sports & Fitness',
          desc: ['Level up the users\' engagement in their', 'health and training results improvement.'],
          imgSide: 'left',
          imgURL: '/images/site/industries/index/section-slider/2.jpg',
          headerIconURL: '/images/site/icons/abstract/header-1.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-2.svg',
          link: '/industries/sports-fitness-app-development',
          items: [
            'Personal Training Mobile Apps',
            'Sports Apps',
            'Fitness Tracker Mobile Apps',
            'Sports Medicine Software',
            'Betting Applications'
          ]
        },
        {
          title: 'Logistics & Tracking',
          desc: ['Outperform service expectations with location', 'tracking app and supply chain management.'],
          imgURL: '/images/site/industries/index/section-slider/3.jpg',
          headerIconURL: '/images/site/icons/abstract/header-5.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-3.svg',
          link: '/industries/logistics-tracking-app-development',
          items: [
            'Travel Mobile Apps',
            'Appointment Booking Systems',
            'Task Management Apps',
            'Warehouse Management Systems',
            'Route Planner Apps'
          ]
        },
        {
          title: 'Healthcare',
          desc: ['Heighten patient experience and medical', 'staff operating with specialized software.'],
          imgSide: 'left',
          imgURL: '/images/site/industries/index/section-slider/4.jpg',
          headerIconURL: '/images/site/icons/abstract/header-4.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-4.svg',
          link: '/industries/healthcare-software-development',
          items: [
            'EHR/EMR Systems',
            'Patient Portals',
            'Remote Diagnostics Systems',
            'Remote Patient Monitoring',
            'Patient Rounding Apps'
          ]
        },
        {
          title: 'Retail & E-Commerce',
          desc: ['Grow your business by adopting innovations', 'into shopping experience and operations.'],
          imgURL: '/images/site/industries/index/section-slider/5.jpg',
          headerIconURL: '/images/site/icons/abstract/header-7.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-5.svg',
          link: '/industries/retail-ecommerce-software-development',
          items: [
            'On-demand Delivery Apps',
            'E-Commerce Websites',
            'Custom Trading Platforms',
            'CRM/ERP Systems',
            'Business Productivity Apps'
          ]
        },
        {
          title: 'Education & E-Learning',
          desc: ['Upgrade educational experiences with interactive', 'and easy-to-use e-learning solutions.'],
          imgSide: 'left',
          imgURL: '/images/site/industries/index/section-slider/6.jpg',
          headerIconURL: '/images/site/icons/abstract/header-9.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-6.svg',
          link: '/industries/elearning-software-development',
          items: [
            'Mobile Education Apps',
            'Online Training Courses',
            'Corporate eLearning Solutions',
            'Exam Prep Programs',
            'Quiz Apps'
          ]
        },
        {
          title: 'Real Estate',
          desc: ['Design an IT solution for better cooperation', 'between all the parties involved in real estate.'],
          imgURL: '/images/site/industries/index/section-slider/7.jpg',
          headerIconURL: '/images/site/icons/abstract/header-11.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-7.svg',
          link: '/industries/real-estate-app-development',
          items: [
            'Booking Apps',
            'Property Management Apps',
            'Apps For Real Estate Agents',
            'Real Estate ERP Systems',
            'MLS Listing Websites'
          ]
        },
        {
          title: 'Dating',
          desc: ['Climb app store top charts with your perfect', 'dating app that resonates with the audience.'],
          imgSide: 'left',
          imgURL: '/images/site/industries/index/section-slider/8.jpg',
          headerIconURL: '/images/site/icons/abstract/header-10.svg',
          listIconURL: '/images/site/industries/index/section-slider/icon-8.svg',
          link: '/industries/dating-app-development',
          items: [
            'Matchmaking Apps',
            'Speed Dating Apps',
            'Dating Community Portals',
            'Relationship Apps',
            'Custom Dating Apps'
          ]
        },
      ],

      whyUsItems: [
        {
          title: 'Focus on Native Development',
          desc: 'Our experienced native developers create mobile apps and web solutions of exceptional quality.',
          imgURL: '/images/site/industries/index/why-us/1.svg'
        },
        {
          title: 'Non-Disclosure Agreement',
          desc: 'We value your confidentiality and offer NDA signing to protect sensitive information from third-parties.',
          imgURL: '/images/site/industries/index/why-us/2.svg'
        },
        {
          title: '11+ Years of Experience',
          desc: 'Our development team is always ready to put into practice their rock-solid expertise in iOS app development.',
          imgURL: '/images/site/industries/index/why-us/3.svg'
        },
        {
          title: 'Smooth Communication',
          desc: 'Our clients don\'t feel the distance with the well-organized ongoing connection and ease in progress monitoring.',
          imgURL: '/images/site/industries/index/why-us/4.svg'
        },
        {
          title: 'Full Cycle Development',
          desc: 'We take care of all technical aspects of your product delivery from discovery to deployment and more.',
          imgURL: '/images/site/industries/index/why-us/5.svg'
        },
        {
          title: 'Appealing UX/UI Design',
          desc: 'We invest in perfect first impression with inspiring design to exceed user expectations and push brands further.',
          imgURL: '/images/site/industries/index/why-us/6.svg'
        }
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
  }
}
</script>

<style lang="scss">
  .industries {
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 38%;
        }
      }
    }

    .why-us-section {
      padding: var(--section-pd-y-big) 0;

      .items-list {
        &__item {
          width: 34rem;

          @media (max-width: 1330px) {
            width: 25%;
          }

          @media (max-width: 900px) {
            width: 40%;
          }

          @media (max-width: 600px) {
            width: 90%;
          }
        }
      }
    }

    .portfolio-section {
      &__bg-spot {
        position: absolute;
        left: 0;
        bottom: 0;
        z-index: -1;
        opacity: .5;
      }
    }

    .slider-section {
      background: linear-gradient(139.57deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
      box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);
    }
  }
</style>