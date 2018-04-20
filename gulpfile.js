var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app/global.scss', 'public/css/app');
    mix.sass('app/homepage.scss', 'public/css/app');
    mix.sass('app/crm.scss', 'public/css/app');
    mix.sass('app/login.scss', 'public/css/app');
    mix.sass('app/admin/admin.scss', 'public/css/app/admin');
});

elixir(function(mix) {
    mix.webpack('app/global.js', 'public/js/app');
});