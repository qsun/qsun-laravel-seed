module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        copy: {
            jQuery: {
                src: "app/assets/bower_components/jQuery/dist/jquery.min.js",
                dest: "public/assets/jquery.min.js"
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['src/**/*.js'],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dist: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            }
        },
        qunit: {
            files: ['test/**/*.html']
        },
        jshint: {
            files: ['app/assets/**/*.js'],
            options: {
                // options here to override JSHint defaults
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },
        less: {
            dev: {
                options: {
                    sourceMap: true,
                    sourceMapFilename: "ksajfivxkdfjiv.map",
                    paths: ["app/assets/"],
                },
                files: {
                    "public/assets/application.css": "app/assets/less/application.less"
                }
            }
        },
        watch: {
            jQuery: {
                files: ['app/assets/bower_components/jQuery/**/*.js'],
                tasks: ['copy'],
            },
            less: {
                files: ['app/assets/**/*.less'],
                tasks: ['less'],
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('default', ['copy', 'less']);
};
