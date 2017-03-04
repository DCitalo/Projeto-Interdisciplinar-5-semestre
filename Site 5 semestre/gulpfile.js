var gulp = require('gulp');
var bs = require('browser-sync').create(); // create a browser sync instance.

gulp.task('browser-sync', function() {
    bs.init({
        server: {
            baseDir: "C:\Users\Ítalo\Documents\facul\5º Semestre\Clarim Odium"
        }
    });
});