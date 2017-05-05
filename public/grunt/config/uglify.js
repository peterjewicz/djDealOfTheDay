/* jshint node: true */
/* jshint camelcase: false */
/* jscs:disable requireCamelCaseOrUpperCaseIdentifiers */
'use strict';
module.exports = function (grunt) {
    grunt.config('uglify', {
      dist: {
          files: {
            'templates/main/dist/js/site_scripts.min.js': ['templates/main/dist/js/site_scripts.js'],
            'templates/main/dist/js/vendor.min.js': ['templates/main/dist/js/vendor.js']
          }
        }
  });
};
