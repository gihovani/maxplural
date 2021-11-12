var gulp = require('gulp'),
    compass = require('gulp-compass'),
    cleanCSS = require('gulp-clean-css'),
    gcmq = require('gulp-group-css-media-queries'),
    rename = require('gulp-rename');

// function defaultTask(cb) {
//     // place code for your default task here
//     cb();
// }

gulp.task('compile-scss', function () {
    return gulp.src([
        'public/assets/sass/**/*.scss',
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

// Default task
gulp.task('styles', gulp.parallel('compile-scss'));
gulp.task('default', gulp.parallel('styles'));
// exports.default = defaultTask