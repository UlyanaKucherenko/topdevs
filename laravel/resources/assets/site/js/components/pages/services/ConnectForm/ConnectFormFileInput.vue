<template>
  <label
    class="connect-form-file-input"
    @click="onClick"
  >
    <input
      autocomplete="off"
      ref="input"
      type="file"
      multiple
      @change="onChange"
      accept=".jpg, .jpeg, .png, .doc, .docx, .pdf, .txt"
    >
    <div class="connect-form__input-img-inner">
      <img src="/images/site/clip.svg">
    </div>
    <span class="connect-form-file-input__title">Attach files</span>
    <span
      v-if="filesCount"
      class="connect-form-file-input__title"
    >
     &nbsp; {{ `(${filesCount} file${filesCount > 1 ? 's' : ''} uploaded)` }}
    </span>
  </label>
</template>

<script>
export default {
  props: {
    filesCount: Number
  },

  methods: {
    onChange(e) {
      this.$emit('change', e.target.files)
    },
    onClick() {
      this.$refs.input.value = ''
    }
  },
}
</script>

<style lang="scss">
.connect-form-file-input {
  display: flex;
  width: fit-content;
  align-items: center;
  cursor: pointer;

  input {
    display: none;
  }
}
</style>

