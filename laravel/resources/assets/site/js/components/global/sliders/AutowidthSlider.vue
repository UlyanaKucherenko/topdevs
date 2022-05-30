<script>
import {debounce} from '@/js/mixins/functions'

export default {
  props: {
    sliderBreakpoint: Number,
    sliderOptions: Object,
    sliderNavIcon: String,
    sliderNavMargin: String,
    shapeColor: String,
    fullWidth: Boolean,
    navClassCustom: String
  },


  data() {
    return {
      sliderIsBeginning: true,
      sliderIsEnd: false,
    }
  },


  computed: {
    sliderIsVisible() {
      return !this.sliderBreakpoint || this.sliderBreakpoint >= this.windowWidth
    },

    sliderBlock() {
      if (!this.sliderIsVisible) {
        return this.$slots.default
      } else return (
        <div class="autowidth-slider__inner">
          <swiper
            ref="swiper"
            options={{
              slidesPerView: "auto",
              ...this.sliderOptions,
              slidesOffsetBefore: 50
            }}
            onTransitionStart={this.checkSliderPos}
          >
            {this.$slots.default.map(slot => (
              <swiper-slide>
                {slot}
              </swiper-slide>
            ))}
          </swiper>

          <div class="autowidth-slider__nav">
            <img 
              src={this.sliderNavIcon} 
              style={{
                marginRight: this.sliderNavMargin + 'px'
              }}
              class={{
                'autowidth-slider__nav-icon--disabled': this.sliderIsBeginning,
                ...this.navClassesBase
              }}
              onClick={this.slidePrev}
            />
            {this.$slots['nav-between']}
            <img 
              src={this.sliderNavIcon} 
              class={{
                'autowidth-slider__nav-icon--disabled': this.sliderIsEnd,
                'autowidth-slider__nav-icon--reverse': true,
                ...this.navClassesBase
              }}
              onClick={this.slideNext}
            />
          </div>
        </div>
      )
    },

    navClassesBase() {
      const classes = {
        'autowidth-slider__nav-icon': true,
      }

      if (this.navClassCustom) {
        classes[this.navClassCustom] = true
      }

      return classes
    }
  },


  methods: {
    slideNext() {
      this.$refs.swiper.$swiper.slideNext()
    },

    slidePrev() {
      this.$refs.swiper.$swiper.slidePrev()
    },

    checkSliderPos() {
      if (this.$refs.swiper.$swiper.isBeginning) this.sliderIsBeginning = true
      else this.sliderIsBeginning = false
    
      if (this.$refs.swiper.$swiper.isEnd) this.sliderIsEnd= true
      else this.sliderIsEnd = false
    }
  },


  render() {
    return (
      <div 
        class={{
          'autowidth-slider': true,
          'autowidth-slider--dynamic': this.sliderIsVisible && !this.fullWidth,
          'autowidth-slider--static': !this.sliderIsVisible,
          'autowidth-slider--scrolled': this.sliderIsVisible && !this.sliderIsBeginning,
          'autowidth-slider--full-width': this.sliderIsVisible && this.fullWidth
        }}
        style={{
          '--shape-color': this.shapeColor
        }}
      >
        { this.sliderBlock }
      </div>
    ) 
  },
}
</script>

<style lang="scss">
  .autowidth-slider {
    --shape-color: var(--white-clear);
    position: relative;

    &--static {
      display: flex;
      justify-content: space-between;
    }

    &--full-width {
      width: calc(100% + var(--container-padding) * 2);
      margin-left: calc(var(--container-padding) * -1);
    }

    &--dynamic {
    width: calc(100% + 10rem);
    margin-left: -5rem;

    // TODO -> uncomment if fullwidth prop (and create this prop)
    
      &:before {
        content: '';
        position: absolute;
        left: 0rem;
        top: 0;
        height: 100%;
        width: 5rem;
        z-index: 2;
        opacity: 1;
        transition: .1s;
        background: linear-gradient(270deg, rgba(255, 255, 255, 0.05),var(--shape-color) );
      }

      &:after {
        content: '';
        position: absolute;
        right: 0rem;
        top: 0;
        height: 100%;
        width: 5rem;
        z-index: 2;
        opacity: 1;
        transition: .1s;
        background: linear-gradient(270deg, var(--shape-color), rgba(255, 255, 255, 0.05));
      }
    }

    &--scrolled {
      &:before {
        opacity: 1;
      }
    }

    &__nav {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      // margin: 4rem var(--container-padding) 0 auto;
      margin: 4rem 5rem 0 auto;

      &-icon {
        cursor: pointer;

        &--reverse {
          transform: rotate(180deg);
        }

        &--disabled {
          opacity: .3;
        }
      }
    }

    .swiper-slide {
      width: fit-content;
      height: auto;

      & > * {
        height: 100%;
      }
    }
  }
</style>