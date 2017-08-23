//variables

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-ruby-sass'),
    plumber = require('gulp-plumber');


//scripts task
//uglify
gulp.task('scripts', function () {
    gulp.src('assets/js_src/**/*.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('assets/js_dest'));
});

//compass task
gulp.task('sass', function () {
    return sass('assets/scss/*.scss', {style: 'compressed'})
        .on('error', sass.logError)
        .pipe(plumber())
        .pipe(gulp.dest('assets/css'));
});﻿



//watch task
gulp.task('watch', function () {
    gulp.watch('assets/js_src/**/*.js', ['scripts']);
    gulp.watch('assets/scss/*.scss', ['sass']);
});

//default
gulp.task('default', ['scripts', 'sass', 'watch']);
