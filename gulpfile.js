/**
 *
 * Gulp Modules
 *
 */
var gulp = require('gulp');
var rename = require('gulp-rename');
var scss = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
// var postcss = require('gulp-postcss');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');

/**
 *
 * Gulp SCSS Variables
 *
 */
var adminStyleSRC = './assets/src/scss/main.scss';
var styleWatch = './assets/src/scss/**/*.scss';
var styleDIST = './assets/dist/css/';

/**
 *
 * Gulp SCSS to CSS
 *
 */
function styles(done) {
  gulp
    .src(adminStyleSRC)
    .pipe(sourcemaps.init())
    .pipe(
      scss({
        errorLogToConsole: true,
        outputStyle: 'compressed'
      })
    )
    .on('error', console.error.bind(console))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ['last 2 versions', '> 5%', 'Firefox ESR']
      })
    )
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(styleDIST));

  done();
}

/**
 *
 * Gulp JS Variables
 *
 */
var jsSRC = 'script.js';
var googleMapSRC = 'GoogleMap.js';

var jsFolder = 'assets/src/js/';
var jsWatch = 'assets/src/js/**/*.js';
var jsDIST = './assets/dist/js/';

var jsFILES = [jsSRC, googleMapSRC];

// The following can be enabled to run React Scripts or any other ES6 Scripts
// var jsReactSRC = 'script-react.js';
// var jsReactSRC2 = 'script-react-2.js';
// var jsFILES = [ jsSRC, jsReactSRC, jsReactSRC2 ];

/**
 *
 * JS Minification & Compilation
 *
 */

function js(done) {
  jsFILES.map(function(singleJSFile) {
    return browserify({
      entries: [jsFolder + singleJSFile]
    })
      .transform(babelify, { presets: ['@babel/preset-env'] })
      .bundle()
      .pipe(source(singleJSFile))
      .pipe(rename({ extname: '.min.js' }))
      .pipe(buffer())
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(uglify())
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest(jsDIST));
  });

  done();
}

/**
 *
 * Gulp Default Task
 *
 */
gulp.task('styles', styles);

gulp.task('js', js);

gulp.task('default', gulp.parallel(styles, js));

/**
 *
 * Gulp Watch Task
 *
 */
function watch_files(done) {
  gulp.watch(styleWatch, styles);
  gulp.watch(jsWatch, js);

  done();
}

gulp.task('watch', gulp.series(styles, js, watch_files));
