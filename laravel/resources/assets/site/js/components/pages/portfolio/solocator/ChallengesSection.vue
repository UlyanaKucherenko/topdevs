<template>
	<div class="challenges-section">
		<div class="container">
			<PortfolioHeader
				class="challenges-section__header"
				titleText="Challenges"
				titleImg="/images/site/portfolio/solocator/challenges/title-square.svg"
				titleBgColor="#E5FFD1"
			/>
			
			<div class="challenges-section__asides-list">
				<PortfolioAside
					class="challenges-section__asides-item"
					v-for="(item, index) in asidesList" :key="index"
					dividerColor="#E5FFD1"
					dividerFilled
					:descText="item"
					v-scroll-reveal="{delay: index * 100}"
				/>
			</div>
		</div>

		<div class="challenges-section__mockup container" v-scroll-reveal>
			<picture class="challenges-section__mockup-inner">
				<source media="(max-width: 575px)" srcset="/images/site/portfolio/solocator/challenges/mockup-670.png">
				<source media="(max-width: 991px)" srcset="/images/site/portfolio/solocator/challenges/mockup-991.png">
				<img src="/images/site/portfolio/solocator/challenges/mockup.png" alt="Chris standing up holding his daughter Elva">
			</picture>
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
				'The client came to us with an idea to capture comprehensive data about buildings and land. It helps to define major aspects while making up a decision of whether a person is ready to buy or rent a property. The initial app version is already leveraged in Australia and New Zealand.',
				'Our team had to not only implement the idea but expand its possibilities via an additional feature set. This way an app is expected to be used by a diverse range of audiences - from field workers to drivers and real estate professionals. All for a purpose to identify photo location, time, and other crucial information for each particular case.'
			]
		}
	},
}

</script>

<style lang="scss">
.solocator .challenges-section {
	position: relative;
	z-index: 1;
	padding-top: calc(var(--space-unit) * 17.5);
	padding-bottom: calc(var(--space-unit) * 20);

	@media (max-width: 991px) {
		padding-bottom: 0;
	}

	@media (max-width: 575px) {
		padding-bottom: 3rem;
	}

	&__header {
		padding-bottom: calc(var(--space-unit) * 7.4);
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
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		pointer-events: none;

		@media (max-width: 991px) {
			position: static;
		}

		&-inner {
			img, source {
				position: absolute;
				height: 100%;
				width: 64%;
				right: calc(var(--container-padding) - 5%);
				top: 5%;
				object-fit: contain;
	
				@media (max-width: 991px) {
					position: static;
					width: 100%;
					max-width: 52.5rem;
					margin: 0 auto;
					transform: translateX(11%);
				}

				@media (max-width: 700px) {
					width: 80%;
				}

				@media (max-width: 575px) {
					width: 100%;
					transform: translateX(var(--container-padding));
				}
			}
		}
	}
}
</style>
