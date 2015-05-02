module.exports = function(grunt) {

	// To support SASS/SCSS or Stylus, just install
	// the appropriate grunt package and it will be automatically included
	// in the build process, Sass is included by default:
	//
	// * for SASS/SCSS support, run `npm install --save-dev grunt-contrib-sass`
	// * for Stylus/Nib support, `npm install --save-dev grunt-contrib-stylus`

	var npmDependencies = require('./package.json').devDependencies;
	var hasSass = npmDependencies['grunt-sass'] !== undefined;
	var environment = "james";

	if (environment == "james") {
		grunt.initConfig({

			path: {
				assets: 'assets',
				src: 'src',
				dist: 'dist',
				sass: '<%= path.assets %>/css',
				js: '<%= path.assets %>/js',
				images: '<%= path.assets %>/images',
				fonts: '<%= path.assets %>/fonts',
			},

			// Watches for changes and runs tasks
			watch : {
				sass : {
					files : ['<%= path.sass %>/*.scss', '<%= path.sass %>/**/*.scss'],
					tasks : (hasSass) ? ['sass:dev', 'autoprefixer', 'cssmin'] : null,
					options : {
						livereload : true,
						sourceMap : true
					}
				},
				js : {
					files : ['assets/js/**/*.js'],
					tasks : ['jshint', 'uglicat'],
					options : {
						livereload : true
					}
				},
				php : {
					files : ['**/*.php'],
					options : {
						livereload : true
					}
				}
			},

			browserSync: {
        dev: {
          bsFiles: {
            src : ['dist/css/*.css', 'dist/js/*.js']
          },
          options: {
            proxy: "jrbd.dev",
            watchTask: true
          }
        }
      },

			// JsHint your javascript
			jshint : {
				all : ['js/*.js', '!js/modernizr.js', '!js/*.min.js', '!js/vendor/**/*.js'],
				options : {
					browser: true,
					curly: false,
					eqeqeq: false,
					eqnull: true,
					expr: true,
					immed: true,
					newcap: true,
					noarg: true,
					smarttabs: true,
					sub: true,
					undef: false
				}
			},

			// Dev and production build for sass
			sass : {
				production : {
					files : [
						{
							src : ['**/*.scss', '!**/_*.scss'],
							cwd : 'assets/css',
							dest : 'dist/css',
							ext : '.css',
							expand : true
						}
					],
					options : {
						style : 'compressed'
					}
				},
				dev : {
					files : [
						{
							src : ['**/*.scss', '!**/_*.scss'],
							cwd : 'assets/css',
							dest : 'dist/css',
							ext : '.css',
							expand : true
						}
					],
					options : {
						style : 'expanded'
					}
				}
			},

			// Image min
			imagemin : {
				production : {
					files : [
						{
							expand: true,
							cwd: 'assets/images',
							src: '**/*.{png,jpg,jpeg}',
							dest: 'dist/images'
						}
					]
				}
			},

			// SVG min
			svgmin: {
				options: {
					plugins: [{
						removeViewBox: false,
						collapseGroups: false
					}, {
						removeUnknownsAndDefaults: false
					}]
				},
				dist: {
					files: [{
						expand: true,
						cwd: '<%= path.images %>',
						src: ['*.svg'],
						dest: '<%= path.dist %>/images',
						ext: '.svg'
					}]
				}
			},

			grunticon: {
				icons: {
					files: [{
						expand: true,
						cwd: '<%= path.images %>',
						src : ['*.svg'],
						dest: '<%= path.dist %>/images'
					}],
					options: {
						cssprefix: '.icon--'
					}
				}
			},

			// Minify JS
			uglify: {
				js: {
					files: [
					{
						expand:true,
						cwd: 'assets/js',
						src: ['**/*.js'],
						dest: 'dist/js'
					}]
				}
			},

			// Concat JS
			// Exclude the global file, we load this individually after the scripts file
			concat: {
				dist: {
					src: ['dist/js/*.js', '!dist/js/global.js'],
					dest: 'dist/js/scripts.js',
				}
			},

			// Autoprefixer
			autoprefixer: {
				single_file: {
					flatten : true,
					src: 'dist/css/style.css',
					dest: 'dist/css/style.css'
				}
			},

			cssmin: {
			  options: {
			    shorthandCompacting: false,
			    roundingPrecision: -1
			  },
			  target: {
			    files: {
			      'dist/css/style.css': ['dist/css/style.css']
			    }
			  }
			},

			// Modernizr build
			modernizr: {

			    dist: {
			        // [REQUIRED] Path to the build you're using for development.
			        "devFile" : "bower_components/modernizr/modernizr.js",

			        // Path to save out the built file.
			        "outputFile" : "assets/js/modernizr-custom.js",

			        // Based on default settings on http://modernizr.com/download/
			        "extra" : {
			            "shiv" : true,
			            "printshiv" : false,
			            "load" : true,
			            "mq" : true,
			            "cssclasses" : true
			        },

			        // Based on default settings on http://modernizr.com/download/
			        "extensibility" : {
			            "addtest" : false,
			            "prefixed" : false,
			            "teststyles" : false,
			            "testprops" : false,
			            "testallprops" : false,
			            "hasevents" : false,
			            "prefixes" : false,
			            "domprefixes" : false,
			            "cssclassprefix": ""
			        },

			        // By default, source is uglified before saving
			        "uglify" : true,

			        // Define any tests you want to implicitly include.
			        "tests" : [],

			        // By default, this task will crawl your project for references to Modernizr tests.
			        // Set to false to disable.
			        "parseFiles" : true,

			        // When parseFiles = true, this task will crawl all *.js, *.css, *.scss and *.sass files,
			        // except files that are in node_modules/.
			        // You can override this by defining a "files" array below.
			        // "files" : {
			            // "src": []
			        // },

			        // This handler will be passed an array of all the test names passed to the Modernizr API, and will run after the API call has returned
			        // "handler": function (tests) {},

			        // When parseFiles = true, matchCommunityTests = true will attempt to
			        // match user-contributed tests.
			        "matchCommunityTests" : false,

			        // Have custom Modernizr tests? Add paths to their location here.
			        "customTests" : []
			    }
			},

			// Move bower components to desired directories
			bowercopy: {
			  options: {
			    srcPrefix: 'bower_components'
			  },
			  scripts: {
			    options: {
			      destPrefix: 'assets'
			    },
			    files: {
			      'js/modernizr.js': 'modernizr/modernizr.js',
			      'css/compass': 'compass-mixins/lib'
			    }
			  }
			}

		});

		grunt.registerTask('steve', [
  		'browserSync',
  		'watch'
  	]);

		// Uglify and concat
		grunt.registerTask("uglicat", ["uglify", "concat"])

		// Default task
		grunt.registerTask('default', ['watch']);

		// Build task
		grunt.registerTask('build', function() {
			var arr = ['jshint'];

			if (hasSass) {
				arr.push('sass:production');
			}

			if (hasStylus) {
				arr.push('stylus:production');
			}

			arr.push('autoprefixer', 'cssmin', 'imagemin:production', 'svgmin:production', 'requirejs:production', 'uglify', 'concat', 'modernizr:dist');

			return arr;
		});

		// Template Setup Task
		grunt.registerTask('setup', function() {
			var arr = [];

			if (hasSass) {
				arr.push['sass:dev'];
			}

			if (hasStylus) {
				arr.push('stylus:dev');
			}

			arr.push('bower-install');
		});


		// Load up tasks
		grunt.loadNpmTasks('grunt-sass');
		grunt.loadNpmTasks('grunt-contrib-cssmin');
		grunt.loadNpmTasks('grunt-contrib-jshint');
		grunt.loadNpmTasks('grunt-contrib-watch');
		grunt.loadNpmTasks('grunt-contrib-uglify');
		grunt.loadNpmTasks('grunt-contrib-concat');
		grunt.loadNpmTasks('grunt-contrib-imagemin');
		grunt.loadNpmTasks('grunt-svgmin');
		grunt.loadNpmTasks('grunt-autoprefixer');
		grunt.loadNpmTasks("grunt-modernizr");
		grunt.loadNpmTasks('grunt-bowercopy');
		grunt.loadNpmTasks('grunt-grunticon');
		grunt.loadNpmTasks('grunt-browser-sync');

		// Run bower install
		grunt.registerTask('bower-install', function() {
			var done = this.async();
			var bower = require('bower').commands;
			bower.install().on('end', function(data) {
				done();
			}).on('data', function(data) {
				console.log(data);
			}).on('error', function(err) {
				console.error(err);
				done();
			});
		});

	}

	else if (environment == "steve") {

	}

};