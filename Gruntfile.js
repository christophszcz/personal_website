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
		}
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
};
