	<template>
	<div 
		class="challenges-section"
		v-scroll-reveal
	>
    <div class="container">
      <div 
        class="challenges-section__content"
        v-scroll-reveal
      >
        <PortfolioHeader
          class="challenges-section__header"
          titleText="Challenges"
          titleTextColor="var(--case-color-primary)"
        >
					<div 
						class="qliq-header-line"
						slot="titleImg"
					/>
        </PortfolioHeader>

        <div class="challenges-section__asides-list">
          <PortfolioAside
            class="challenges-section__asides-item"
            v-for="(item, index) in asidesList" :key="index"
            :descText="item"
          />
        </div>

        <img 
          class="challenges-section__mockup"
          src="/images/site/portfolio/qliq/challenges/mockup.png" alt="" 
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
          'The client was in need of additional hands to implement the application for Apple iOS-based devices. Our task was not only to provide tech expertise and development services but cooperate efficiently with the developers\' team of the ordering party.',
          'The major requirement for the platform itself was to provide the highest possible security level of protected health data sharing between care providers. All operations should work fast, be reliable, and easy-to-use.'
				]
			}
		},
}

</script>

<style lang="scss">
.qliq .challenges-section {
	position: relative;
	z-index: 1;
	padding-bottom: calc(var(--space-unit) * 28);

	@media (max-width: 991px) {
		padding-bottom: 0;
		overflow: hidden;
	}

	&__header {
		margin-bottom: var(--portfolio-header__title-margin);
	}

	&__content {
		position: relative;
	}

	&__asides {
		&-list {
			width: 41%;

			@media (max-width: 991px) {
				width: 100%;
				margin-bottom: 3.5rem;
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
		// z-index: -1;

		@media (min-width: 992px) {
			position: absolute;
			width: 55%;
      right: 0;
      top: 0;
      transform: translate(7.5%, -5%);
			// right: calc(var(--container-padding) - 3%);
			// top: 50%;
			// transform: translateY(-50%);
		}

		@media (max-width: 991px) {
			width: 100%;
			position: relative;
			max-width: 52.5rem;
			margin: 10% auto 30%;
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
