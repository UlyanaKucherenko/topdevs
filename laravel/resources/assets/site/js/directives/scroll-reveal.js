const sr = require('scrollreveal').default();
import MobileDetect from 'mobile-detect'

let md = new MobileDetect(window.navigator.userAgent).mobile()

function generateOptions(defaultOptions, bindingValue, bindingModifiers) {
  const options = Object.assign({}, defaultOptions, bindingValue);

  if (bindingModifiers) {
    if (bindingModifiers.reset) {
      options.reset = true;
    }

    if (bindingModifiers.nomobile) {
      options.mobile = false;
    }

    if (bindingModifiers.nodesktop) {
      options.desktop = false;
    }
  }

  return options;
}

const VueScrollReveal = {
  install(Vue, defaultOptions) {
    Vue.directive('scroll-reveal', {
      inserted: (el, binding, vnode) => {
        if (binding.value && binding.value.disabled || el.getBoundingClientRect().top < 0) return
        let self = vnode.context
        const options = generateOptions(defaultOptions, binding.value, binding.modifiers);

        if (typeof options.class === 'string') {
          el.classList.add(options.class);
          delete options.class;
        }

        if (!md) el.classList.add('hidden')

        if (!self.$store.state.loading.pageIsLoaded && !md) {
          self.$watch('$store.state.loading.pageIsLoaded', () => {sr.reveal(el, options)})
        } else if (self.$store.state.loading.pageIsLoaded && !md) sr.reveal(el, options)
      },

      update: (el, binding) => {
      },
    });
  },
};

window.addEventListener('resize', () => {
  document.querySelectorAll('.v-scroll-reveal').forEach(el => {
    sr.destroy(el)
    el.classList.remove('v-scroll-reveal', 'hidden')
    el.style = ""
  })
})

export default VueScrollReveal;
