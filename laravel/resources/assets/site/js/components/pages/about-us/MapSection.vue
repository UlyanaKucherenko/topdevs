<template>
  <section class="map-section">
    <div class="container">
      <SectionHeader
        title="Key Facts"
        :desc="['We partner with businesses across the globe to', 'enhance their market positions with digital', 'engineering solutions fueled by innovative tech.']"
        icon="/images/site/icons/abstract/header-2.svg"
      />
      <object
        class="map-section__map" 
        ref="map" 
        type="image/svg+xml" 
        data="/images/site/map.svg"
        v-scroll-reveal
      />

      <div 
        class="map-section__countries"
        v-scroll-reveal
      >
        <h3 class="map-section__countries-title">
          Clients worldwide
        </h3>

        <div class="map-section__countries-rows">
          <div 
            class="map-section__countries-row"
            v-for="(row, index) in countries" :key="index"
          >
            <div 
              ref="countries-item"
              class="map-section__countries-item"
              v-for="(country, index) in row" :key="index"
            >
              {{ country }}
            </div>
          </div>
        </div>
      </div>

      <div 
        class="map-section__benefits-list"
        v-scroll-reveal
      >
        <div 
          class="map-section__benefits-item"
          v-for="(item, index) in benefitsItems" :key="index"
        >
          <div class="map-section__benefits-item-title">{{ item.title }}</div>
          <div class="map-section__benefits-item-desc text-semibold">{{ item.desc }}</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import gsap from 'gsap'
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  data() {
    return {
      mapColor: 'red',
      benefitsItems: [
        {
          title: '2009',
          desc: 'Founded'
        },
        {
          title: '200+',
          desc: 'Project released'
        },
        {
          title: '11+ years',
          desc: 'iOS development  expertise'
        },
        {
          title: '8+ years',
          desc: 'Longest-running project'
        },
        {
          title: 'Canada',
          desc: 'Financial operations'
        }
      ]
    }
  },


  computed: {
    countries() {
      let countries = [['USA', 'Germany', 'Canada'], ['Australia', 'UK', 'Switzerland']]
      if (this.windowWidth < 450) countries = [['USA', 'Germany'], ['Canada', 'Australia'], ['UK', 'Switzerland']]
      return countries
    }
  },


  mounted() {
    // window.onload = this.handleMapSVG
  },


  methods: {
    handleMapSVG() {
      setTimeout(() => {
        let svg = document.querySelector('object').contentDocument.querySelector('svg')
        let paths = svg.querySelectorAll('path')
        paths = Array.from(paths)
        paths = paths.slice(0, -6)

        paths.forEach(path => {
          path.rect = path.getBoundingClientRect()
        })

        paths.forEach(p => {
          p.nearest = Array.from(paths).filter(path => {
            if (Math.abs(path.rect.top - p.rect.top) < 25 && Math.abs(path.rect.left - p.rect.left) < 25) return true
          })
        })

        paths.forEach(path => {
          path.addEventListener('mouseenter', () => {
            gsap.timeline()
              .to(path.nearest, {fill: this.mapColor, duration: .2})
              .to(path.nearest, {fill: '#9E9E9E', duration: 1, ease: 'power3.out'})
          })
        })
      }, 0);
    }
  },
}
</script>

<style lang="scss">
  .about-us {
    .map-section {
      padding: var(--section-pd-y-small) 0 var(--section-pd-y-big);

      &__countries {
        margin-bottom: calc(var(--space-unit) * 6);

        &-title {
          margin-bottom: calc(var(--space-unit) * 3);
        }

        &-row {
          display: flex;
          margin-bottom: calc(var(--space-unit) * 1);

          &:last-child {
            margin-bottom: 0;
          }
        }

        &-item {
          color: transparent;
          -webkit-text-stroke-width: 1px;
          -webkit-text-stroke-color: var(--blue-main);
          font-size: calc(var(--space-unit) * 6);
          text-transform: uppercase;
          margin-right: calc(var(--space-unit) * 5);

          &:last-child {
            margin-right: 0;
          }
        }
      }

      &__map {
        display: block;
        width: 90%;
        margin: 0 auto;
        margin-bottom: calc(var(--space-unit) * 6);
      }

      &__benefits {
        &-list {
          display: grid;
          grid-template-columns: repeat(5, max-content);
          grid-row-gap: calc(var(--space-unit) * 3);
          justify-content: space-around;

          @media (max-width: 1150px) {
            grid-template-columns: repeat(3, max-content);
          }

          @media (max-width: 678px) {
            grid-template-columns: repeat(2, max-content);
          }

          @media (max-width: 500px) {
            grid-template-columns: 90%;
          }
        }

        &-item {
          text-align: center;

          @media (max-width: 500px) {
            text-align: left;
          }

          &-title {
            font-size: calc(var(--space-unit) * 5);
            color: var(--red-light);
            font-weight: bold;
            margin-bottom: calc(var(--space-unit) * 1);
          }
        }
      }
    }
  }
</style>