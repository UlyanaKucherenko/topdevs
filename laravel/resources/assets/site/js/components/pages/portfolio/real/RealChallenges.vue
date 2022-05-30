	<template>
	<div 
		class="real-challenges"
		v-scroll-reveal
	>
    <div class="container">
      <div 
        class="real-challenges__content"
        v-scroll-reveal
      >
        <PortfolioHeader
          class="real-challenges__header"
          titleText="Challenges"
          titleTextColor="#002445"
        >
          <img 
            class="real-header-img"
            src="/images/site/portfolio/real/challenges/header-fig-pre.svg" alt=""
            slot="titleImg"
          >
        </PortfolioHeader>
        
        <div class="real-challenges__asides-list">
          <p
            class="real-challenges__asides-item portfolio-desc"
            v-for="(item, index) in asidesList" :key="index"
            :descText="item"
          >
            {{ item }}
          </p>
        </div>

        <img 
          class="real-challenges__mockup"
          src="/images/site/portfolio/real/challenges/mockup.png" alt="" 
        >
      </div>
    </div>
	</div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'

export default {
		components: {PortfolioHeader, PortfolioAside},
		
		data() {
			return {
				asidesList: [
          'The goal of the app was to save time on boring data entry work and inspection reports created manually.', 
          'The client has applied to us for team augmentation as the already existing app required improvements and bug fixing. Eventually, our design services became in demand.'
				]
			}
		},
}

</script>

<style lang="scss">
  .real-challenges {
    position: relative;
    z-index: 1;
    padding-bottom: calc(var(--space-unit) * 28);

    @media (max-width: 991px) {
      padding-bottom: 0;
      overflow: hidden;
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);
    }

    &__content {
      position: relative;
    }

    &__asides {
      &-list {
        width: 38%;

        @media (max-width: 991px) {
          width: 100%;
          max-width: 57.8rem;
        }
      }

      &-item {
        margin-bottom: calc(var(--space-unit) * 3.5);
        
        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__mockup {

      @media (min-width: 992px) {
        position: absolute;
        width: 56%;
        right: 0;
        top: 50%;
        transform: translate(7.5%, -50%);
      }

      @media (max-width: 991px) {
        width: 100%;
        position: relative;
        max-width: 64.5rem;
        margin: 4% auto 12%;
        transform: translateX(2%);
      }

      &-tablet {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }

      &-phone {
        position: absolute;
        left: 23%;
        top: 38%;
        width: 40%;
      }

      &-circles {
        object-fit: contain;
        position: absolute;
        left: -22%;
        top: -55%;
        width: 150%;
        height: 200%;
        z-index: -1;
        opacity: .7;

        @media (max-width: 991px) {
          left: -100%;
          top: -80%;
          width: 300%;
          height: 300%;
        }
      }
    }

    &__figures {
      position: absolute;
      left: 24%;
      bottom: calc(var(--space-unit) * -24);
      width: 20%;

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>
