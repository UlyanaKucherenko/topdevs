export function deepCopy(inObject) {
  let outObject, value, key

  if (typeof inObject !== "object" || inObject === null) {
    return inObject // Return the value if inObject is not an object
  }

  // Create an array or object to hold the values
  outObject = Array.isArray(inObject) ? [] : {}

  for (key in inObject) {
    value = inObject[key]

    // Recursively (deep) copy for nested objects, including arrays
    outObject[key] = deepCopy(value)
  }

  return outObject
}

export function loadImages(val) {
  return new Promise(resolve => {
    let images;

    if (Array.isArray(val)) {
      images = val.map(url => {
        let img = new Image()
        img.src = url
        return img
      })
    } else images = val.querySelectorAll('img')

    let countToLoad = images.length
    let countLoaded = 0

    images.forEach(img => {
      if (img.complete) countLoaded++
      else img.onload = () => {
        countLoaded++
        if (countToLoad == countLoaded) resolve()
      }

      if (countToLoad == countLoaded) resolve()
    })
  })
}

export const debounce = (func, delay) => {
  let timeout = null

  return () => {
    clearTimeout(timeout)

    timeout = setTimeout(() => {
      func()
    }, delay);
  }
}
