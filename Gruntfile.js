module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    connect: {
      server: {
        options: {
          port: 80
        }
      }
    },
    jade: {
      compile: {
        files: [
        {
          expand: true,
          cwd: 'production',
          src: '**/*.jade',
          dest: 'production',
          ext: '.html'
        }
        ],
      },
    },
    less: {
      compile: {
        files: [
        {
          expand: true,
          cwd: 'production',
          src: ['**/*.less','!**.elements.less'],
          dest: 'production',
          ext: '.css'
        }],
      },
    },
    watch: {
      html: {
        files: ['**/*.jade'],
        tasks: ['jade'],

      },
      styles: {
        files: ['**/*.less'],
        tasks: ['less'],
      },
      livereload: {
        cwd: 'production',
        options: {livereload:true},
        files: ["production/**/*.html", "production/**/*.css"]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jade');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-connect');

  grunt.registerTask('default', ['connect','watch']);
  grunt.registerTask('deploy', ['watch']);
};