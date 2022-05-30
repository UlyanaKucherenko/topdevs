export default {
	data() {
		return {
			editorToolbar: [
				// [{ font: [] }],
				[{'header': [false, 2, 3, 4, 5]}],
				// [{'size': ['14px', false, 'large', 'huge']}],
				['bold', 'italic', 'underline', 'strike'],
				[{'align': ''}, {'align': 'center'}, {'align': 'right'}, {'align': 'justify'}],
				// [{ 'header': 1 }, { 'header': 2 }],
				// ['blockquote', 'code-block'],
				[{'list': 'ordered'}, {'list': 'bullet'}],
				['link', 'image', 'video'], // 'video', 'formula'
				// [{ 'script': 'sub'}, { 'script': 'super' }],
				// [{ 'indent': '-1'}, { 'indent': '+1' }],
				[{'color': []}, {'background': []}],
				// [{ 'direction': 'rtl' }],
				['clean'],
			]
		}
	}
}
