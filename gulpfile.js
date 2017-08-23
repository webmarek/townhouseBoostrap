//variables

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-ruby-sass'),
    plumber = require('gulp-plumber'),
    imagemin = require('gulp-imagemin'),
    prefix = require('gulp-autoprefixer');


//scripts task
//uglify
gulp.task('scripts', function () {
    gulp.src('assets/js_src/**/*.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('assets/js_dest'))
    /*.pipe(reload({stream: true}))*/;
});

//compass task
gulp.task('sass', function () {
    return sass('assets/scss/*.scss', {style: 'compressed'})
        .on('error', sass.logError)
        .pipe(plumber())
        .pipe(prefix('last 2 versions'))
        .pipe(gulp.dest('assets/css'))
        /*.pipe(reload({stream: true}))*/;
});﻿



//image task
//compress
gulp.task('image', function () {
    gulp.src('assets/img_src/**')
        .pipe(imagemin())
        .pipe(gulp.dest('assets/img_dist'));
});


//watch task
gulp.task('watch', function () {
    gulp.watch('assets/js_src/**/*.js', ['scripts']);
    gulp.watch('assets/scss/*.scss', ['sass']);
});

//default
gulp.task('default', ['scripts', 'sass', /*'browser-sync',*/'watch']);
