var gulp = require('gulp');
var elixir = require('laravel-elixir');
var browserSync = require('browser-sync').create();
//var coffee = require('gulp-coffee');

require('laravel-elixir-stylus');
require('laravel-elixir-jade');


elixir(function(mix) {
  mix.stylus('app.styl');
  mix.jade({
    search: '**/*.jade',
    src: '/jade/'
  });
  mix.browserSync({
    proxy: "192.168.33.19"
  });
});

gulp.task('material', function() {
  gulp.src(['node_modules/material-design-lite/material.js'])
    .pipe(gulp.dest('public/js'));

  return gulp.src(['node_modules/material-design-lite/material.css'])
    .pipe(gulp.dest('public/css'));
});


//gulp.task('coffee', function() {
//  return gulp.src(['src/*.coffee']) // srcを指定
//    .pipe(coffee())                 // 指定したファイルをJSにコンパイル
//    .pipe(gulp.dest('dest'));       // dest先に出力する
//});
