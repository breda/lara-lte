var elixir = require('laravel-elixir');

elixir(function(mix) {

   // ------------------------------------------------------------
   // VENDORS
   // ------------------------------------------------------------
   mix.less(['bootstrap/bootstrap.less'], 'public/css/bootstrap.css');
   mix.less(['admin-lte/AdminLTE.less'], 'public/css/AdminLTE.css');


   // ------------------------------------------------------------
   // SCRIPTS
   // ------------------------------------------------------------
   mix.scripts(['admin/admin-lte.js', 'admin/main.js'], 'public/js/admin-main.js');
   mix.scripts(['site/main.js'], 'public/js/main.js');


   // ------------------------------------------------------------
   // STYLES
   // ------------------------------------------------------------
   mix.sass(['admin/app-rtl.scss', 'admin/app.scss'], 'public/css/admin.css');
   mix.sass(['site/main.scss'], 'public/css/main.css');

});
