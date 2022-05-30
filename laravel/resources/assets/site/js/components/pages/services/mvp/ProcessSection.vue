<template>
  <SectionLayout
    class="process-section"
    :headerTitle="['MVP Development', 'Process']"
    :headerDesc="['The secret of successful MVPs lies in the polished MVP', 'development process moving forward step by step', 'from discovery to launch.']"
    headerIcon="/images/site/icons/abstract/header-8.svg"
  >
    <div class="process-section-accordion" v-scroll-reveal>
      <div
        v-for="(item, idx) in items"
        class="process-section-accordion-item"
      >
        <div
          class="process-section-accordion-item__title text-h3"
          @click="toggleItem(idx)"
        >
          {{ item.title }}
          <div
            class="process-section-accordion-item__arrow"
            :class="{'process-section-accordion-item__arrow--active': idx === activeItemIdx}"
          >
            <img
              src="/images/site/services/mvp/process-arrow.svg"
              alt=""
            >
          </div>
        </div>
        <div
          class="process-section-accordion-item__desc text-md"
          ref="items"
        >
          <span class="process-section-accordion-item__desc-text">
            {{ item.desc }}
          </span>
        </div>
      </div>
    </div>
  </SectionLayout>
</template>

<script>
import SectionLayout from '@/js/layouts/SectionLayout'
import gsap from 'gsap'

export default {
  components: {SectionLayout},
  data() {
    return {
      activeItemIdx: null,
      items: [
        {
          title: 'Discovery Phase',
          desc: 'Idea concept evaluation, collection of requirements and vital aspects, market validation, and competitor analysis.'
        },
        {
          title: 'Project Scope',
          desc: 'Development of the product vision from a business standpoint and creation of correct user stories.'
        },
        {
          title: 'Design',
          desc: 'Transformation of the initial concepts into prototypes and interface design for a functional and elegant product. '
        },
        {
          title: 'Development',
          desc: 'Making the designs live via the app functionality development and testing phase performed in parallel.'
        },
        {
          title: 'Product Delivery & Support',
          desc: 'The MVP deployment, gathering of customers\' reviews, testing on the real devices, and maintenance of additional features.'
        }
      ]
    }
  },

  mounted() {
    this.toggleItem(0)
  },

  methods: {
    toggleItem(idx) {
      const defaultProps = {duration: .2, ease: 'power3.inOut'}

      if (idx !== this.activeItemIdx) {
        gsap.set(this.$refs.items[idx], {...defaultProps, height: 'auto', autoAlpha: 1})
        gsap.from(this.$refs.items[idx], {...defaultProps, height: 0, autoAlpha: 0})
          .then(() => gsap.set(this.$refs.items[idx], {height: 'auto'}))

        gsap.to(this.$refs.items[this.activeItemIdx], {...defaultProps, height: 0, autoAlpha: 0})
        this.activeItemIdx = idx
      } else {
        gsap.to(this.$refs.items[idx], {...defaultProps, height: 0, autoAlpha: 0})
        this.activeItemIdx = null
      }
    }
  }
}
</script>

<style lang="scss">
.mvp {
  .process-section {
    margin-bottom: var(--section-pd-y-big);

    &-accordion {
      &-item {
        padding: 0 20px;
        border-bottom: 1px solid #505050;

        &:first-child {
          border-top: 1px solid #505050;
        }

        &:last-child {
          border-bottom: unset;
        }

        &__title {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px 0;
          cursor: pointer;

          &:hover {
            .process-section-accordion-item__arrow:before {
              opacity: 1;
            }
          }
        }

        &__arrow {
          position: relative;
          transition: .3s;
          user-select: none;

          &--active {
            transform: rotate(180deg);
            filter: invert(43%) sepia(94%) saturate(5388%) hue-rotate(347deg) brightness(100%) contrast(84%);

            &:before {
              transform: translate(-50%, calc(-50% + 1px));
            }
          }

          &:before {
            opacity: 0;
            transition: .3s;
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, calc(-50% - 1px));
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid var(--red-light);
          }
        }

        &__desc {
          height: 0;
          overflow: hidden;
          max-width: 700px;

          &-text {
            display: block;
            padding-bottom: 20px;
          }
        }
      }
    }
  }
}
</style>
