<template>
  <footer class="footer">
    <div class="container">
      <div class="footer__categories">
        <div class="footer__logo">
          <img src="/images/site/logo-white.svg" alt="">
        </div>

        <div class="footer__services">
          <a href="/services" class="footer__category-title hover-bottom-line">Services</a>
            <div class="footer__category-block">
              <ul class="footer__category-block-items">
                <li
                  class="footer__category-block-item hover-bottom-line"
                  v-for="(item, index) in services"
                  :key="index"
                >
                  <a :href="item.url"> {{ item.text }} </a>
                </li>
              </ul>
            </div>
        </div>

        <div class="footer__industries">
          <a href="/industries" class="footer__category-title hover-bottom-line">Industries</a>
          <ul
            class="footer__category-block"
            v-for="(item, index) in industries"
            :key="index"
          >
            <li class="footer__category-block-title hover-bottom-line" @click="linkOnClick(item.url, $event)">
              <a :href="item.url || null"> {{ item.text }} </a>
            </li>
          </ul>
        </div>

        <div class="footer__policy">
          <a href="/policy/privacy" class="footer__category-title hover-bottom-line">Privacy Policy</a>
          <ul
            class="footer__category-block"
            v-for="(item, index) in policy"
            :key="index"
          >
            <li class="footer__category-block-title hover-bottom-line">
              <a :href="item.url"> {{ item.text }} </a>
            </li>
          </ul>
        </div>

        <div class="footer__contacts">
          <div class="footer__category-title">Contacts</div>
          <div class="footer__category-block">
            <div class="footer__category-block-title">Phones:</div>
            <ul class="footer__category-block-items">
              <li
                class="footer__category-block-item hover-bottom-line"
                v-for="(item, index) in phones" :key="index"
              >
                <a :href="'tel:' + item.href"> {{ item.text }} </a>
              </li>
            </ul>
          </div>

          <div class="footer__category-block">
            <div class="footer__category-block-title ">Email:</div>
            <a class="hover-bottom-line block" :href="`mailto:${email}`"> {{ email }} </a>
          </div>

          <a
            class="footer__btn btn-default btn-default--bordered"
            href="/contacts"
          >
            More Contacts
          </a>
        </div>

        <div class="footer__location">
          <div class="footer__category-title hidden">hidden</div>
          <div class="footer__category-block">
            <div class="footer__category-block-title">Headquarters</div>
            <ul class="footer__category-block-items">
              <li
                class="footer__category-block-item"
                v-for="(item, index) in headquarters"
                :key="index"
              >
                {{ item }}
              </li>
            </ul>
          </div>

          <div class="footer__category-block">
            <div class="footer__category-block-title">R&D center:</div>
            <div class="footer__category-block-items">
              <div class="footer__category-block-item"> {{ center }} </div>
            </div>
          </div>

          <ul
            class="footer__location-social-links"
          >
            <li
              class="footer__location-social-link"
              v-for="(item, index) in socialLinks" :key="index"
            >
              <a
                @click="socialOnClick(item.url, $event)"
                :href="item.url"
                target="_blank"
              >
                <SvgKeeper :name="item.name" />
              </a>
            </li>
          </ul>
        </div>
      </div>

      <span class="footer__copyright"> <img src="/images/site/icons/copyright-icon.svg"> 2009 - 2021 Copyright Topdevs. All Rights Reserved </span>
    </div>
  </footer>
</template>

<script>
import SvgKeeper from '@/js/components/global/SvgKeeper'

export default {
  components: {SvgKeeper},

  data() {
    return {
      services: [
        {
          text: 'IT Outsourcing',
          url: '/services/it-outsourcing'
        },
        {
          text: 'IT Outstaffing',
          url: '/services/it-outstaffing'
        },
        {
          text: 'Full Cycle Development',
          url: '/services/full-cycle-development'
        },
        {
          text: 'Web  Development',
          url: '/services/web-development'
        },
        {
          text: 'Mobile App Development',
          url: '/services/mobile-app-development'
        },
        {
          text: 'UX/UI Design',
          url: '/services/ui-ux-design'
        },
        {
          text: 'MVP Development',
          url: '/services/mvp-development'
        }
      ],

      industries: [
        {
          text: 'Portfolio',
          url: '/portfolio'
        },
        {
          text: 'Blog',
          url: '/blog'
        },
        {
          text: 'About Us',
          url: '/company'
        }
      ],

      policy: [
        {
          text: 'Cookies Policy',
          url: '/policy/cookies'
        },
      ],

      phones: [
        {
          text: '+1 (323) 315 0425 (USA)',
          href: '+13233150425'
        },
        {
          text: '+1 (647) 877 2408 (CAN)',
          href: '+16478772408'
        }
      ],

      email: 'info@topdevs.org',
      headquarters: ['Canada (Toronto)'],
      center: 'Ukraine',

      socialLinks: [
        {
          name: 'linkedin',
          url: 'https://www.linkedin.com/company/topdevs'
        },
        {
          name: 'fb',
          url: 'https://www.facebook.com/TopDevsInc/'
        },
        {
          name: 'inst',
          url: 'https://instagram.com/topdevs_team'
        },
        {
          name: 'dribble',
          url: 'https://dribbble.com/TopDevs'
        },
        {
          name: 'm-logo',
          url: 'https://topdevs.medium.com/'
        }
      ]
    }
  },

  methods: {
    socialOnClick(item, e) {
      if (!item) {
        e.preventDefault()
      }
    },

    linkOnClick(item, e) {
      if (!item) {
        e.preventDefault()
        this.$modal.show('coding')
      }
    }
  },
}
</script>

<style lang="scss">
  .footer {
    background: var(--red-main);
    color: var(--white-clear);
    padding: 4rem 0;

    a {
      color: inherit;
    }

    &__categories {
      display: flex;
      margin-bottom: 6rem;
      display: grid;
      grid-template-columns: 19% 18% 13% 15% 20% 15%;

      @media (max-width: 1250px) {
        grid-template-columns: repeat(3, calc(100% / 3));
        grid-row-gap: 5rem;
      }

      @media (max-width: 767px) {
        grid-template-columns: repeat(2, 25rem);
        // grid-template-columns: repeat(2, 190px);
      }

      @media (max-width: 550px) {
        grid-template-columns: 100%;
        grid-row-gap: 2.5rem;
      }
    }

    &__category-title {
      font-weight: 600;
      margin-bottom: 3rem;
      display: inline-block;
    }

    &__category-block {
      margin-bottom: 3rem;

      &-title {
        font-weight: 600;
        margin-bottom: 0.8rem;
        width: fit-content;
      }

      &-item {
        padding-bottom: 0.4rem;
        margin-bottom: 0.8rem;
        width: fit-content;
        border-bottom: 0.1rem solid rgba(255, 255, 255, 0);
        transition: .1s;
      }

      a {
        width: fit-content;
      }
    }


    &__contacts {
      .btn-default {
        text-transform: none;
      }

      .footer__btn {
        padding-left: 3.3rem;
        padding-right: 3.3rem;
        width: fit-content;
      }
    }

    &__location {
      display: flex;
      flex-direction: column;

      &-social-links {
        height: 6rem;
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: auto;
      }

      &-social-link {
        width: 3rem;
        height: 3rem;
        transition: .25s;

        &:hover {
          filter: drop-shadow(0px 0px 4px rgba(0,0,0,.4));
        }

        img {
          width: 3rem;
        }
      }
    }

    &__copyright {
      display: flex;
      align-items: center;

      img {
        margin: 0 1rem;
      }
    }
  }
</style>
