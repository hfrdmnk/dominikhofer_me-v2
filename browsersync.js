// https://snorpey.codes/en/articles/kirby-cms-live-reload-server

const browserSync = require("browser-sync");
const syncOptions = require("./package.json").browserSync;
const filesToWatch = syncOptions.watch || [];
const filesToIgnore = syncOptions.ignore || [];
const proxy = syncOptions.proxy;

const sync = browserSync.create();

sync.init({
	watch: true,
	proxy,
	files: filesToWatch,
	ignore: filesToIgnore,
	open: "local",
});
