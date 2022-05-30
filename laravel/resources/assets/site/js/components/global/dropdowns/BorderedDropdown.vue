<template>
  <div class="bordered-dropdown">
    <RelativeDropdown>
      <template v-slot:btn>
        <div class="bordered-dropdown__btn">
          {{ title }}
        </div>
      </template>

      <template v-slot:content>
        <div 
          class="bordered-dropdown__content"
          v-if="items.length"
        >
          <AppCheckbox
            class="bordered-dropdown__checkbox"
            v-for="(item, index) in items" :key="index"
            :name="item.name"
            :checked="item.checked"
            @change="checkboxOnChange({slug: item.slug, value: $event})"
          />
        </div>
      </template>
    </RelativeDropdown>
  </div>
</template>

<script>
import RelativeDropdown from '@/js/components/global/dropdowns/RelativeDropdown'
import AppCheckbox from '@/js/components/global/AppCheckbox'

export default {
  components: {RelativeDropdown, AppCheckbox},

  props: {
    title: String,
    items: Array,
    activeItems: Array,
  },


  methods: {
    checkboxOnChange(payload) {
      this.$emit('filterChange', payload)
    },
  }
}
</script>

<style lang="scss">
  .bordered-dropdown {
    &__btn {
      text-transform: uppercase;
      padding: 2.5rem 0;
      border-bottom: 1px solid #DDDDDD;
      color: var(--black-dark);
      cursor: pointer;
    }

    &__content {
      margin-top: calc(var(--space-unit) * 4);
    }

    &__checkbox {
      padding: var(--space-unit);

      &:first-child {
        padding-top: 0;
      }
    }
  }
</style>