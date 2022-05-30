<template>
  <main class="portfolio">
    <HeroSection
      :title="['Case Studies of', 'Our Creative', 'Works']"
      :desc="['We are passionate about helping startups and businesses to', 'spice up their amazing ideas in the form of comprehensive', 'solutions on their way to digital innovation.']"
      btnText="Let's Talk Business"
      imgURL="/images/site/portfolio/hero-bg.svg"
      :styleOptions="{
        smallTitle: true
      }"
    />

    <PortfolioMainSection class="main-section"/>
    <ConnectSection/>
  </main>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'
import PortfolioMainSection from '@/js/components/pages/portfolio/index/PortfolioMainSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'

export default {
  components: {HeroSection, PortfolioMainSection, ConnectSection},
  
  props: {
    cases: Object,
    rubrics: Array
  },


  data() {
    return {
    }
  },


  async created() {
    this.$store.commit('portfolio/SET_RUBRICS', this.rubrics)
    this.$store.commit('portfolio/SET_STATE', {
      filteredCases: this.cases.data,
      pagination: {
        currentPage: this.cases.current_page,
        lastPage: this.cases.last_page,
        perPage: this.cases.per_page
      },
    })
    this.$store.commit('portfolio/PARSE_URL')
  },


  methods: {
    checkFiltersInURL() {
    }
  },
}
</script>

<style lang="scss">
  .portfolio {
    z-index: unset;
    
    .hero-section {
      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__title {
          text-transform: uppercase;
          font-weight: 800;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 45%;

          @media (max-width: 1199px) {
            width: 37%;
          }
        }

        &__btn {
          display: none;
        }
      }
    }

    .main-section {
      margin-bottom: calc(var(--space-unit) * 10);
    }

    // global styles for portfolio

    &-title {
      font-weight: 700;
      line-height: 120%;
      letter-spacing: 1px;
      text-transform: capitalize;
      @include text-lg;

      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 2.4rem;
      }
    }

    &-desc {
      line-height: 160%;
      letter-spacing: 0.03em;
      font-size: 2rem;

      @media (max-width: 1199px) {
        font-size: 1.6rem;
      }

      &--sm {
        @include text-p;

        @media (max-width: 1400px) and (min-width: 1200px) {
          font-size: 1.6rem;
        }
      }
    }

    &-section {
      &-title {
        margin-bottom: var(--portfolio-header__title-margin);
      }
    }

    &-about {
      &-info {
        &__title {
          text-transform: uppercase;
          font-weight: 800;
          margin-bottom: 4rem;
          font-family: var(--Muli);
          letter-spacing: .05em;
          line-height: 120%;

          @media (max-width: 1199px) {
            margin-bottom: 3.5rem;
          }

          @media (max-width: 767px) {
            margin-bottom: 3rem;
          }
        }

        &__subtitle {
          margin-bottom: 2rem;
          font-family: var(--ProximaNova);
        }
      }
    }
  }
</style>