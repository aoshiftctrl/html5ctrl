var gulp   = require('gulp'),
    sass   = require('gulp-sass'),
    rename = require('gulp-rename'),
    prefix = require('gulp-autoprefixer'),
    cssmin = require('gulp-cssmin'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    addsrc = require('gulp-add-src'),
    watch  = require('gulp-watch');

var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

gulp.task('sass', function(){
  gulp.src('./app/css/ui.sass')
      .pipe(sass().on('error', sass.logError))
      .pipe(prefix())
      .pipe(cssmin())
      .pipe(rename({suffix: '.min'}))
      .pipe(gulp.dest('./app/css/'));
});

gulp.task('js', function(){
  gulp.src('./app/js/app.js')
      .pipe(jshint())
      .pipe(addsrc('./app/js/*/*.js'))
      .pipe(concat('./app.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('./app/js/'));
});

gulp.task('build', ['js', 'sass'], function(done){
  browserSync.reload();
  done();
});

gulp.task('serve', ['js', 'sass'], function(){
  browserSync.init({
    // use MAMP as PHP-Server app (localhost:8888)
    // replace this proxy with your directory name
    proxy: "localhost:8888/html5ctrl",
  });

  gulp.watch('./app/css/ui.sass', ['build']);
  gulp.watch('./app/js/app.js', ['build']);
  gulp.watch('./**/*.php', ['build']);
});

gulp.task('default', ['serve']);
