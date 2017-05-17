/* jshint node: true */
'use strict';
module.exports = function (grunt) {
    grunt.config('watch', {
        styles: {
            files: ['scss/**/*.scss'],
            tasks: ['sass', 'autoprefixer'],
        },
        scripts: {
            files: ['templates/main/libs/site_scripts/**.js'],
            tasks: ['lint', 'copy', 'concat', 'uglify'],
        },
        widgets: {
            files: ['templates/widgets/**/*.js'],
            tasks: ['lint']
        }
    });
};
