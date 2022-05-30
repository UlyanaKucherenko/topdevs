<template>
  <header
    :class="headerClassName"
    ref="header"
  >
    <div
      :class="{
        'container header__inner': true,
      }"
    >
      <a
        href="/"
        class="header__logo"
      >
        <img
          :src="`${!bgIsFilled && navColorIsInverted ? '/images/site/logo-white.svg' : '/images/site/logo.svg'}`"
          alt=""
        >
      </a>

      <nav class="header-nav">
        <ul class="header-nav__list">
          <AbsoluteDropdown
            v-for="(item, index) in navItems"
            :key="index"
            tag="li"
            class="header-nav-item text-with-border"
            :coords="{left: '-2rem'}"
            mode="hover"
          >
            <template v-slot:btn>
              <a
                :class="{
                  'header-nav-item__btn': true,
                  'header-nav-item__btn--active': existsInURL(item.url),
                  'header-nav-item__btn--inverted': !bgIsFilled && navColorIsInverted
                }"
                :href="item.url"
                @click="menuItemClick(item, $event)"
              >
                {{ item.name }}
              </a>
            </template>

            <template
              v-if="item.children && item.children.length"
              v-slot:content
            >
              <ul class="header-nav-item__list">
                <li
                  :class="{
                    'header-nav-item__list-item': true,
                    'text-with-border': true,
                    'header-nav-item__list-item--active': existsInURL(item.url)
                  }"
                  v-for="(item, index) in item.children" :key="index"
                >
                  <a :href="item.url"> {{ item.name }} </a>
                </li>
              </ul>
            </template>
          </AbsoluteDropdown>
        </ul>

        <div
          :class="{
            'header-nav__burger': true,
            'header-nav__burger--opened': burgerIsOpened
          }"
          @click="burgerIsOpened ? closeBurger() : openBurger()"
        >
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
    </div>

    <transition name="fade-top">
      <div
        v-if="burgerIsOpened"
        :class="{
          'header-mobile': true,
          'header-mobile--sub-active': Object.keys(activeMenuItem).length
        }"
      >
        <ul class="header-mobile__main-list">
          <component
            class="header-mobile__main-item container"
            v-for="(item, index) in navItems"
            :key="index"
            :is="item.children && item.children.length ? 'li' : 'a'"
            :href="item.children && item.children.length ? null : item.url"
            @click="menuItemClick(item, $event)"
          >
            {{ item.name }}
            <img
              v-if="item.children && item.children.length"
              src="/images/site/icons/arrows/8.svg"
            >
          </component>
        </ul>

        <ul class="header-mobile__sub-list">
          <li class="header-mobile__title">
            {{ activeMenuItem.name }}
          </li>

          <li class="header-mobile__sub-item">
            <a :href="activeMenuItem.url"> {{ activeMenuItem.name }} </a>
          </li>

          <li
            class="header-mobile__sub-item"
            v-for="(item, index) in activeMenuItem.children"
            :key="index"
          >
            <a @click="menuItemClick(item)" :href="item.url"> {{ item.name }} </a>
          </li>

          <div
            class="header-mobile__back"
            @click="activeMenuItem = {}"
          >
            <img src="/images/site/arrow-right.svg" alt="">
            Back
          </div>
        </ul>
      </div>
    </transition>
  </header>
</template>

<script>
import gsap from 'gsap'
import delay from 'delay'
import AbsoluteDropdown from '@/js/components/global/dropdowns/AbsoluteDropdown'

export default {
  components: {
    AbsoluteDropdown
  },

  data() {
    return {
      mounted: false,
      initialTween: null,
      burgerIsOpened: false,
      bgIsFilled: false,
      menuIsVisible: true,
      activeMenuItem: {},
      scrollTop: {
        prev: 0,
        next: 0
      },
      navItems: [
        {
          name: 'Services',
          url: '/services',
          children: [
            {
              name: 'IT Outsourcing',
              url: '/services/it-outsourcing'
            },
            {
              name: 'Web Development',
              url: '/services/web-development'
            },
            {
              name: 'IT Outstaffing',
              url: '/services/it-outstaffing'
            },
            {
              name: 'Mobile App Development',
              url: '/services/mobile-app-development'
            },
            {
              name: 'Full Cycle Development',
              url: '/services/full-cycle-development'
            },
            {
              name: 'UX/UI Design',
              url: '/services/ui-ux-design'
            },
            {
              name: 'MVP Development',
              url: '/services/mvp-development'
            }
          ]
        },
        {
          name: 'Industries',
          url: '/industries',
          children: [
            {
              name: 'Media & Entertainment',
              url: '/industries/media-entertainment-software-development'
            },
            {
              name: 'Sports & Fitness',
              url: '/industries/sports-fitness-app-development'
            },
            {
              name: 'Logistics & Tracking',
              url: '/industries/logistics-tracking-app-development'
            },
            {
              name: 'Healthcare',
              url: '/industries/healthcare-software-development'
            },
            {
              name: 'Retail & E-Commerce',
              url: '/industries/retail-ecommerce-software-development'
            },
            {
              name: 'Education & E-Learning',
              url: '/industries/elearning-software-development'
            },
            {
              name: 'Real Estate',
              url: '/industries/real-estate-app-development'
            },
            {
              name: 'Dating',
              url: '/industries/dating-app-development'
            }
          ]
        },
        {
          name: 'Portfolio',
          url: '/portfolio'
        },
        {
          name: 'Blog',
          url: '/blog'
        },
        {
          name: 'About Us',
          url: '/company'
        },
        {
          name: 'Contacts',
          url: '/contacts',
        }
      ],
    }
  },


  computed: {
    headerClassName() {
      if (!this.mounted) return

      const classNameDefault = {
        header: true,
        'header--bg-filled': this.bgIsFilled,
        'header--border-bottom': this.scrollTop.next > 10
      }

      const classNameStatic = 'header header--bg-filled header--border-bottom'

      const rules = [
        () => document.querySelector('main')?.className.includes('real'),
        () => document.querySelector('main')?.className.includes('gog'),
      ]

      if (rules.some(rule => rule())) return classNameStatic
      else return classNameDefault
    },

    navColorIsInverted() {
      return ['event-app', 'dancebug','easyphone-app-case-study', '24-7-billing-system-case-study', 'quick', 'clothes-fit-app-case-study'].some(key => window.location.pathname.includes(key))
    }
  },


  mounted() {
    this.mounted = true
    document.addEventListener('scroll', this.headerMouseScroll)
  },


  watch: {
    '$store.state.loading.pageIsLoaded': async function (next, prev) {
      // if (next == true && window.pageYOffset < 10) {
      if (next == true) {
        this.initialTween = gsap.from(this.$refs.header, {y: '-200%', autoAlpha: 0, duration: 1, ease: 'power4.inOut'})
        await delay(800)
        this.$store.commit('loading/SET_STATE', {headerAnimIsEnded: true})
      }
      // else this.initialTween = gsap.set(document.body, {})
    },

    // '$store.state.global.headerAnimationIsDisabled': function(next, prev) {
    // if (next == true && this.menuIsVisible) {
    // gsap.to(this.$refs.header, {y: '-100%', duration: .5})
    // this.menuIsVisible = false
    // }
    // }
  },


  methods: {
    existsInURL(url) {
      return window.location.pathname.includes(url)
    },

    openBurger() {
      this.burgerIsOpened = true
      this.bgIsFilled = true
    },

    closeBurger() {
      this.burgerIsOpened = false
      if (this.windowWidth < 1200 && this.scrollTop.next < 10) this.bgIsFilled = false
    },

    menuItemClick(item, event) {
      if (item.url == 'coding') {
        event.preventDefault()
        this.$modal.show('coding')
      }

      if (item.children && item.children.length) this.activeMenuItem = item
    },

    headerMouseScroll(e) {
      if (this.burgerIsOpened || this.$store.state.global.headerAnimationIsDisabled) return
      // if (this.initialTween) {
      // this.$store.commit('loading/SET_STATE', {headerAnimIsEnded: true})
      // this.initialTween.pause()
      // this.initialTween = null
      // gsap.set(this.$refs.header, {clearProps: 'opacity,visibility'})
      // }

      let prev = this.scrollTop.prev
      let next = window.pageYOffset
      let direction = next - prev < 0 ? 'up' : 'down'
      this.scrollTop.next = next

      if (direction == 'down' && this.menuIsVisible && next > 10) {
        // gsap.to(this.$refs.header, {y: '-100%', duration: .5})
        this.bgIsFilled = true
        // this.menuIsVisible = false
      } else if (direction == 'up' && !this.menuIsVisible && next > 10) {
        // gsap.to(this.$refs.header, {y: 0, duration: .5})
        this.menuIsVisible = true
        this.bgIsFilled = true
      } else if (next < 10) {
        // gsap.to(this.$refs.header, {y: 0, duration: .5})
        this.menuIsVisible = true
        this.bgIsFilled = false
      }

      this.scrollTop.prev = next
    }
  },
}
</script>

<style lang="scss">

.header {
  height: var(--header-height);
  width: 100%;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 100;
  transition: .5s background-color;

  @media (max-width: 1199px) {
    border-bottom: 2px solid rgba(0, 0, 0, .025);
  }

  &--bg-filled {
    background: var(--white-main);
  }

  &--border-bottom {
    border-bottom: 2px solid rgba(0, 0, 0, .025);
  }

  &__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 1000;

    @media (max-width: 1199px) {
      background: rgba(255, 255, 255, .5);
      border-bottom: 2px solid rgba(0, 0, 0, .025);
    }
  }

  &__logo {
    img {
      height: 4rem;

      // @media (max-width: 1199px) {
      // }
    }
  }

  &-nav {
    &__list {
      display: flex;
      color: var(--black-main);

      @media (max-width: 1199px) {
        display: none;
      }
    }

    &__burger {
      cursor: pointer;
      display: none;
      position: relative;
      width: 3.2rem;
      height: 2.4rem;

      div {
        background: var(--black-dark);
        will-change: transform;
        border-radius: .5rem;
        height: .3rem;
        position: absolute;
        left: 0;
        transition: .2s ease-in-out;

        &:first-child {
          width: 3.2rem;
          top: 0;
        }

        &:nth-child(2) {
          width: 1.7rem;
          top: 50%;
          transform: translateY(-50%);
        }

        &:last-child {
          width: 2.5rem;
          bottom: 0;
        }
      }

      &--opened {
        div {
          &:first-child {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            width: 100%;
          }

          &:nth-child(2) {
            opacity: 0;
            left: 50%;
          }

          &:last-child {
            bottom: 50%;
            left: 50%;
            transform: translate(-50%, 50%) rotate(-45deg);
            width: 100%;
          }
        }
      }

      @media (max-width: 1199px) {
        display: block;
      }
    }
  }

  &-nav-item {
    height: 100%;
    display: flex;
    align-items: center;
    margin: 0 3rem;

    &:last-child {
      margin-right: 0;
    }

    &__btn {
      font-weight: 600;
      letter-spacing: 1px;

      &--inverted {
        color: white;
      }

      &--active {
        color: var(--red-main);
      }
    }

    &__list {
      background: linear-gradient(144.36deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
      box-shadow: 0px 6px 18px rgba(129, 129, 129, 0.25);
      border-radius: 16px;
      padding: 3rem;
      display: grid;
      grid-template-columns: max-content max-content;
      grid-column-gap: 3rem;
      grid-row-gap: 2rem;

      &-item {
        width: fit-content;

        &--active {
          a {
            color: var(--red-main);
          }
        }
      }
    }
  }

  &-mobile {
    position: absolute;
    left: 0;
    top: var(--header-height);
    width: 100%;
    height: calc(100vh - var(--header-height));
    background-color: #fff;
    z-index: 0;

    &--sub-active {
      .header-mobile {
        &__main-list {
          transform: translateX(-100%);
          opacity: 0;
        }

        &__sub-list {
          height: 100%;
          transform: translateX(0);
          opacity: 1;
          overflow-y: auto;
        }
      }
    }

    .header-mobile {
      &__main-list {
        height: 100%;
        transition: .5s;
        overflow-y: auto;
      }

      &__main-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 5rem;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        transition: .2s;
        cursor: pointer;

        &:hover {
          background: rgb(240, 240, 240);
          color: black;
        }
      }
    }

    &__title {
      font-weight: 700;
      margin: 3rem 0;
    }

    &__sub-list {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      opacity: 0;
      transform: translateX(100%);
      transition: .5s;
    }

    &__sub-item {
      margin-bottom: 2.4rem;
      text-align: center;
      width: 100%;

      a {
        display: block;
        transition: .25s;
      }

      &:hover {
        a {
          color: var(--red-main);
        }
      }

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__back {
      cursor: pointer;
      position: absolute;
      left: var(--container-padding);
      top: 3rem;
      height: auto;
      display: flex;

      img {
        margin-right: 1rem;
        transform: rotate(180deg);
      }
    }
  }
}
</style>
