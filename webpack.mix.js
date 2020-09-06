let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | npm run dev      and     npm run production
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
/*
mix.combine([
    'resources/assets/js/jsindexii/jquery-3.2.1.min.js',
    'resources/assets/js/jsindexii/animsition.min.js',
    'resources/assets/js/jsindexii/popper.js',
    'resources/assets/js/jsindexii/bootstrap.min.js',
    'resources/assets/js/jsindexii/select2.min.js',
    'resources/assets/js/jsindexii/script1.js',
    'resources/assets/js/jsindexii/slick.min.js',
    'resources/assets/js/jsindexii/slick-custom.js',
    'resources/assets/js/jsindexii/countdowntime.js',
    'resources/assets/js/jsindexii/lightbox.min.js',
    'resources/assets/js/jsindexii/sweetalert.min.js',
    'resources/assets/js/jsindexii/script2.js',
    'resources/assets/js/jsindexii/parallax100.js',
    'resources/assets/js/jsindexii/script3.js',
    'resources/assets/js/jsindexii/main.js',
    'resources/assets/js/jsindexii/script4.js',
],'public/indexii/mainii/index.js');
*/

/*
*
    ----list js page product list----
	jquery-3.2.1.min.js
	animsition.min.js
 	popper.js
	bootstrap.min.js
 	select2.min.js
 	s1.js
 	moment.min.js
	daterangepicker.js
 	slick.min.js
	slick-custom.js
 	sweetalert.min.js
 	s2.js
	nouislider.min.js
	s3.js
    main.js
    s4.js
    ----list js page product list----

/*
mix.combine([
			'resources/assets/css/indexcss/bootstrap.min.css',
			'resources/assets/css/indexcss/font-awesome.min.css',
			'resources/assets/css/indexcss/themify-icons.css',
			'resources/assets/css/indexcss/icon-font.min.css',
			'resources/assets/css/indexcss/style.css',
			'resources/assets/css/indexcss/animate.css',
			'resources/assets/css/indexcss/hamburgers.css',
			'resources/assets/css/indexcss/animsition.min.css',
			'resources/assets/css/indexcss/select2.min.css',
			'resources/assets/css/indexcss/slick.css',
			'resources/assets/css/indexcss/lightbox.min.css',
			'resources/assets/css/indexcss/util-rtl.css',
		    'resources/assets/css/indexcss/main.css',
],'public/indexii/mainii/index-product-compress.css');

*/
mix.combine([
    'resources/assets/js/jsproductlist/index.js',
    'resources/assets/js/jsproductlist/s1.js',
    'resources/assets/js/jsproductlist/moment.min.js',
    'resources/assets/js/jsproductlist/daterangepicker.js',
    'resources/assets/js/jsproductlist/s2.js',
    'resources/assets/js/jsproductlist/nouislider.min.js',
    'resources/assets/js/jsproductlist/s3.js',
    'resources/assets/js/jsproductlist/s4.js',
],'public/indexii/mainii/index_product_list_new.js');