const mix = require('laravel-mix');

mix
  .js('./src/main.js', 'dist/wppc.bundle.js')
  .sass('./src/scss/main.scss', 'css/wppc.bundle.css')
  .setPublicPath('dist');