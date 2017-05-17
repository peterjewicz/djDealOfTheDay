/*jshint node: true */
'use strict';
module.exports = function (grunt) {
    grunt.registerTask('build', [
        'sass',
        'autoprefixer',
        'lint',
        'watch'
    ]);
};
