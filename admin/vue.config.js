const path = require("path");

module.exports = {
	publicPath: '/admin',
	transpileDependencies: [
		"vuetify"
	],
	configureWebpack: {
		resolve: {
			alias: {
				"@": path.join(__dirname, './src')
			}
		}
	}
}
