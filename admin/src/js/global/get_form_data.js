export default function getFormData(data, method = false) {
	let fd = new FormData();

	Object.keys(data).forEach(item => {
		if (data[item] === undefined || data[item] === null) return

		if (item === 'picture') {
			if (+data[item].size > 0) {
				fd.append(item, data[item])
			}
		} else if (Array.isArray(data[item])) {
			if (data[item].length == 0) fd.append(item, data[item])
			data[item].forEach((el, key) => {
				fd.append(`${item}[${key}]`, el)
			})
		} else {
			fd.append(item, data[item])
		}
	})

	if (method) {
		fd.append('_method', 'put');
	}

	return fd;
}
