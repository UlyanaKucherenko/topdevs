<template>
  <div class="c-tech-stack">
    <div class="container">
      <div class="c-tech-stack__title">
        <h3 class="c-tech-stack__title-text">
          Tech Stack
        </h3>
      </div>
      <div class="c-tech-stack__wrapper">
        <div class="c-tech-stack__wrapper-item" :key="techStack.id" v-for="techStack of stacks">
          <h2 class="c-tech-stack__wrapper-item-title">{{ techStack.title }}</h2>
          <div class="c-tech-stack__wrapper-item-desc" :key="properties.id" v-for="properties of techStack.options">
            {{ properties.name }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "TechStack",
  data() {
    return {
      stacks: [
        {
          id: 0, title: "iOS", options: [
            { id: 0, name: "Swift" },
            { id: 1, name: "Local Authentication" },
            { id: 2, name: "Framework" },
            { id: 3, name: "MPiosChart" },
            { id: 4, name: "CameraX" },
          ],
        },
        {
          id: 1, title: "Design", options: [
            { id: 0, name: "Figma" },
            { id: 1, name: "Figmotion" },
          ],
        },
        {
          id: 2, title: "Android", options: [
            { id: 0, name: "Kotlin" },
            { id: 1, name: "Biometric API" },
            { id: 2, name: "MPAndroidChart" },
            { id: 3, name: "CameraX" },
          ],
        },
        {
          id: 3, title: "Backend", options: [
            { id: 0, name: "Laravel" },
            { id: 1, name: "MySQL" },
            { id: 2, name: "Docker Compose" },
            { id: 3, name: "MVC Structure" },
          ],
        },
        {
          id: 4, title: "Frontend", options: [
            { id: 0, name: "React.js" },
            { id: 1, name: "Material" },
            { id: 2, name: "Native" },
          ],
        },
      ]
    }
  },
}
</script>

<style lang="scss">
.c-tech-stack {
  padding: 80px 0 120px 0;
  display: flex;
  flex-direction: column;
  background: rgb(20,24,59);
  background: linear-gradient(122deg, #14183b 28%, #e61949 28%);
  @media screen and (max-width: 1440px) {
    background: linear-gradient(122deg, #14183b 25%, #e61949 25%);
  }
  @media screen and (max-width: 1200px) {
    background: linear-gradient(122deg, #14183b 37%, #e61949 25%);
  }
  @media screen and (max-width: 768px) {
    background: linear-gradient(120deg, #e61949 67%, #14183b 67%);
    padding: 80px 0;
  }
  &__title {
    color: #FFFFFF;
    &-text {
      font-family: var(--ProximaNova);
      font-style: normal;
      font-weight: 600;
      font-size: 54px;
      line-height: 120%;
      letter-spacing: 0.03em;
      color: #FFFFFF;

      @media screen and (max-width: 992px) {
        font-size: 40px;
      }
      @media screen and (max-width: 768px) {
        font-size: 40px;
        text-align: center;
      }
    }
  }
  &__wrapper {
    display: flex;
    justify-content: space-between;
    @media screen and (max-width: 768px) {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px 0;
    }

    @media screen and (max-width: 360px) {
      margin-top: 30px;
    }

    &-item {
      @media screen and (max-width: 768px) {
        padding-left: 35%;
      }
      @media screen and (max-width: 360px) {
        padding-left: 0;
        grid-gap: 20px;
      }
      &-title {
        margin: 20px 0;
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: 1px;
        text-transform: capitalize;
        color: #FFFFFF;
        @media screen and (max-width: 1440px) {
          font-size: 22px;
        }
        @media screen and (max-width: 992px) {
          font-size: 20px;
        }
        @media screen and (max-width: 768px) {
          margin-top: 0;
          margin-bottom: 15px;
        }
      }
      &-desc {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 160%;
        letter-spacing: 0.06em;
        color: #FFFFFF;
        @media screen and (max-width: 992px) {
          font-size: 14px;
        }
      }
      @media screen and (max-width: 768px) {
        &:nth-child(2) {
          grid-row-start: 3;
        }
        &:nth-child(3) {
          grid-column-start: 2;
          grid-row-start: 1;
        }
        &:nth-child(5) {
          grid-column-start: 1;
          grid-row-start: 2;
        }
      }
    }
  }
}
</style>

