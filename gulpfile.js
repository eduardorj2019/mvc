const {src, dest, parallel, watch} = require('gulp');
const rename = require('gulp-rename');
const minifyJs = require('gulp-uglify');
const sass = require('gulp-sass');
const mode = require('gulp-mode')({
	modes: ["production", "development"],
  	default: "development",
  	verbose: false
});

const isProduction = mode.production();

sass.compiler = require('node-sass');

function javascript() {

	return src('Views/js/*.js')
		.pipe(minifyJs())
		.pipe(rename({extname:'.min.js'}))
		.pipe(dest('public/assets/js/'));
}

function css() {
	return src('Views/sass/*.scss')
		.pipe(sass({outputStyle:'compressed'}))
		.pipe(rename({extname:'.min.css'}))
		.pipe(dest('public/assets/css/'));
}

if (isProduction) {
exports.default = parallel(javascript,css);
} else {
	exports.default = function() {
		watch('Views/sass/*.scss',parallel(javascript,css));
	}	
}