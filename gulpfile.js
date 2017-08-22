//variables

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-ruby-sass');


//scripts task
gulp.task('scripts', function () {
    gulp.src('assets/js_src/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('assets/js_dest'));
});

//styles task
//uglifies
gulp.task('styles', function () {
    gulp.src('assets/css/style2.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css/'));
});

//watch task
gulp.task('watch', function () {
    gulp.watch('assets/js_src/**/*.js', ['scripts']);
});

//default
gulp.task('default', ['scripts', 'styles', 'watch']);
