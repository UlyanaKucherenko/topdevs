<template>
  <div class="c-around-clock" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="c-around-clock__case">
        <div class="c-around-clock__text-holder">
          <h1 class="c-around-clock__text-holder-text">24/7 <br/>Billing System</h1>
          <div class="c-around-clock__text-holder-content">
            <h2 class="c-around-clock__text-holder-content-title">Payment Processing App For Solo Entrepreneurs & SMBs</h2>
            <p class="c-around-clock__text-holder-content-desc">
              How TopDevs helped to perform a full-cycle development of a fintech web and mobile app for
              solo entrepreneurs and SMBs that allows making payments on the go with just a smartphone
              that acts as a portable point-of-sale terminal.
            </p>
          </div>
          <div class="c-around-clock__text-holder-content_wrapper">
            <div class="c-around-clock__text-holder-content_item">
              <p class="c-around-clock__text-holder-content_item-label">Industry:</p>
              <p class="c-around-clock__text-holder-content_item-text">Retail & E-Commerce <br /> Fintech</p>
            </div>
            <div class="c-around-clock__text-holder-content_item">
              <p class="c-around-clock__text-holder-content_item-label">Duration:</p>
              <p class="c-around-clock__text-holder-content_item-text">April - September 2021</p>
            </div>
            <div class="c-around-clock__text-holder-content_item">
              <p class="c-around-clock__text-holder-content_item-label">Country:</p>
              <p class="c-around-clock__text-holder-content_item-text">Australia</p>
            </div>
          </div>
        </div>
        <div class="c-around-clock__photo">
          <img
              class="c-around-clock__photo-img"
              src="/images/site/portfolio/around-the-clock/homepage-phone-update.png"
              alt="phone"
          >
        </div>
        <div class="c-around-clock__text-holder-content_wrapper--mobile c-around-clock__text-holder-content_wrapper">
          <div class="c-around-clock__text-holder-content_item">
            <p class="c-around-clock__text-holder-content_item-label">Industry:</p>
            <p class="c-around-clock__text-holder-content_item-text">Retail & E-Commerce <br /> Fintech</p>
          </div>
          <div class="c-around-clock__text-holder-content_item c-around-clock__text-holder-content_item-other">
            <p class="c-around-clock__text-holder-content_item-label">Duration:</p>
            <p class="c-around-clock__text-holder-content_item-text">April - September 2021</p>
          </div>
          <div class="c-around-clock__text-holder-content_item c-around-clock__text-holder-content_item-other">
            <p class="c-around-clock__text-holder-content_item-label">Country:</p>
            <p class="c-around-clock__text-holder-content_item-text">Australia</p>
          </div>
          <div class="c-around-clock__text-holder-content_item c-around-clock__text-holder-content_item-fifth">
            <p class="c-around-clock__text-holder-content_item-label">Country:</p>
            <p class="c-around-clock__text-holder-content_item-text">Australia</p>

          </div>
          <div class="c-around-clock__text-holder-content_item c-around-clock__text-holder-content_item-fifth">
            <p class="c-around-clock__text-holder-content_item-label">Duration:</p>
            <p class="c-around-clock__text-holder-content_item-text">Ap. - Sep. 2021</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AroundClockHome"
}
</script>

<style lang="scss">
.c-around-clock {
  width: 100vw;
  height: 100vh;
  min-height: 80rem;
  max-height: 108rem;
  padding-top: calc(var(--header-height));
  background: linear-gradient(122deg, #141839 68.5%, #e61949 62.5%);

  @media screen and (max-width: 1920px) {
    background: linear-gradient(122deg, #141839 70%, #e61949 69%);
  }

  @media screen and (max-width: 1680px) {
    background: linear-gradient(122deg, #141839 72%, #e61949 71%);
  }

  @media screen and (max-width: 1440px) and (max-height: 990px) {
    min-height: 70rem;
    background: linear-gradient(122deg, #141839 73.7%, #e61949 73%);
  }

  @media screen and (max-width: 1440px) and (max-height: 750px) {
    min-height: 70rem;
    background: linear-gradient(122deg, #141839 75%, #e61949 73%);
  }

  @media screen and (max-width: 1200px) {
    background: linear-gradient(122deg, #141839 69%, #e61949 69%);
    height: 100%;
  }

  @media screen and (max-width: 1180px) {
    background: linear-gradient(122deg, #141839 68%, #e61949 68%);
    height: 100%;
  }

  @media screen and (max-width: 1120px) {
    background: linear-gradient(122deg, #141839 67%, #e61949 67%);
    height: 100%;
  }

  @media screen and (max-width: 992px) {
    background:linear-gradient(122deg, #141839 70.5%, #e61949 67%);
    height: 100%;
    padding: 11% 0;
  }
  @media screen and (max-width: 768px) {
    background: linear-gradient(122deg, #141839 59.5%, #e61949 59.5%);
    margin: 11% 0 5% 0;
  }
  @media screen and (max-width: 600px) {
    background: linear-gradient(122deg, #141839 62.5%, #e61949 59.5%);
  }
  @media screen and (max-width: 576px) {
    background: linear-gradient(122deg, #141839 54%, #e61949 54%);
    margin: 11% 0 5% 0;
  }
  @media screen and (max-width: 414px) {
    background: linear-gradient(122deg, #141839 57%, #e61949 54%);
    margin: 11% 0 5% 0;
  }
  @media screen and (max-width: 375px) {
    background: linear-gradient(122deg, #141839 58%, #e61949 51%);
    margin: 11% 0 5% 0;
  }
  @media screen and (max-width: 360px) {
    background: linear-gradient(122deg, #141839 51%, #e61949 51%);
    margin: 11% 0 5% 0;
  }
  @media screen and (max-width: 330px) {
    background: linear-gradient(122deg, #141839 54%, #e61949 54%);
    margin: 11% 0 5% 0;
  }

  &__case {
    height: 100%;
    display: flex;
    align-items: center;
    @media screen and (max-width: 768px) {
      flex-direction: column;
    }
  }
  &__text-holder {
    height: 100%;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
    &-text {
      font-family: var(--Mulish);
      font-style: normal;
      font-weight: bold;
      color: white;
      font-size: 100px;
      line-height: 120%;
      letter-spacing: 0.06em;
      @media screen and (max-width: 1440px) {
        font-size: 7rem;
      }
      @media screen and (max-width: 1200px) {
        font-size: 60px;
      }
      @media screen and (max-width: 992px) {
        font-size: 54px;
      }
      @media screen and (max-width: 768px) {
        text-align: center;
        width: 100%;
      }
      @media screen and (max-width: 360px) {
        font-size: 40px;
      }
    }
    &-content {
      max-width: 85%;

      @media screen and (max-width: 1920px) {
        max-width: 85%;
      }

      @media screen and (max-width: 1440px) {
        max-width: 95%;
      }

      @media screen and (max-width: 1200px) {
        max-width: 78%;
      }

      @media screen and (max-width: 992px) {
        max-width: 90%;
      }

      @media screen and (max-width: 768px) {
        max-width: 100%;
        text-align: center;
      }

      &-title {
        margin: 40px 0 20px 0;
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 140%;
        letter-spacing: 1px;
        text-transform: capitalize;
        color: #FFFFFF;

        @media screen and (max-width: 1440px) {
          font-size: 2.4rem;
        }
        @media screen and (max-width: 1200px) {
          font-size: 24px;
          max-width: 85%;
        }

        @media screen and (max-width: 992px) {
          font-size: 20px;
        }

        @media screen and (max-width: 768px) {
          text-align: center;
          width: 100%;
        }
        @media screen and (max-width: 576px) {
          max-width: 100%;
        }
        @media screen and (max-width: 360px) {
          font-size: 18px;
          margin: 20px 0;
        }
      }
      &-desc {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 160%;
        letter-spacing: 0.03em;
        color: #CCCCCC;

        @media screen and (max-width: 1440px) {
          font-size: 2rem;
        }
        @media screen and (max-width: 1200px) {
          font-size: 20px;
        }

        @media screen and (max-width: 992px) {
          font-size: 16px;
          letter-spacing: 0.03em;
        }
      }
      &_wrapper {
        width: 85%;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 62px;

        &--mobile {
          display: none;
        }

        @media screen and (max-width: 1920px) {
          width: 90%;
        }
        @media screen and (max-width: 1440px) {
          width: 90%;
        }
        @media screen and (max-width: 1200px) {
          width: 100%;
        }
        @media screen and (max-width: 1170px) {
          width: 90%;
        }
        @media screen and (max-width: 992px) {
          width: 100%;
        }
        @media screen and (max-width: 576px) {
          display: none;
          &--mobile {
            display: flex;

            @media screen and (max-width: 576px) {
              .c-around-clock__text-holder-content_item {
                &-fifth {
                  display: block;
                  .c-around-clock__text-holder-content_item-text {
                    font-style: normal;
                    font-weight: 600;
                    font-size: 20px;
                    line-height: 160%;
                    letter-spacing: 0.04em;
                    color: #FFFFFF;
                  }
                }
                &-other {
                  display: none;
                }
              }
              .c-around-clock__text-holder-content_item {
                &-fifth {
                  display: block;
                  .c-around-clock__text-holder-content_item-label {
                    font-style: normal;
                    font-weight: normal;
                    font-size: 20px;
                    line-height: 160%;
                    letter-spacing: 0.03em;
                    color: #CCCCCC;
                  }
                }
                &-other {
                  display: none;
                }
              }
            }

            @media screen and (max-width: 360px) {
              .c-around-clock__text-holder-content_item {
                &-fifth {
                  display: none;
                }
                 &-other {
                   display: block;
                  .c-around-clock__text-holder-content_item-text {
                    font-style: normal;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 160%;
                    letter-spacing: 0.04em;
                    color: #FFFFFF;
                  }
                }
              }
              .c-around-clock__text-holder-content_item {
                &-fifth {
                  display: none;
                }
                &-other {
                  display: block;
                  .c-around-clock__text-holder-content_item-label {
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 160%;
                    letter-spacing: 0.03em;
                    color: #CCCCCC;
                  }
                }
              }
              flex-direction: column;
            }
          }
        }
      }
      &_item {
        display: flex;
        flex-direction: column;
        &-label {
          font-family: var(--ProximaNova);
          font-style: normal;
          font-weight: normal;
          font-size: 24px;
          line-height: 160%;
          letter-spacing: 0.03em;
          color: #CCCCCC;

          @media screen and (max-width: 1440px) {
            font-size: 2.4rem;
          }

          @media screen and (max-width: 1200px) {
            font-size: 24px;
          }

          @media screen and (max-width: 1120px) {
            font-size: 20px;
          }

          @media screen and (max-width: 992px) {
            font-size: 20px;
          }
          @media screen and (max-width: 576px) {
            font-size: 18px;
          }
        }
        &-text {
          font-family: var(--ProximaNova);
          font-style: normal;
          font-weight: 600;
          font-size: 24px;
          line-height: 160%;
          letter-spacing: 0.04em;
          color: #FFFFFF;

          @media screen and (max-width: 1440px) {
            font-size: 2.4rem;
          }

          @media screen and (max-width: 1200px) {
            font-size: 24px;
          }

          @media screen and (max-width: 1120px) {
            font-size: 20px;
          }

          @media screen and (max-width: 992px) {
            font-size: 20px;
          }
          @media screen and (max-width: 576px) {
            font-size: 18px;
          }
        }
      }
    }
  }
  &__photo {
    width: 100%;
    display: flex;
    justify-content: flex-end;
    @media screen and (max-width: 768px) {
      margin-top: 30px;
      display: flex;
      justify-content: center;
    }
    @media screen and (max-width: 360px) {
      margin-left: 0;
    }
    &-img {
      width: 362px;
      height: 100%;
      @media screen and (max-width: 1440px) {
        width: 301px;
      }
      @media screen and (max-width: 992px) {
        width: 241px;
      }
      @media screen and (max-width: 768px) {
        width: 191px;
      }
    }
  }
}
</style>