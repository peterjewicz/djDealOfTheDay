/*jshint node: true */
'use strict';
module.exports = function (grunt) {
    grunt.config('jshint', {
        all: ['Gruntfile.js', 'templates/main/libs/site_scripts/**.js', 'templates/widgets/**/*.js']
    });
};
