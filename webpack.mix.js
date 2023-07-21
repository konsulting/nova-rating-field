let mix = require('laravel-mix')

require("./nova.mix");

mix
  .setPublicPath('dist')
  .js('resources/js/rating.js', 'js')
  .vue({ version: 3 })
  .css('resources/css/rating.css', 'css')
  .nova('{{ name }}')
