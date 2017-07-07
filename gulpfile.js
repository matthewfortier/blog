// load elixir and .env reader
var elixir  = require('laravel-elixir'),
    env     = require('dotenv').load();

// paths
var path = {
    node:       'node_modules/'
};

// config
elixir.config.sourcemaps = process.env.APP_DEBUG;

elixir(function(mix) {

    // browserSync starter. Start with by running:
    // gulp && gulp watch | php artisan serve --host=0.0.0.0
    mix.browserSync({
        proxy:  'localhost:8000',
        notify: false
    });

    elixir(function(mix) {
        mix.copy(
            'node_modules/typed.js/lib/typed.min.js',
            'resources/assets/js'
        );

        mix.sass([
            'app.sass'
        ], 'public/css')
        .scripts([
            'typed.min.js',
            'public/js'
        ]);
    });

});