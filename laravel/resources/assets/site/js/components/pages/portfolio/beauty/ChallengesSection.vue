	<template>
	<div class="challenges-section">
		<div 
			class="challenges-section__content container"
			v-scroll-reveal
		>
			<PortfolioHeader
				class="challenges-section__header"
				titleText="Challenges"
				titleTextColor="#951865"
			/>

			<div class="challenges-section__asides-list">
				<PortfolioAside
					class="challenges-section__asides-item"
					v-for="(item, index) in asidesList" :key="index"
					:descText="item"
				/>
			</div>

			<img 
				class="challenges-section__figures"
				src="/images/site/portfolio/beauty/challenges/figures.svg" alt="" 
			>

			<div 
				class="challenges-section__mockup"
			>
				<img
					class="challenges-section__mockup-tablet"
					src="/images/site/portfolio/beauty/challenges/mockup-tablet.png" 
					alt=""
				>

				<img
					class="challenges-section__mockup-phone"
					src="/images/site/portfolio/beauty/challenges/mockup-phone.png" 
					alt=""
				>

				<img
					class="challenges-section__mockup-circles"
					src="/images/site/portfolio/beauty/challenges/circles.png" 
					alt=""
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
					'The client came to us with an idea to provide an opportunity for beauty professionals to share and monetize their expertise via a user-friendly digital platform.',
					'The initial expectations required a full-cycle development starting from the UX/UI design for both web and mobile apps. The process should be finalized with a solid web platform development and seamless mobile apps development for iOS and Android systems.'
				]
			}
		},
}

</script>

<style lang="scss">
.beauty .challenges-section {
	position: relative;
	z-index: 1;
	padding-bottom: calc(var(--space-unit) * 40);

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
			width: 42%;

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
		z-index: -1;

		@media (min-width: 992px) {
			position: absolute;
			width: 44%;
			right: calc(var(--container-padding) - 3%);
			top: 50%;
			transform: translateY(-50%);
		}

		@media (max-width: 991px) {
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
