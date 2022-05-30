<template>
  <main class="contact-us">
    <section class="contact-section">
      <div class="container">
        <SectionHeader
          invalid="123123"
          title="Contact TopDevs"
          :desc="['Got an idea in mind? Reach out in the best fitting way: give us a call, mail', 'directly or drop us a line. Start a journey to your amazing digital product today!']"
          icon="/images/site/icons/abstract/header-2.svg"
          mode="center"
        />
        <ConnectForm
          class="contact-section__form"
          color="inverse"
        />
      </div>

      <img src="/images/site/icons/abstract/fig-43.svg" alt="" class="contact-section__bg-square bg-absolute" v-cursor-follow="{multiplier: .2}">
      <img src="/images/site/icons/abstract/fig-42.svg" alt="" class="contact-section__bg-triangle bg-absolute" v-cursor-follow="{multiplier: .3}">
    </section>
    
    <section class="info-section">
      <div class="container">
        <SectionHeader
          title="Our Contact Info"
          :desc="['We are thrilled to hear from you and start thinking', 'through your business project.']"
          icon="/images/site/icons/abstract/header-5.svg"
          mode="center"
        />

        <ul class="info-section__cards">
          <li
            class="contact-us-card card-filled"
            v-for="(infoItem, index) in infoItems" :key="index"
            v-scroll-reveal="{delay: index * 100}"
          >
            <div class="contact-us-card__top-row">
              <img class="contact-us-card__icon" :src="infoItem.icon" alt="">
              <div class="contact-us-card__title text-md">{{ infoItem.title }}</div>
            </div>
            <ul class="contact-us-card__list text-sm">
              <li 
                class="contact-us-card__list-item text-with-dot text-with-dot--has-width"
                v-for="(item, index) in infoItem.items" :key="index"
              >
                {{ item }}
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <img src="/images/site/lines/1.svg" alt="" class="info-section__bg-lines bg-absolute">
    </section>
  </main>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ConnectForm from '@/js/components/pages/services/ConnectForm/ConnectForm'

export default {
  components: {SectionHeader, ConnectForm},

  data() {
    return {
      infoItems: [
        {
          title: 'Call Us',
          icon: '/images/site/icons/contact-info/1.svg',
          items: ['+1 (323) 315 0425 (USA)', '+1 (647) 877 2408 (CAN)']
        },
        {
          title: 'Find Us',
          icon: '/images/site/icons/contact-info/2.svg',
          items: ['Headquarters: Canada (Toronto)', 'R&D center: Ukraine']
        },
        {
          title: 'Message Us',
          icon: '/images/site/icons/contact-info/3.svg',
          items: ['info@topdevs.org']
        }
      ]
    }
  }
}
</script>

<style lang="scss">
  .contact-us {
    .contact-section {
      position: relative;
      padding-top: calc(var(--header-height) * 2);
      padding-bottom: calc(var(--space-unit) * 16);

      &__form {
        max-width: 83rem;
        margin: 0 auto;
      }

      &__bg {
        &-square {
          right: 14%;
          top: 11%;
          width: 6%;
        }

        &-triangle {
          left: 11%;
          top: 33%;
          width: 5%;
        }

        @media (max-width: 1400px) {
          &-square, &-triangle {
            display: none;
          }
        }
      }
    }

    .info-section {
      position: relative;
      padding-bottom: calc(var(--space-unit) * 14);

      &__cards {
        display: grid;
        grid-template-columns: repeat(3, 33rem);
        grid-column-gap: calc(var(--space-unit) * 6);
        grid-row-gap: calc(var(--space-unit) * 6);
        justify-content: center;

        @media (max-width: 1300px) {
          grid-template-columns: repeat(2, 33rem);
        }

        @media (max-width: 767px) {
          grid-template-columns: repeat(2, 45%);
        }

        @media (max-width: 500px) {
          grid-template-columns: repeat(1, 90%);
        }
      }

      &__bg-lines {
        bottom: 0;
        opacity: .5;
      }
    }

    &-card {
      &__top-row {
        display: flex;
        align-items: center;
        font-weight: 600;
      }

      &__icon {
        width: 4rem;
        margin-right: 1.5rem;
      }

      &__list {
        margin-left: 5.5rem;

        @media (max-width: 650px) {
          margin-left: 0;
          margin-top: calc(var(--space-unit) * 2);
        }

        &-item {
          --color: var(--grey-lighter);
          line-height: 150%;
          padding-left: 1em;

          &::before {
            top: .6em;
          }
        }
      }
    }
  }
</style>