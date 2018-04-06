var async = require('async');
var gulp = require('gulp');
var iconfont = require('gulp-iconfont');
var consolidate = require('gulp-consolidate');

gulp.task('icon', function(done){
  var iconStream = gulp.src(['public/svg/*.svg'])
    .pipe(iconfont({
            fontName: 'zalo-font',
            formats: [
                'ttf',
                'eot',
                'woff',
                'woff2',
                'svg'
            ],
            normalize: true,
            fontHeight: 1001
        }));

  async.parallel([
    function handleGlyphs (cb) {
      iconStream.on('glyphs', function(glyphs, options) {
        gulp.src('public/css/font.scss')
          .pipe(consolidate('lodash', {
            glyphs: glyphs,
            fontName: 'zalo-font',
            fontPath: '../fonts/',
            className: 'fa'
          }))
          .pipe(gulp.dest('public/css'))
          .on('finish', cb);
      });
    },
    function handleFonts (cb) {
      iconStream
        .pipe(gulp.dest('public/fonts/'))
        .on('finish', cb);
    }
  ], done);
});

gulp.task('default', ['icon']);