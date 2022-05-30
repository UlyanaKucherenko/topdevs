<template>
  <div class="comparison-table">
    <div class="comparison-table__left">
      <div class="comparison-table__title text-md"> Major Factors</div>
      <div class="comparison-table__body">
        <div class="comparison-table__body-item"
             v-for="(item,idx) in listFirst"
             :key="`item1-${idx}`"
        >
          <img :src="item.iconPath">
          <span class="text-md">{{ item.text }}</span>
        </div>
      </div>
    </div>
    <div class="comparison-table__right">
      <div>
        <div class="comparison-table__title text-md">Native App Development</div>
        <div class="comparison-table__body">
          <div class="comparison-table__body-item"
               v-for="(item,idx) in listSecond"
               :key="`item2-${idx}`"
          >
            <span class="text-md">{{ item }}</span>
          </div>
        </div>
      </div>
      <div>
        <div class="comparison-table__title text-md">Cross-Platform App Development</div>
        <div class="comparison-table__body">
          <div class="comparison-table__body-item"
               v-for="(item,idx) in listThird"
               :key="`item3-${idx}`"
          >
            <span class="text-md">{{ item }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ComparisonTable",
  data() {
    return {
      listFirst: [
        {
          text: 'UI/UX',
          iconPath: '/images/site/services/mobile/table/transform-tool.svg'
        },
        {
          text: 'Performance',
          iconPath: '/images/site/services/mobile/table/Fire.svg'
        },
        {
          text: 'Developer\'s entry points into project',
          iconPath: '/images/site/services/mobile/table/approve-user.svg'
        },
        {
          text: 'Time to market',
          iconPath: '/images/site/services/mobile/table/clock.svg'
        },
        {
          text: 'Team size',
          iconPath: '/images/site/services/mobile/table/users.svg'
        },
        {
          text: 'Third-party integrations',
          iconPath: '/images/site/services/mobile/table/puzzle.svg'
        },
        {
          text: 'Offline mode',
          iconPath: '/images/site/services/mobile/table/Internet.svg'
        },
        {
          text: 'Upgrades',
          iconPath: '/images/site/services/mobile/table/Process.svg'
        },
      ],
      listSecond: [
        'Full platform-specific UI',
        'Excellent',
         'Easy',
        'Long (a separate app is required for each platform)',
         'Big (a different team for each platform)',
         'Excellent',
         'Present',
        'Automatic',
      ],
      listThird: [
          'Common UI for all apps with limited customization',
          'Common issues requiring a few workarounds',
          'Medium',
          'Fast (a single codebase for all platforms)',
          'Small to mid (one team for all platforms)',
          'Average',
          'Not Present',
          'Difficult'
      ]
    }
  },
}
</script>

<style lang="scss" scoped>
.comparison-table {

  display: grid;
  grid-template-columns: 1fr 925px;
  gap: 24px;
  font-family: var(--mulish);
  letter-spacing: 0.01em;
  overflow-x: auto;

  //----scrollbar---
  --scrollbar-width: 3px;
  &::-webkit-scrollbar {
    height: var(--scrollbar-width);
    width: var(--scrollbar-width);
  }

  &::-webkit-scrollbar-track {
    border-radius: var(--scrollbar-width);
    background: var(--blue-light);
  }

  &::-webkit-scrollbar-thumb {
    background: #C7E0F9;
    border-radius: var(--scrollbar-width);
  }

  &__title {
    padding: 28px 30px;
    background: rgba(255, 255, 255, 0.07);
    border-radius: 6px 6px 0 0;
    font-weight: 600;
    line-height: 100%;
    text-transform: uppercase;
    color: #FFFFFF;
  }

  &-body {

  }

  &__body-item {
    display: flex;
    align-items: center;
    padding: 28px 30px;
    font-weight: 700;
    line-height: 135%;
    color: rgba(255, 255, 255, 0.7);
    min-height: 54px;

    img {
      margin-right: 20px;
    }
    span {
      max-width: 280px;
    }
  }

  &__left {
    .comparison-table__body-item {
      border-bottom: 1px solid #634ca45c;
      border-left: 1px solid #634ca45c;
      border-right: 1px solid #634ca45c;
    }
  }

  &__right {
    display: grid;
    grid-template-columns: 1fr 1fr;

    .comparison-table__title {
      border: 1px solid var(--blue-light);
    }
  }

}

</style>