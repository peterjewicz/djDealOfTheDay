/* jshint node: true */
'use strict';
module.exports = function (grunt) {
    grunt.config('browserSync', {
      files : [
      'templates/main/dist/css/*.css',
      'templates/main/dist/css/**/*.css',
      'templates/main/dist/js/*.js',
      'templates/main/*.php',
      'templates/main/pages/*.php',
      'templates/main/**/*.php',
      'templates/widgets/**/*.php',
      'templates/widgets/**/*.js'
      ],
      options: {
        watchTask: true,
        proxy: 'localhost',
        open: false,
        notify: {
          styles: {
            top: 'auto',
            bottom: '0'
          }
        }
      }
    });
};
