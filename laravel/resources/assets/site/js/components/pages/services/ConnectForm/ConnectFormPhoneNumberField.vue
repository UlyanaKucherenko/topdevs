<template>
  <div class="phone-number-field">
    <ConnectFormInput
      :style="`--code-letters-count: ${_prefix.length}`"
      :classes="{input: 'phone-number-field__input'}"
      v-bind="$attrs"
      :value="_valueWithoutPrefix"
      :error="error"
      @input="handleInput"
      @blur="$emit('blur')"
      numericOnly
    >
      <div
        class="phone-number-field__control"
        @click="countriesDropdownIsOpen = true"
      >
        <img
          v-if="selectedCountry"
          class="phone-number-field__flag"
          :src="selectedCountry.picture.image"
          alt=""
        >
        <img
          src="/images/site/icons/arrows/12.svg" alt=""
          class="phone-number-field__arrow"
          :class="{'phone-number-field__arrow--rotated': countriesDropdownIsOpen}"
        >
        <div class="phone-number-field__prefix">{{ _prefix }}</div>
      </div>
    </ConnectFormInput>

    <div
      v-if="countriesDropdownIsOpen"
      class="phone-number-field__countries-dropdown"
      v-click-outside="closeCountriesDropdown"
    >
      <div
        v-for="country in _allCountries"
        class="phone-number-field__countries-dropdown-item"
        @click="handleCountriesDropdownItemClick(country)"
      >
        <img
          class="phone-number-field__countries-dropdown-item-flag phone-number-field__flag"
          :src="country.picture.image"
          alt=""
        >
        <span class="phone-number-field__countries-dropdown-item-name">{{ country.name }}</span>
        <span>{{ country.dial_code }}</span>
      </div>
    </div>
  </div>
</template>

<script>
import ConnectFormInput from './ConnectFormInput';

export default {
  inheritAttrs: false,
  props: {
    value: String,
    error: String,
  },
  components: {ConnectFormInput},
  data() {
    return {
      countriesDropdownIsOpen: false,
      selectedCountry: this._userCountry,
    }
  },
  computed: {
    _userCountry() {
      return this.$store.state.global.userCountry
    },
    _allCountries() {
      return this.$store.state.global.allCountries
    },
    _prefix() {
      return this.selectedCountry?.dial_code || ''
    },
    _valueWithPrefix() {
      return this.value
    },
    _valueWithoutPrefix() {
      return this._valueWithPrefix.replace(this._prefix, '')
    },
  },
  created() {
    this.selectedCountry = this._userCountry
    },
  watch: {
    _userCountry() {
      if (this.selectedCountry === null) this.selectedCountry = this._userCountry
    }
  },
  methods: {
    handleInput(inputValue) {
      const valueToEmit = !inputValue.length ? '' : this._prefix + inputValue
      this.$emit('input', valueToEmit)
    },
    openCountriesDropdown() {
      this.countriesDropdownIsOpen = true;
    },
    closeCountriesDropdown() {
      this.countriesDropdownIsOpen = false;
    },
    setSelectedCountry(countryObject) {
      const valueToEmit = !this._valueWithoutPrefix.length ? '' : countryObject.dial_code + this._valueWithoutPrefix
      this.selectedCountry = countryObject
      this.$emit('input', valueToEmit)
    },
    handleCountriesDropdownItemClick(countryObject) {
      this.setSelectedCountry(countryObject)
      this.closeCountriesDropdown()
    },
  }
}
</script>

<style lang="scss">
  .phone-number-field {
    position: relative;
    width: 100%;

    &__control {
      position: absolute;
      bottom: 1.1rem;
      left: 1.4rem;
      display: flex;
      align-items: center;
      z-index: 1;
      cursor: pointer;
    }

    &__flag {
      width: 35px;
      height: 24px;
    }

    &__arrow {
      &--rotated {
        transform: rotate(180deg);
      }
    }

    &__input {
      padding-left: calc(80px + .5em * var(--code-letters-count));
    }

    &__countries-dropdown {
      position: absolute;
      z-index: 1;
      max-height: 300px;
      top: calc(100% + 8px);
      right: 0;
      left: 0;
      background: #282828;
      padding: 1.4rem 0;
      outline: 1px solid #DDDDDD;
      overflow-y: scroll;

      &-item {
        position: relative;
        display: flex;
        align-items: center;
        padding: 1.2rem 1.4rem;
        cursor: pointer;

        &:before {
          content: '';
          position: absolute;
          right: 1.4rem;
          bottom: 0;
          left: 1.4rem;
          height: 1px;
          background: #505050;
        }

        &:hover {
          background: #222222;
        }

        &-flag {
          margin-right: 16px;
        }

        &-name {
          width: 175px;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
          margin-right: 16px;
        }
      }
    }
  }
</style>
