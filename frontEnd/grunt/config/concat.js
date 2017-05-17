/* jshint node: true */
/* jshint camelcase: false */
/* jscs:disable requireCamelCaseOrUpperCaseIdentifiers */
'use strict';
module.exports = function (grunt) {
    grunt.config('concat', {
      options: {
        separator: ';',
      },
      dist: {
        files: {
          // Compile all used Vendor JS files into vendor.js
          'templates/main/dist/js/vendor.js': [
            'templates/main/libs/vendor/modernizr/modernizr.js',
            'templates/main/libs/vendor/fastclick/lib/fastclick.js',
            'templates/main/libs/vendor/jquery-placeholder/jquery.placeholder.js',
            'templates/main/libs/vendor/foundation/js/foundation.js',
            'templates/main/libs/vendor/foundation/js/foundation/abide.js',
            'templates/main/libs/vendor/foundation/js/foundation/dropdown.js',
            'templates/main/libs/vendor/foundation/js/foundation/equalizer.js',
            'templates/main/libs/vendor/foundation/js/foundation/interchange.js',
            'templates/main/libs/vendor/slick-carousel/slick/slick.js',
            'templates/main/libs/vendor/gsap/src/uncompressed/TweenMax.js',
            'templates/main/libs/vendor/gsap/src/uncompressed/TimelineMax.js',
            'templates/main/libs/vendor/gsap/src/uncompressed/plugins/ScrollToPlugin.js',
            'templates/main/libs/vendor/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
            'templates/main/libs/vendor/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'
          ],
          // Compile all custom site scripts into single site_scripts.js
          'templates/main/dist/js/site_scripts.js': ['templates/main/libs/site_scripts/*.js']
        }
      }
  });
};
