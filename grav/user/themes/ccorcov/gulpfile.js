'use strict';

var gulp      = require('gulp'),
    concat    = require('gulp-concat'),
    util      = require('gulp-util'),
    watch     = require('gulp-watch'),
    uglify    = require('gulp-uglify'),
    rename    = require('gulp-rename'),
    sass      = require('gulp-sass'),
    uglifycss = require('gulp-uglifycss'),
    maps      = require('gulp-sourcemaps'),
    uncss     = require('gulp-uncss');

var log = util.log;

var scss_files = [
    './scss/template.scss'
];

var js_files = [
    './js/base.js',
    './js/directives/**/*.js',
    './js/modules/**/*.js',
    './js/glue.js'
];

gulp.task('compile-sass', function() {
    return gulp.src(scss_files)
        .pipe(maps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(concat('all.min.css'))

        .pipe(maps.write('./'))
        .pipe(gulp.dest('./compiled/css'));
});

gulp.task('watch', function() {


    gulp
        .watch('./scss/**/*.scss', ['compile-sass'])
        .on('change', logWatch)
        .on('error', logError);

    gulp
        .watch('./js/**/*.js', ['default'])
        .on('change', logWatch)
        .on('error', logError);

    function logWatch(event) {
        log('*** File ' + event.path + ' was ' + event.type + ', running tasks...');
    }

    function logError(error) {
        console.log(error.toString());

        this.emit('end');
    }

});

gulp.task('concatScripts', function() {
    return gulp.src(js_files)
        .pipe(maps.init())
        .pipe(concat('app.js'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('./compiled/js'));
});

gulp.task('minifyScripts', ['concatScripts'], function() {
    return gulp.src('./compiled/js/app.js')
        .pipe(maps.init())
        .pipe(uglify())
        .pipe(rename('app.min.js'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest('./compiled/js'));
});

gulp.task('uncss', function() {
    return gulp.src('./compiled/js/app.min.js')
        .pipe(uncss({
            html: ['http://example.com']
        }))
        .pipe(gulp.dest('./out'));
});



gulp.task('default', ['concatScripts', 'minifyScripts'], function() {
    console.log("This is the default task!");
});