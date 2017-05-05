/* jshint node: true */
/* jshint camelcase: false */
/* jscs:disable requireCamelCaseOrUpperCaseIdentifiers */
'use strict';
module.exports = function (grunt) {
    grunt.config('autoprefixer', {
      options: {
          browsers: ['last 2 versions', 'ie 9']
        },
      dist: {
        files: {
          'css/site.css': 'css/site.css'
        }
      }
  });
};
