<template>
  <main class="about-us">
    <HeroSection/>

    <TheBreadcrumbs
      :items="breadcrumbsItems"
    />

    <MapSection/>
    <LeaderSection/>
    <MissionSection/>
    <ValuesSection/>
    <TimelineSection/>
    <ConnectSection
      :headerDesc="['Become our happy client and turn your', 'valuable idea into a striking digital solution!']"
    />
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/about-us/HeroSection'
import MapSection from '@/js/components/pages/about-us/MapSection'
import LeaderSection from '@/js/components/pages/about-us/LeaderSection'
import MissionSection from '@/js/components/pages/about-us/MissionSection'
import ValuesSection from '@/js/components/pages/about-us/ValuesSection'
import TimelineSection from '@/js/components/pages/about-us/TimelineSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'
import TheBreadcrumbs from '@/js/components/global/TheBreadcrumbs'

export default {
  components: {HeroSection, MapSection, LeaderSection, MissionSection, ValuesSection, TimelineSection, ConnectSection, TheBreadcrumbs},

  data() {
    return {
      breadcrumbsItems: [
        {
          name: 'About Us',
          url: '/about-us'
        },
      ],
    }
  }
}
</script>

<style lang="scss">
  .about-us {

  }
</style>