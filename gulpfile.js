var gulp = require('gulp');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var reload = browserSync.reload;




gulp.task('default',['css']);


gulp.task('css', function() {
  return gulp.src('public/assets/css/base/*.css')
  .pipe(concat('herencia.css'))
  .pipe(gulp.dest('public/assets/css/dist'));

});


