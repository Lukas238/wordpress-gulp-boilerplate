module.exports = function () {  
	
	var theme_name = 'wordpress-gulp-boilerplate'; //Wordpress theme name
    
	var config = {
		src:	'src', //Sources
		dev:	'dev/wp-content/themes/' + theme_name,	//Develop
		dist:	'dist/' + theme_name,	//Distribution
		comp:	'components',	//Components develop
		directory_listing: false
	};
	
	config.wf = config.dev; //Default Working Folder

	config.paths = {
		src_css: 			config.src + '/css',
		src_scss: 			config.src + '/scss',
		src_js: 				config.src + '/js',
		src_img:			config.src + '/images',
		src_fonts:			config.src + '/fonts',
		src_vendors: 		config.src + '/vendors',
		
		dest_css: 			'/css',
		dest_js: 			'/js',
		dest_img:			'/images',
		dest_fonts:		'/fonts'
	};
	
	config.paths.sass_includes = [ 
		config.paths.src_vendors + '/bootstrap-sass/assets/stylesheets/'
	];
	
	config.files = {
		img: [
			config.paths.src_img +'/**/*',
			'!' + config.paths.src_img +'/**/*.psd'
		],
		css: [
			config.paths.src_css +'/*.css'
		],
		js: [
			config.paths.src_js + '/*.js',
			'!' + config.paths.src_js + '/scripts.js'
		],
		fonts: [
			config.paths.src_fonts + '/*'
		],
		misc: [
			config.src + '/style.css',
			config.src + '/rtl.css',
			config.src + '/screenshot.png'
		],
		vendors: {
			img: [
				config.paths.src_vendors + '/slick.js/slick/ajax-loader.gif'
			],
			css: [
				config.paths.src_vendors + '/slick.js/slick/slick.css',
				config.paths.src_vendors+ '/slick.js/slick/slick-theme.css',
				config.paths.src_vendors + '/bootstrap-select/dist/css/bootstrap-select.css'
			],
			js: [
				config.paths.src_vendors + '/jquery/dist/jquery.js',
				config.paths.src_vendors + '/slick.js/slick/slick.js',
				config.paths.src_vendors + '/better-input-file/dist/betterInputFileButton.js',
				config.paths.src_vendors + '/bootstrap-select/dist/js/bootstrap-select.js'
			],
			fonts: [
				config.paths.src_vendors + '/bootstrap-sass/assets/fonts/bootstrap/*',
				config.paths.src_vendors + '/slick.js/slick/fonts/*'
			],
			standalone_img: [],
			standalone_css: [],
			standalone_js: [
				config.paths.src_vendors + '/html5shiv/dist/html5shiv.min.js'
			]
		}
	};
	
    return config;
};




