const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var theme = 'default';

elixir.config.assetsDir = "resources/views/themes/" + theme + "/assets/";
elixir.config.registerWatcher("default", "resources/views/themes/" + theme + "/assets/**");

elixir(function(mix) {
   mix.less([ 'style.less'], 'resources/views/themes/' + theme + '/assets/css/style.css');
   mix.stylesIn('', './public/assets/' + theme + '/css/style.css');
   mix.scripts(['jquery.min.js', 'bootstrap.min.js', 'owl.carousel.min.js', 'app.js'], 'public/assets/' + theme + '/js/app.js');
   mix.copy(
            'other',
            'public/assets/' + theme
        );
});