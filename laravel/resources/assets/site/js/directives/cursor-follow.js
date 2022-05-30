import gsap from 'gsap'
import MobileDetect from 'mobile-detect'

export const cursorFollow = {
  bind(el, binding, vnode) {
    let options = binding.value
    elements.push({el, ...options})
  },

  inserted(el) {
  },
}

let md = new MobileDetect(window.navigator.userAgent).mobile()

let elements = []
let savedElements = []
let realX = 0
let delayedX = 0
let realY = 0
let delayedY = 0
let coordInterval = null
let windowWidth = window.innerWidth
let windowHeight = window.innerHeight

if (!md) {
  document.addEventListener('mousemove', e => {
    realX = (e.clientX - windowWidth/2) / 30
    realY = (e.clientY - windowHeight/2) / 30
  })
  
  coordInterval = setInterval(() => {
    delayedX += (realX - delayedX) / 20
    delayedY += (realY - delayedY) / 20
    elements.forEach(item => {
      let x = delayedX, y = delayedY
      if (item.multiplier) {
        x = x * item.multiplier
        y = y * item.multiplier
      }
  
      if (item.transform) {
        let options = {}
        let str = ''
  
        if (item.transform.x) {
          options.xPercent = item.transform.x
          options.x = x
        } else options.x = x
  
        if (item.transform.y) {
          options.yPercent = item.transform.y
          options.y = y
        } else options.y = y
  
        gsap.set(item.el, {...options})
      }  else gsap.set(item.el, {x, y})
    })
  }, 10)
}
