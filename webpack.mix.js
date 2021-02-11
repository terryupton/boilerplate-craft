const settings = require("./settings.json");
const mix = require('laravel-mix');
require('postcss-import');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
require('laravel-mix-versionhash');

// Set the public path to resolve any potential issues with version.
mix.setPublicPath(settings.paths.build.base);

mix.postCss('src/css/style.pcss', 'css', [
  require('tailwindcss'),
  require('autoprefixer')
]);

mix.js(settings.paths.src.js + 'index.js', settings.paths.build.js);
mix.extract();


mix.browserSync({
  proxy: settings.urls.local,
  port: 8080,
  files: [
    settings.paths.tailwind.config,
    settings.paths.build.css + '{*,**/*}.css',
    settings.paths.build.js + '{*,**/*}.js',
    settings.paths.templates.base + '**/*.{html,twig}',
  ]
});

//IMAGE and SVG MIN
mix.webpackConfig({
  plugins: [
    new CopyWebpackPlugin({
      patterns: [
        {from: settings.paths.src.svg, to: settings.paths.build.svg},
        {from: settings.paths.src.img, to: settings.paths.build.img}
      ],
    }),
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif|svg)$/i,
      svgo: {
        plugins: [
          {removeViewBox: false},
          {removeDimensions: true},
        ]
      },
      plugins:
          [
            imageminMozjpeg({
              quality: 80,
            })
          ]
    })
  ]
});

if (mix.inProduction()) {
  mix.versionHash();
  
  mix.webpackConfig({
    plugins: [
      new CleanWebpackPlugin({
        cleanOnceBeforeBuildPatterns: settings.paths.build.clean,
        dry: false,
      })
    ]
  });
}
