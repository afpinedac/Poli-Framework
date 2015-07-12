var gulp = require('gulp'),
        connect = require('gulp-connect-php'),
        browserSync = require('browser-sync');

gulp.task('php-sync', function () {
  connect.server({}, function () {
    browserSync({
      proxy: 'localhost:1234'
    });
  });
  gulp.watch('./views/**/*.tpl').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('default', function () {
  gulp.run('php-sync');
//  gulp.watch('./public/js/**/*.js', ['minify-js']);
 // gulp.watch('./public/css/**/*.css', ['minify-css']);
});


