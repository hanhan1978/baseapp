var gulp = require('gulp');
var elixir = require('laravel-elixir');
//var coffee = require('gulp-coffee');

require('laravel-elixir-stylus');


elixir(function(mix) {
   mix.stylus('app.styl');
});

gulp.task('material', function() {
  gulp.src(['node_modules/material-design-lite/material.js'])
    .pipe(gulp.dest('public/js'));

  return gulp.src(['node_modules/material-design-lite/material.css'])
    .pipe(gulp.dest('public/css'));
});

// default タスクの時にcoffeeタスクを実行する
gulp.task('default', ['material'], function() {
  console.log("done");
});

//gulp.task('coffee', function() {
//  return gulp.src(['src/*.coffee']) // srcを指定
//    .pipe(coffee())                 // 指定したファイルをJSにコンパイル
//    .pipe(gulp.dest('dest'));       // dest先に出力する
//});
