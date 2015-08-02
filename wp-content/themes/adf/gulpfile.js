/*
  Based on Nathan Searles Day One Gulp Starter Kit - https://github.com/nathansearles/Day-One-Gulp-Starter-Kit
*/

/* ====================================
 * Define paths
 * ==================================== */
var source = 'library';
var build = 'build';


/* ====================================
 * Load required plug-ins
 * ==================================== */
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var runSequence = require('run-sequence');

var plumberConfig = {errorHandler: $.notify.onError("Error: <%= error.message %>")};


/* ====================================
 * Styles
 * ==================================== */
gulp.task('styles', function () {
  return gulp.src(source + '/scss/**/components.scss')
    .pipe($.plumber(plumberConfig))
    .pipe($.rubySass())
    .pipe($.autoprefixer((["last 2  version", "> 1%", "ie 8", "ie 7"], { cascade: true })))
    .pipe($.minifyCss())
    .pipe($.rename({
      basename: 'styles',
      suffix: '.min'
    }))
    .pipe(gulp.dest(source + '/styles/'));
});


/* ====================================
 * Scripts
 * ==================================== */
 gulp.task('jshint', function() {
  return gulp.src(source + '/scripts/main.js')
    .pipe($.plumber(plumberConfig))
    .pipe($.jshint())
    .pipe($.jshint.reporter('default'));
});

gulp.task('scripts', function () {
  return gulp.src([source + '/scripts/plugins.js', source + '/scripts/main.js'])
    .pipe($.plumber(plumberConfig))
    .pipe($.concat('scripts.js'))
    .pipe($.uglify())
    .pipe($.rename({suffix: '.min'}))
    .pipe(gulp.dest(source + '/scripts'));
});


/* ====================================
 * Images
 * ==================================== */
gulp.task('images', function() {
  return gulp.src([source + '/img/**/*'])
    .pipe($.plumber(plumberConfig))
    .pipe($.imagemin({
      optimizationLevel: 3,
      progressive: true,
      interlaced: true,
      svgoPlugins: [
        { removeViewBox: false },
        { removeUselessStrokeAndFill: false }
      ],
    }))
    .pipe(gulp.dest(source + '/img'));
});



/* ====================================
 * Gulp tasks
 * ==================================== */

// For local development
gulp.task('default', function(){
  runSequence(
    ['images', 'styles', 'scripts'],
    ['watch']
  );
});

// For staging/production deployment



/* ====================================
 * Watch
 * ==================================== */
gulp.task('watch', function() {
  gulp.watch(source + '/scss/**/*.scss', ['styles']);

  gulp.watch([source + '/scripts/**/*.js', '!' + source + '/scripts/scripts.min.js'], ['jshint', 'scripts']);

  gulp.watch(source + '/img/**/*', ['images']);
});
