/*jshint node: true*/
module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json')
    });

    grunt.loadTasks('grunt/config');
    grunt.loadTasks('grunt/tasks');

    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
};
