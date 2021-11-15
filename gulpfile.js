const gulp = require('gulp'),
    compass = require('gulp-compass'),
    cleanCSS = require('gulp-clean-css'),
    gcmq = require('gulp-group-css-media-queries'),
    rename = require('gulp-rename'),
    minify = require("gulp-minify");

gulp.task('compile-scss', function () {
    return gulp.src([
        'public/assets/sass/*.scss',
    ])

        .pipe(compass({
            css: 'public/assets/css',
            sass: 'public/assets/sass',
            require: ['susy']
        }))
        .pipe(gcmq())
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/assets/css'));
});
gulp.task('compile-js', function () {
    return gulp.src([
        'public/assets/src_js/*.js',
    ])

        .pipe(minify({noSource: true}))
        .pipe(gulp.dest('public/assets/js'));
});

// Default task
gulp.task('styles', gulp.parallel('compile-scss'));
gulp.task('javascript', gulp.parallel('compile-js'));
gulp.task('default', gulp.parallel('styles', 'javascript'));

gulp.task('watch', function () {
    // Watch .scss files
    gulp.watch('public/assets/sass/*.scss', gulp.parallel('compile-scss'));
    gulp.watch('public/assets/src_js/*.js', gulp.parallel('compile-js'));
});
