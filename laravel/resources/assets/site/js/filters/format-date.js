export default str => {
  let date = new Date(str)
  let formattedDate = `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`
  return formattedDate
}

const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
