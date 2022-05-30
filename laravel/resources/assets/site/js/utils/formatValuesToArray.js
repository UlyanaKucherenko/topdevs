import Vue from 'vue'

export default function formatValuesToArray(input, output) {
  Object.keys(input).forEach(key => {
    let value = input[key]
    if (Array.isArray(value)) Vue.set(output, key, value)
    else Vue.set(output, key, [value])
  })
}