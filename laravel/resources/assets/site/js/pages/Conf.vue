<template>
  <div class="conf">
    <ConfHeader/>
    <ConfHero/>
    <ConfGeofencing/>
    <ConfBeuseful/>
    <ConfTopics/>
    <ConfGeonumbers/>
    <ConfSpeaker/>

    <ContactForm/>
    <ConfFooter/>
  </div>


</template>

<script>

import ConfHeader from '@/js/pages/conf/confHeader'
import ConfHero from '@/js/pages/conf/confHero'
import ConfGeofencing from '@/js/pages/conf/confGeofencing'
import ConfBeuseful from '@/js/pages/conf/confBeuseful'
import ConfTopics from '@/js/pages/conf/confTopics'
import ConfGeonumbers from '@/js/pages/conf/confGeonumbers'
import ConfSpeaker from '@/js/pages/conf/confSpeaker'
import ContactForm from '@/js/pages/conf/contactForm'
import ConfFooter from '@/js/pages/conf/confFooter'


export default {
  components: {
    ConfHeader,
    ConfHero,
    ConfGeofencing,
    ConfBeuseful,
    ConfTopics,
    ConfGeonumbers,
    ConfSpeaker,
    ContactForm,
    ConfFooter
  },
  data() {
    return {}
  }
}
</script>

<style lang="scss">
:root {
  --header-height: 80px;
  --space-unit: 1px;

  @media (max-width: 991px) {
    --space-unit: .8px;
  }

  @media (max-width: 767px) {
    --space-unit: .6px;
  }

  @media (max-width: 575px) {
    --space-unit: .5px;
  }
}

#app-conf {
  overflow-x: hidden;
}

.btn {
  max-width: 298px;
  width: 100%;
  min-height: 64px;
  background: #C83A36;
  display: flex;
  justify-content: center;
  align-items: center;

  font-weight: 600;
  font-size: 20px;
  letter-spacing: 0.5px;
  color: #FFFFFF;
  cursor: pointer;
  text-decoration: none;

  &:hover {
    color: white;
  }

  &--light {
    background: white;
    color: #090909;

    &:hover {
      color: black;
    }
  }
}

.title {
  font-weight: 500;
  font-size: 48px;
  line-height: 140%;
  color: #262626;

  @media (max-width: 767px) {
    font-size: 40px;
  }
}
</style>
