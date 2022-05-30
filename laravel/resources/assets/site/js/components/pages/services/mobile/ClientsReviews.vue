<template>
  <section class="clients-reviews">
    <div class="clients-reviews__container container">

      <ServicesSectionHeader
          class="list-section__header"
          title="Clients Reviews"
          mode="left"
          :options="{
            color:'inverse'
           }"
      />

        <ClientsSlider
            :items="sectionSliderItems"
            v-scroll-reveal
        />

    </div>
  </section>
</template>

<script>

import ServicesSectionHeader from "./global/ServicesSectionHeader";
import ClientsSlider from "./sliders/ClientsSlider";

export default {
  name: 'ClientsReviews',
  components: {
    ClientsSlider,
    ServicesSectionHeader
  },
  data() {
    return {

      sectionSliderItems: [
        {
          title: 'John Civijovski',
          subtitle: 'Founder at Solocator',
          desc:` I've worked with TopDevs Inc since late 2012 and have been very pleased with development of our mobile
          iOS and Android apps. They've been flexible with our hands on approach with app ideas making the
          development process very much collaborative. The team work hard for us so we can get the results we
          want from our mobile apps.`,
          imgURL: '/images/site/services/mobile/clients/1.png'
        },
        {
          title: 'Olli Uuksulainen',
          subtitle: 'CEO, Easy Phone App Finland Oy' ,
          desc: `TopDevs Inc. developed a calling app for seniors. They handled the design and product development as well as the testing. Managers provided constant feedback and status updates, which made for a well-functioning process. Each individual team member had a clear understanding of their responsibilities.`,
          imgURL: '/images/site/services/mobile/clients/2.png'
        },
      ],
    }
  },
}
</script>

<style lang="scss">
.clients-reviews {
  position: relative;
  padding: var(--section-pd-y-big) 0;
  background: var(--color-bg-section-dark);
  color: white;

  &__container {
    position: relative;
  }

}
</style>
