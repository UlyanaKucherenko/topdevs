<template>
  <div class="tl-slider">
    <div class="tl-slider__control">
      <img 
        src="/images/site/icons/arrows/5.svg" alt="" 
        class="tl-slider__control-arrow"
        @click="goTo('prev')"
      >
      <div class="tl-slider__control-list">
        <div 
          class="tl-slider__control-item"
          :class="{'tl-slider__control-item--active': activeItemIndex == index}"
          v-for="(item, index) in slicedItems" :key="index"
          @click="goTo(index)"
        >
          <div class="tl-slider__control-circle"></div>
          <div class="tl-slider__control-number">
            {{ item.year }}
          </div>
        </div>
      </div>
      <img 
        src="/images/site/icons/arrows/5.svg" alt="" 
        class="tl-slider__control-arrow tl-slider__control-arrow--bottom"
        @click="goTo('next')"
      >
    </div>

    <div class="tl-slider__projects">
      <h3 class="tl-slider__projects-year text-h2" ref="projectsYear">{{ activeItem.year }}</h3>
      <div 
        class="tl-slider__project"
        v-for="(project) in activeItem.projects" :key="project.title"
        ref="projects"
      >
        <h4 class="tl-slider__project-title text-h3" ref="projectsTitles" v-split-chars>{{ project.title }}</h4>
        <div class="tl-slider__project-desc" ref="projectsDescs" v-split-chars>{{ project.desc }}</div>
      </div>
    </div>
  </div>
</template>

<script>
import gsap from 'gsap'
import delay from 'delay'

export default {
  data() {
    return {
      activeItemIndex: 0,
      startIndex: 0,
      diplayedItemsCount: 7,
      items: [
        {
          year: '2009',
          projects: [
            {
              title: 'The Journey Starts',
              desc: 'Young yet ambitious and talented iOS developers have founded the company.'
            }
          ]
        },
        {
          year: '2011',
          projects: [
            {
              title: 'Dedication',
              desc: 'A trainee iOS developer was hired who currently holds the position of the Team Lead of the first iOS development team.'
            }
          ]
        },
        {
          year: '2014',
          projects: [
            {
              title: 'Team Expansion',
              desc: 'The history repeats itself and now we have another Team Lead of the second iOS development team.'
            },
            {
              title: 'Android Development Expertise',
              desc: 'Fueled by a client willing to get iOS and Android apps, we\'ve created a Native Android App Development Department and expanded tech stack with Java.'
            }
          ]
        },
        {
          year: '2015',
          projects: [
            {
              title: 'Swift Expertise',
              desc: 'We\'ve started utilizing the fresh new Swift programming language to bring even better products for clients.'
            }
          ]
        },
        {
          year: '2016',
          projects: [
            {
              title: 'Design & Web Development Expertise',
              desc: 'Our team was expanded with designers, back-end and front-end developers accompanied by PHP, Laravel, Node.js and Javascript technologies. Eventually, we\'ve added Vue.js and React.js frameworks to the stack. '
            },
            {
              title: 'Outstaffing & Outsourcing',
              desc: 'The company has established the outsourcing and outstaffing services of full cycle mobile and web development accompanied by design and marketing assistance.'
            }
          ]
        },
        {
          year: '2017',
          projects: [
            {
              title: 'Kotlin Expertise',
              desc: 'A new addition to the company tech stack - Kotlin used for a Chronos project development.'
            }
          ]
        },
        {
          year: '2020',
          projects: [
            {
              title: 'Projects Scope',
              desc: 'As of March, 11 projects are in the development process.'
            },
            {
              title: 'Clients Worldwide',
              desc: 'Today we partner with businesses from around the globe: USA, Switzerland, Germany, Australia.'
            }
          ]
        }
      ]
    }
  },


  computed: {
    activeItem() {
      return this.items[this.activeItemIndex]
    },
    
    slicedItems() {
      return this.items.slice(this.startIndex, this.diplayedItemsCount)
    }
  },


  methods: {
    async goTo(val) {
      if (val == 'next' && (this.activeItemIndex != this.items.length-1)) {
        await this.animateLeave()
        this.activeItemIndex++
        await this.$nextTick()
        await this.animateEnter()
      }

      if (val == 'prev' && this.activeItemIndex != 0) {
        await this.animateLeave()
        this.activeItemIndex--
        await this.$nextTick()
        await this.animateEnter()
      }

      if (typeof val == 'number' && val != this.activeItemIndex) {
        await this.animateLeave()
        this.activeItemIndex = val
        await this.$nextTick()
        await this.animateEnter()
      }
    },

    animateEnter() {
      if (this.$store.state.global.deviceIsMobile) {
        gsap.to(document.querySelector('.tl-slider__projects'), {autoAlpha: 1, ease: 'power3.inOut'})
        return
      }

      gsap.from(this.$refs.projectsYear, {autoAlpha: 0, skewY: 10, y: -50, ease: 'power3.inOut', duration: 1.2})
      let chars = this.$refs.projects.map(project => Array.from(project.querySelectorAll('.split-chars__char'))).flat()
        chars.forEach(char => {
          gsap.from(char, {scale: 0, autoAlpha: 0, x: random(-500, 500), y: random(-500, 500), z: random(-500, 500), duration: 1.5, ease: 'power3.out'})
        })

        function random(min, max){
          return (Math.random() * (max - min)) + min;
        }
    },

    animateLeave() {
      if (this.$store.state.global.deviceIsMobile) {
        return gsap.to(document.querySelector('.tl-slider__projects'), {autoAlpha: 0, ease: 'power3.inOut'})
      }

      let tl = gsap.timeline()
      return tl.to([this.$refs.projectsYear, ...this.$refs.projects], {autoAlpha: 0, rotateX: -40, y: 10, clearProps: 'all'})
    }
  },
}
</script>

<style lang="scss">
  .tl-slider {
    display: flex;
    align-items: center;
    padding-left: 1.2rem;

    &__control {
      margin-right: calc(var(--space-unit) * 7);

      &-item {
        display: flex;
        align-items: center;
        margin-bottom: 5.4rem;
        font-family: var(--Muli);
        cursor: pointer;

        &:last-child {
          margin-bottom: 0;

          .tl-slider__control-circle {
            &:after {
              display: none;
            }
          }
        }

        &--active {
          .tl-slider__control {
            &-circle {
              box-shadow: 0 0 0 10px #ff00002b;
            }

            &-number {
              color: var(--red-light);
            }
          }
        }
      }

      &-circle {
        position: relative;
        width: 1.2rem;
        height: 1.2rem;
        border-radius: 50%;
        margin-right: 2.5rem;
        background: linear-gradient(91.12deg, #CE0737 -1.55%, #E7063C 47.52%, #E9043B 103.31%);
        transition: .5s ease-in-out;

        &::after {
          content: '';
          position: absolute;
          left: 50%;
          top: 1px;
          z-index: -1;
          transform: translateX(-50%);
          width: 3px;
          height: 7rem;
          background: linear-gradient(91.12deg, #CE0737 -1.55%, #E7063C 47.52%, #E9043B 103.31%);
        }
      }

      &-number {
        transition: .5s;
      }

      &-arrow {
        transform: translateX(-1.2rem);
        margin-bottom: 4rem;
        cursor: pointer;

        &--bottom {
          transform: translateX(-1.2rem) rotate(180deg);
          margin-top: 4rem;
          margin-bottom: 0;
        }
      }
    }

    &__projects {
      perspective: 100rem;

      &-year {
        color: transparent;
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: var(--black-main);
        margin-bottom: calc(var(--space-unit) * 1);
      }
    }

    &__project {
      margin-bottom: calc(Var(--space-unit) * 1.5);

      &-title {
        margin-bottom: calc(var(--space-unit) * 1.5);
        font-weight: bold;
      }

      &-desc {
        line-height: 160%;
      }

      &-title, &-desc {
        transform-style: preserve-3d;
      }
    }
  }
</style>