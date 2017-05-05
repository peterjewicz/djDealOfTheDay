/* jshint node: true */
'use strict';
module.exports = function (grunt) {
    grunt.config('sass', {
        options: {
          sourceMap: true
        },
        dist: {
          options: {
            outputStyle: 'compact'
          },
          files: {
            'css/main.css': 'scss/main.scss'
          }
        },
        widgets: {
          options: {
            outputStyle: 'compact'
          },
          files: {

          }
        }
    });
};
