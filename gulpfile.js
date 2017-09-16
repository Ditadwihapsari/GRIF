var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    del = require('del');

var cssSrcPath = 'resources/assets/sass',
    cssSrcName = '/main.scss',
    cssDestPath = 'public/css/minified',
    jsSrcPath = 'resources/assets/sass/js/**/*.js',
    jsDestPath = 'public/js/minified',
    imageSrcPath = 'source/images/**/*',
    imageDestPath = 'views/assets/images';

gulp.task('css', function() {
  return gulp.src(cssSrcPath+cssSrcName)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(cssDestPath));
});

gulp.task('js', function() {
  return gulp.src(jsSrcPath)
    .pipe(concat('app.min.js'))
    .pipe(gulp.dest(jsDestPath));
});

gulp.task('js:prod', function() {
  return gulp.src(jsSrcPath)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(jsDestPath));
});

gulp.task('images', function() {
  return gulp.src(imageSrcPath)
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest(imageDestPath));
});

gulp.task('clean', function() {
    return del([cssDestPath + '/**/*', jsDestPath + '/**/*', imageDestPath + '/**/*']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('css', 'js', 'images');
});

gulp.task('watch', function() {

  gulp.watch(cssSrcPath + '/**/*.scss', ['css']);

  gulp.watch(jsSrcPath, ['js']);

  gulp.watch(imageSrcPath, ['images']);

});
