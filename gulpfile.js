<<<<<<< HEAD
'use strict';

var gulp = require('gulp');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('bundle', function() {
	return browserify({
		entries: ['public/src/js/app.js'],
		debug: true
	}).bundle()
	.on('error', function(error) {
    console.log(error.toString());
    this.emit('end');
  })
	.pipe(source('bundle.js'))
	.pipe(buffer())
	.pipe(gulp.dest('public/js/'));
});

gulp.task('sass', function () {
  return gulp.src('./public/src/scss/app.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('watch', function() {
	gulp.watch('public/src/js/**/*.js', ['bundle']);
	gulp.watch('public/src/scss/**/*.scss', ['sass']);
});

gulp.task('build', ['bundle', 'sass']);
gulp.task('default', ['build', 'watch']);

=======
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
