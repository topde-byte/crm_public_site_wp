const path = require('path');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const minify = require('gulp-minify');
const sourcemaps = require('gulp-sourcemaps');


// Пути темы
const themePath = path.resolve(__dirname, 'wp-content/themes/crm-public-site');
const themeSrc = path.resolve(themePath, 'src');
const themeBuild = path.resolve(themePath, 'build');
console.log(themeSrc)

/* ==========================================================
 *  Theme CSS
 * ========================================================== */
function css() {
	return gulp
		.src(path.resolve(themeSrc, './scss/**/*.scss'))
		.pipe(sourcemaps.init())
		.pipe(
			sass({
				outputStyle: 'compressed',
				silenceDeprecations: ['import', 'legacy-js-api', 'mixed-decls'],
			}).on('error', sass.logError)
		)
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest(path.resolve(themeBuild, './css')));
}

function copyAllCSS() {
	return gulp
		.src(path.resolve(themePath, './css/**/*.css'))
		.pipe(gulp.dest(path.resolve(themeBuild, './css')));
}


/* ==========================================================
 *  Theme JS
 * ========================================================== */


function js() {
	return gulp
		.src(path.resolve(themeSrc, './js/**/*.js'))
		.pipe(sourcemaps.init())
		.pipe(
			minify({
				noSource: true,
				ext: { min: '.js' }
			})
		)
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest(path.resolve(themeBuild, './js')));
}


/* ==========================================================
 *  Vendor (Bootstrap, Swiper, etc.)
 * ========================================================== */
function copyVendors() {
	return gulp
		.src(path.resolve(themePath, './vendor/**/*'))
		.pipe(gulp.dest(path.resolve(themeBuild, './vendor')));
}


/* ==========================================================
 *  Images
 * ========================================================== */
// function images() {
// 	return gulp
// 		.src(path.resolve(themeSrc, './img/**/*'))
// 		.pipe(gulp.dest(path.resolve(themeBuild, './img')));
// }

/* ==========================================================
 *  Build
 * ========================================================== */
exports.build = gulp.series(
	gulp.parallel(css, js, copyAllCSS, copyVendors)
);
