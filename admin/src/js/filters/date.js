const dateFilter = (date) => {
	let dateNow = date || null;

	if (dateNow) {
		let newDate = new Date(dateNow), // * 1000
			day = newDate.getDate(),
			month = newDate.getMonth() + 1,
			year = newDate.getFullYear();

		day = day < 10 ? `0${day}` : day;
		month = month < 10 ? `0${month}` : month;

		return `${day}/${month}/${year}`;
	}

	return '';

}

export default dateFilter;
