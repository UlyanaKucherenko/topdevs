<template>
  <div class="preloader" ref="preloader">
    <template v-if="!$store.state.loading.fastLoading">
      <img ref="logo" src="/images/site/logo-big.svg" alt="" class="preloader__logo">
      <ProgressBar
        class="preloader__progress-2"
        :value="$store.getters['loading/progressValue']"
        :withNumber="false"
        :progressStyle="{border: 0}"
        @load="$store.commit('loading/SET_STATE', {pageIsLoaded: true})"
      />
    </template>
  </div>
</template>

<script>
import gsap from 'gsap'
import {loadImages} from '@/js/mixins/functions'
import ProgressBar from '@/js/components/global/ProgressBar'

export default {
  components: {ProgressBar},


  data() {
    return {}
  },


  computed: {
    imagesToLoadCount() {
      return this.$store.state.loading.imagesToLoadCount
    },
    imagesLoadedCount() {
      return this.$store.state.loading.imagesLoadedCount
    },
    progressValue() {
      return this.$store.getters['loading/progressValue']
    }
  },


  mounted() {
    this.startPreloader()
    this.loadDynamicImages()
  },


  watch: {
    "progressValue": function (next, prev) {
      if (next == 100 && this.$store.state.loading.fastLoading) {
        this.$store.commit('loading/SET_STATE', {pageIsLoaded: true})
      }
    }
  },


  methods: {
    async startPreloader() {
      let urls = []
      let path = window.location.pathname

      if (path == '/') {
        await loadImages(['/images/site/logo-big.svg'])
        urls.push(...[
          ...document.querySelectorAll('.about-section__figures img'),
          document.querySelector('.about-section__fig-2')
        ].map(img => img.src))
        this.$store.commit('loading/SET_STATE', {fastLoading: false})
      } else if (path == '/thank') {
        urls.push('/images/site/thank.svg')
        this.$store.commit('loading/SET_STATE', {fastLoading: true})
      } else {
        urls.push(...[...document.querySelectorAll('.hero-section img')].map(img => img.src))
        this.$store.commit('loading/SET_STATE', {fastLoading: true})
        if (urls.length == 0) {
          this.$store.commit('loading/SET_STATE', {pageIsLoaded: true})
        }
      }

      if (!this.$store.state.loading.fastLoading) {
        await this.$nextTick()
        this.slowLoading()
      }

      this.$store.commit('loading/SET_STATE', {imagesToLoadCount: urls.length})
      urls.forEach(url => {
        let img = new Image()
        img.onload = () => {
          this.$store.commit('loading/SET_STATE', {imagesLoadedCount: this.imagesLoadedCount + 1})
        }
        img.src = url
      })
    },

    slowLoading() {
      let tl = gsap.timeline({delay: .5, defaults: {ease: 'power4.inOut', duration: 1.5}})
        .set(this.$refs.logo, {x: '-50%', y: '-50%'})
        .fromTo(this.$refs.logo, {autoAlpha: 0, scale: 0}, {autoAlpha: 1, scale: 1}, 0)
        .timeScale(1)
    },

    loadDynamicImages() {
      let path = window.location.pathname

      let urls = ['/images/site/coding.png', '/images/site/modals/error.svg', '/images/site/temp/2.png', '/images/site/temp/3.png', '/images/site/temp/4.png'] // TO CHANGE

      switch (path) {
        case '/':
        case '/services':
          urls.push(
            '/images/site/index/solving/2-fix.svg',
            '/images/site/index/solving/3-fix.svg',
            '/images/site/index/solving/4-fix.svg',
            '/images/site/index/solving/5-fix.svg',
            '/images/site/index/solving/6-fix.svg',
            '/images/site/index/solving/7-fix.svg',
            '/images/site/index/solving/8-fix.svg'
          )
          break;

        case '/services/it-outsourcing':
        case '/services/full-cycle-development':
          urls.push(
            '/images/site/tech-logos/swift.svg',
            '/images/site/tech-logos/obj-c.svg',
            '/images/site/tech-logos/java.svg',
            '/images/site/tech-logos/kotlin.svg',
            '/images/site/tech-logos/sketch.svg',
            '/images/site/tech-logos/figma.svg',
            '/images/site/tech-logos/invision.svg',
            '/images/site/tech-logos/photoshop.svg',
            '/images/site/tech-logos/illustrator.svg',
            '/images/site/tech-logos/after-effects.svg',
            '/images/site/tech-logos/zeplin.svg',
            '/images/site/tech-logos/principle.svg',
            '/images/site/tech-logos/marvel.svg',
          )
      }

      urls.forEach(url => {
        let img = new Image()
        img.src = url
      })
    }
  },
}
</script>

<style lang="scss">
.preloader {
  width: 100vw;
  height: 100vh;
  position: fixed;
  left: 0;
  top: 0;
  background: rgb(255, 255, 255);
  z-index: 222;

  &__logo {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 20rem;

    @media (max-width: 575px) {
      width: 10rem;
    }
  }

  &__progress {
    position: absolute;
    left: 50%;
    bottom: calc(var(--space-unit) * 5);
    width: 90%;
    transform: translateX(-50%);
    max-width: 70rem;
  }
}


</style>
