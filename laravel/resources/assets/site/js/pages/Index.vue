<template>
  <main class="home">
    <AboutSection/>

    <FiguresSection/>

    <PortfolioSection
      headerTitle="Works of Our Pride"
      headerDesc="Get a glimpse of the best cases where our top developers have incorporated their extensive experience and cutting edge technologies."
      :items="portfolioItems"
    />

    <ServicesSection
      headerTitle="Our Services"
      :headerDesc="['We help brands every step of their digital journey', '- from IT consulting to full cycle software', 'development and further support - offering', 'flexible engagement models.']"
      :items="servicesItems"
    />

    <SolvingSectionNew
      :headerTitle="['Solving Industry', 'Challenges']"
      :headerDesc="['We enforce classic industry models with', 'innovative thinking through excellent software', 'solutions.']"
    />

    <SliderSection
      headerTitle="Happy Clients"
      :headerDesc="['Review what our satisfied clients have to say about our', 'collaboration and how we\'ve empowered their businesses.']"
    />

    <LearnSection
      headerTitle="Fresh Insights"
      :headerDesc="['Get inspired by the opportunities that the', 'latest technology uncovers for modern', 'business owners.']"
    >
      <a class="btn-default btn-default--home-page home-portfolio-section__btn" href="/blog">delve deeper</a>
    </LearnSection>

    <ConnectSection
      headerTitle="Connect with Experts"
      :headerDesc="['Become our happy customer and turn your', 'valuable idea into a striking digital solution!']"
    />

    <img
      class="page-bg-img"
      src="/images/site/index/lines.svg"
    >
  </main>
</template>

<script>
import AboutSection from '@/js/components/pages/index/AboutSection'
import FiguresSection from '@/js/components/pages/index/FiguresSection'
import PortfolioSection from '@/js/components/pages/index/PortfolioSection'
import ServicesSection from '@/js/components/pages/index/ServicesSection'
import SolvingSection from '@/js/components/pages/index/SolvingSection'
import SliderSection from '@/js/components/global/sections/SliderSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import SolvingSectionNew from '@/js/components/pages/index/SolvingSectionNew'

export default {
  components: {SolvingSectionNew, AboutSection, FiguresSection, PortfolioSection, ServicesSection, SolvingSection, SliderSection, LearnSection, ConnectSection},

  data() {
    return {
      portfolioItems: [
        {
          imgURL: '/images/site/services/outsourcing/portfolio/1.png',
          title: 'Slogger',
          desc: 'JavaScript, Jquery, PHP',
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

      servicesItems: [
        {
          imgURL: '/images/site/index/services/5.svg',
          title: 'Mobile App Development',
          desc: 'Engage your customers with an extraordinary user experience inherent in our custom mobile apps for business of any scale.',
          link: '/services/mobile-app-development'
        },
        {
          imgURL: '/images/site/index/services/4.svg',
          title: 'Web Development',
          desc: 'Harness the web power with our custom web development services and grab specific solutions for your business growth.',
          link: '/services/web-development'
        },
        {
          imgURL: '/images/site/index/services/7.svg',
          title: 'MVP Development',
          desc: 'Test your idea fast with an MVP that will save costs, reduce the product\'s time to market, and may offer constant scalability.',
          link: '/services/mvp-development'
        },
        {
          imgURL: '/images/site/index/services/6.svg',
          title: 'UX/UI Design',
          desc: 'Fascinate users with masterpieces that come out of our creative web designers\' hands to boost conversion rates notably.',
          link: '/services/ui-ux-design'
        },
        {
          imgURL: '/images/site/index/services/1.svg',
          title: 'IT Outsourcing',
          desc: 'Obtain scalable, flexible, rapidly-deployed digital solutions at a reasonable cost with our IT infrastructure outsourcing services.',
          link: '/services/it-outsourcing'
        },
        {
          imgURL: '/images/site/index/services/2.svg',
          title: 'IT Outstaffing',
          desc: 'Find highly-motivated professionals in web and mobile development for your team extension and start fast with your project.',
          link: '/services/it-outstaffing'
        },
        {
          imgURL: '/images/site/index/services/3.svg',
          title: 'Full Cycle Development',
          desc: 'Get your back covered with our tech expertise from your idea discussion until the end of the software development process and beyond.',
          link: '/services/full-cycle-development'
        }
      ],

      sliderItems: [
        {
          logo: '/images/site/temp/1.png',
          title: 'John Civijovski',
          desc: 'Director - Civi Corp Pty Limited (AU)',
          quote: 'I\'ve worked with TopDevs Inc since late 2012 and have been very pleased with development of our mobile iOS and Android apps. They\'ve been flexible with our hands on approach with app ideas making the development process very much collaborative. The team work hard for us so we can get the results we want from our mobile apps.'
        }
      ]
    }
  }
}
</script>
