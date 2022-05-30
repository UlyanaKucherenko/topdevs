<template>
  <!-- <section class="values-section">
    <div class="container">
     
    </div>
  </section> -->

    <ListSection
        class="values-section"
        headerTitle="Our Values"
        :headerDesc="['Our moral compass moves us forward and', 'defines our interaction with clients and team', 'members.']"
        headerIcon="/images/site/icons/abstract/header-2.svg"
        :items="items"
        :cardOptions="{imgWidth: 'fit', class: 'card-filled'}"
        :columns="{
          700: 1,
          default: 2
        }"
      >
        <template v-slot:cursor-follow>
          <img class="values-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/9.svg" alt="">
          <img class="values-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/10.svg" alt="">
          <img class="values-section__bg-img bg-absolute" src="/images/site/about-us/values/figure.svg" alt="">
        </template>
      </ListSection>
</template>

<script>
import ListSection from '@/js/components/pages/services/ListSection'

export default {
  components: {ListSection},

  data() {
    return {
      items: [
        {
          title: 'Flexibility',
          desc: 'Establishing a maximum comfortable environment for mutual cooperation within the team and with our business partners.',
          imgURL: '/images/site/about-us/values/1.svg'
        },
        {
          title: 'Expertise',
          desc: 'Shaping the team with the best developers and managers along with continuous improvement of their hard and soft skills.',
          imgURL: '/images/site/about-us/values/2.svg'
        },
        {
          title: 'Trust',
          desc: 'Forming mutual confidence in our staff professional experience to always deliver high-quality and clean code.',
          imgURL: '/images/site/about-us/values/3.svg'
        },
        {
          title: 'Communication',
          desc: 'Negotiating openly every aspect of collaboration to offer the best solutions and address all expectations of both clients and teammates.',
          imgURL: '/images/site/about-us/values/4.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .about-us {
    .values-section {
      padding-bottom: var(--section-pd-y-big);

      .items-list {
        width: 55%;

        &__item {
          width: 45%;
        }

        @media (max-width: 1199px) {
          width: 70%;
          margin: 0 auto;
        }

        @media (max-width: 1000px) {
          width: 100%;

          &__item {
            width: 42%;
          }
        }

        @media (max-width: 700px) {
          &__item {
            width: 90%;
          }
        }
      }

      &__bg {
        &-left-spot {
          width: 40%;
          left: -5%;
          bottom: 10%;
        }

        &-right-spot {
          width: 47%;
          right: 7%;
          top: 15%; 
        }

        &-img {
          width: 21%;
          right: 20%;
          top: 23%;
        }

        @media (max-width: 1199px) {
          &-left-spot, &-right-spot, &-img {
            display: none;
          }
        }
      }
    }
  }
</style>