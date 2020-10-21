const settings = require("./settings.json");
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
require("laravel-mix-purgecss");
require('laravel-mix-versionhash');


// Set the public path to resolve any potential issues with version.
mix
    .setPublicPath(settings.paths.build.base)
    .sass(settings.paths.src.sass + 'style.scss', settings.paths.build.css)
    
    // JS to Concatenate and Minify JS files using Webpack bundler.
    .js(settings.paths.src.js + 'index.js', settings.paths.build.js)
    
    // Extract splits the JS into Vendor, Manfiest and Index
    .extract()
    // .extract([
    //     'lazysizes',
    //     'picturefill',
    //     'jquery'
    // ])
    
    // Scripts Minifies Scripts - Use for Legacy Projects
    // .scripts([settings.paths.src.js + 'classie.js'], settings.paths.build.js + 'classie.js')
    
    // .autoload({
    //     jQuery: 'jquery',
    //     $: 'jquery',
    //     jquery: 'jquery',
    // })
    
    
    .options({
      processCssUrls: false,
      postCss: [
        tailwindcss(settings.paths.tailwind.config),
        require('autoprefixer')({
          grid: "autoplace"
        }),
        require('postcss-pxtorem')({
          propList: ['*'],
          // propList: ['font', 'font-size', 'line-height', 'letter-spacing', 'width', 'height', 'max-width', 'min-width', 'max-height', 'min-height', 'margin-top', 'margin-left', 'margin-bottom', 'margin-right', 'padding-top', 'padding-left', 'padding-bottom', 'padding-right'],
        }),
        require('postcss-sorting')({
          "properties-order": "alphabetical"
        })
      ],
    })
    
    .browserSync({
      proxy: settings.urls.local,
      port: 8080,
      files: [
        settings.paths.tailwind.config,
        settings.paths.build.css + '{*,**/*}.css',
        settings.paths.build.js + '{*,**/*}.js',
        settings.paths.templates.base + '**/*.{html,twig}',
      ]
    })
    
    //IMAGE and SVG MIN
    .webpackConfig({
      plugins: [
        new CopyWebpackPlugin([
          {from: settings.paths.src.svg, to: settings.paths.build.svg},
          {from: settings.paths.src.img, to: settings.paths.build.img}
          // {from: 'src/img', to: 'web/assets/img'}
        ]),
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
  mix
      .versionHash()
      
      //CLEAN HASHED VERSIONS
      .webpackConfig({
        plugins: [
          new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: settings.paths.build.clean,
            dry: false,
          })
        ]
      });
}
