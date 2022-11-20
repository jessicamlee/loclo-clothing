const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const terser = require('gulp-terser');
const concat = require('gulp-concat');

function build_css() {
    return src('./public/src/sass/**/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(dest('./public/build/css/'));
}

function build_js() {
    return src([
            './public/src/js/aos.js',
            './public/src/js/main.js',])
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(concat({ path: 'main.js'}))
        .pipe(sourcemaps.write())
        .pipe(dest('./public/build/js/'));
};

function watchTasks() {
    watch('./public/src/sass/**/*.scss', build_css);
    watch('./public/src/js/**/*.js', build_js);
}

exports.default = series(build_css, build_js, watchTasks);