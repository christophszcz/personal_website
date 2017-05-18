module.exports = function(grunt){
	grunt.initConfig({
	  concat: {
	    dist: {
	      src: ['js/scroll-finish.js', 'js/navbar-activation.js', 'js/introduction-text.js'],
	      dest: 'build/js/script.js',
	    },
	  },

	  watch: {
		  js: {
		    files: ['js/**/*.js'],
		    tasks: ['concat']
		  },
		},

		uglify: {
			options:{
				manage: false
			},
			my_target:{
				files: {
					'js/scripts.min.js' : ['build/js/script.js']
				}
			}
		},

		cssmin: {
		  options: {
		    mergeIntoShorthands: false,
		    roundingPrecision: -1
		  },
		  target: {
		    files: {
		      'css/style.min.css': ['css/style.css']
		    }
		  }
		}
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
};
