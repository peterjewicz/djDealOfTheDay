/*jshint node: true */

'use strict';

module.exports = function (grunt) {
    grunt.config('copy', {
        dist: {
          expand: true,
          cwd: 'templates/main/libs/',
          src: [
            'site_scripts/*.js'
          ],
          flatten: 'true',
          dest: 'templates/main/dist/js/copy'
        },
        vendor:{
          expand: true,
          cwd: 'templates/main/libs/',
          src: [
            'vendor/**/*.min.js'
          ],
          flatten: 'true',
          dest: 'templates/main/dist/js/copy'
        }
    });
};
