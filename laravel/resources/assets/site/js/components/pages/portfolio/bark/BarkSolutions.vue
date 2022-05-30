<template>
  <div class="bark-solutions">
    <div class="bark-solutions__content container">
      <PortfolioHeader
        class="bark-solutions__header"
        titleText="Solutions"
        titleTextColor="var(--case-color-primary)"
        :descText="[
          `Initially the BabelBark app was developed with Objective-C so we've decided to re-write it with the Swift technology. Furthermore, in cooperation with the app founders we've implemented new features. Over each development stage we've carried out the bug fixing procedures to make sure that the app works the way it was supposed to.`,
          `Any pet parent can create a profile and add accounts of their own dogs to monitor their health state and manage their activities.`
        ]"
        isCentered
        headerColumnBreakpoint
        titleUppercase
      />
    </div>

    <div class="bark-solutions__list">
      <BarkSolutionsRow
        class="bark-solutions__row"
        v-for="(item, index) in items" :key="index"
        ref="row"
        :colors="item.colors"
        :card="{
          ...item.card, 
          number: index+1,
        }"
        :bgBaseHeight="cardsMaxHeight"
        :mockup="`/images/site/portfolio/bark/solutions/mockup-${index+1}${windowWidth > 991 ? '' : '-991'}.png`"
        :reversed="!!(index % 2)"
      />
    </div>
  </div>
</template>

<script>
import { debounce } from '@/js/mixins/functions'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import BarkSolutionsRow from './BarkSolutionsRow'

export default {
  components: {PortfolioHeader, BarkSolutionsRow},

  data() {
    return {
      cardsMaxHeight: 0,
      items: [
        {
          colors: {
            front: '#FFBA98',
            back: '#FFEDE4',
            outline: '#F37233'
          },
          card: {
            title: 'Handbooks',
            desc: 'Dog owners can search and find appropriate veterinarians, dog trainers, dog food vendors, and other services providers in convenient listings.'
          }
        },
        {
          colors: {
            front: '#DCCEE9',
            back: '#F6EFFE',
            outline: '#816E94'
          },
          card: {
            title: 'Bluetooth Tracker',
            desc: 'The app can measure the steps number and other daily, weekly or monthly activities obtained from a special collar and afterward form a related chart report.'
          }
        },
        {
          colors: {
            front: '#BBE1CD',
            back: '#ECFBF3',
            outline: '#257E4E'
          },
          card: {
            title: 'Statistics',
            desc: 'Keeping track of activities, for instance, a pet owner may record when some medicine was taken and its dosage to check and print out the statistics later.'
          }
        },
        {
          colors: {
            front: '#DCCEE9',
            back: '#F6EFFE',
            outline: '#816E94'
          },
          card: {
            title: 'Notifications',
            desc: 'Pet owners may set the necessary reminder and get notifications when it\'s time for a dog to take pills or conduct some other activity.'
          }
        }
      ]
    }
  },


  mounted() {
    this.updateCardsMaxHeight()
    window.addEventListener('resize', debounce(this.updateCardsMaxHeight, 100))
  },


  methods: {
    updateCardsMaxHeight() {
      const cardsHeights = this.$refs.row.map(row => row.$refs.card.offsetHeight)
      this.cardsMaxHeight = Math.max(...cardsHeights)
    }
  },
}
</script>

<style lang="scss">
  .bark-solutions {
    margin-bottom: 18rem;

    @media (max-width: 1400px) {
      margin-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 8rem;
    }
    
    &__header {
      width: 69%;
      margin: 0 auto;
      margin-bottom: 8rem;

      @media (max-width: 1400px) {
        width: 75%;
      }

      @media (max-width: 991px) {
        width: 100%;
      }
    }

    &__row {
      @media (min-width: 992px) {
        &:nth-child(1) {
          margin-bottom: 7rem;
        }
  
        &:nth-child(2) {
          margin-bottom: 7rem;
        }
      }
    }

    &__content {
      
    }
  }
</style>