module.exports = function(grunt){
	grunt.initConfig({
	  concat: {
	    dist: {
	      src: ['js/scroll-finish.js', 'js/navbar-activation.js', 'js/introduction-text.js'],
	      dest: 'build/js/script.js',
	    },
	  }
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
};
