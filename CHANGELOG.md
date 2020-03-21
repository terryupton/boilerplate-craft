# Changelog
All notable changes to this project will be documented in this file.

## [2.0.1] - 2020-03-21

### Added
- Added TailwindUI
  -@tailwindcss/ui npm Package
  -purgeCSS defaultExtractor update
  -tailwind.config update


### Changed
- `readme` 
    - to markdown. 
    -added and updated todo's.
 

## [2.0.0] - 2020-03-21
### Added
- `.browserlistrc` to configure browser support for autoprefixer and babel
- `.stylelint` for linting css and sass
- `webpack.mix.js`
    - Added js extraction
    - Added clean hashed versions of js and css before production builds
    - Added PostCSS postcss-color-function
    - Added PostCSS postcss-pxtorem
 - `LICENSE.md`
 - Video Component Template (`_components/video.twig`)
 - `_components/download.twig`
      - Added Instructions and Params for better clarity
      - Added Show FileSize Option
      - Added Better checks
- Added TwigPack Plugin and Config file
- Added Relabel Plugin
- Added Retcon Plugin
- Added Link Field Plugin
- Error templates (404, 410, 503, 504)

### Changed
- `webpack.mix.js`
    - Improved config for purgeCSS.
    - Changed pkg to settings.
 - `package.json`
    - Update title and description and version to reflect correctly.
    - Updated Keywords.
    - Updated License.
    - Updated Dev Dependencies versions.
    - Updated Dependencies versions.
    - Comment out Vue dependencies in case this isn't required initially.
 - `_components/image.twig`
    - Added <noscript> fallback.
    - Added better SVG output
 - `_components/social-follow.twig`
     - Fixed some breakages.
     - Added TailwindCSS Purge CSS Classes.
 - `_components/social-share.twig`
     - Fixed some breakages.
     - Added TailwindCSS Purge CSS Classes.
  - `_components/download.twig`
      - Moved location to components folder.
      - Added Instructions and Params for better clarity.
      - Added improved checks.
  - `_components/pagination.twig`
        - Removed querystring check as now built into Craft 3.
        - Added documentation and options/defaults.
- Replaced `{% spaceless %}` tags as deprecated. used `{% apply spaceless %}` instead.
- Better documentation and consistency over all modules.
- Updated TODO in readme.
- Updated Craft & plugins to latest versions.
- Updated Imager Settings
    - Set `resizeFilter` to use lanczos - the craft default.
    - Set local to use Imagick Webp as this is quicker.
    - Disabled `fillTransforms` as this is not my preferred approach now.
    - Set the `filenme` default to hashed version to match production locally.
- Updated general config to use Flat Multi-Environment Config, as per this article <https://nystudio107.com/blog/multi-environment-configuration-for-craft-cms-3>
- Updated .env.example to reflect the settings above.
- Updated `composer.json`
    - Update to post install and post update commands to clear caches required.
    - Added Sort Package setting.
- Updated simple and standard json redactor settings.
- Updated `contact.twig` page to include block and extend layout.
- Updated `contact.twig` to include address with icon (commented out).
- Renamed `index.twig` to `home.twig`
- Updated `home.twig` page to include block and extend layout.
- Updated `_includes/_layouts/site.twig`
  - fixed include paths.
  - Moved <html> into the file so code isn't split over includes.
  - Added #app wrapper to the body.
- Updated `_includes/_globals/footer.twig`
  - Added legals include.
  - Updated copyright year to 2020.
  - Added cache tags.
  - Changed url() to siteUrl().
- Updated `_includes/_globals/head.twig`
  - Removed redundant SEOmatic hook.
  - Added DNS pre-fetch and preconnect for the site.
  - Added DNS pre-fetch and preconnect for the google fonts.
  - Comment out Google Fonts code initially.
  - Update to Twigpack css file.
  - Cleanup and reorder of Basic Page Needs META tags.
  - Comment our favicons and added todo note to set them up.
- Updated `_includes/_globals/header.twig`
  - Added better comments.
  - Clean up some old code.
  - Added some Vue code for nav
  - Updated `_includes/_globals/scripts.twig`
    - Twigpack for scripts.
    - Clean up scripts block as now moved to the `_includes/_globals/footer.twig` file.


### Removed
 - `package.json`
    - Removed JQuery.
    - Removed Picturefill.


## [1.8.0] - 2019-10-30
### Changed
- Added rebrand folder to git ignore
- Updated image component twig template for better flexability to pass in options

## [1.7.0] - 2019-10-13
### Added
- Added Hashed versions for compiled assets
- Added Twigpack to laravel mix and templates
- Added Stylelintrc
- Added Yarnclean
- Added browserslistsrc to remove warnings and errors from laravel mix
### Changed
- Remove dependencies required initially
- Updated dependency versions
- Updated config and settings for paths, clean and twigpack

## [1.6.0] - 2019-06-19
### Changed
- Remove dependencies required initially
- Updated dependency versions

## [1.5.0] - 2019-05-30
### Added
- new templates
- new configs
### Changed
-Some Template Classes

## [1.4.0] - 2019-04-17
### Added
- new templates
- new configs
- TODO write up fully
### Changed
-Lots
- TODO write up fully

## [1.3.0] - 2019-03-17
### Added
- more base templates and base includes
- craft plugins
### Changed
- improvements to templates
- gitignore

## [1.2.0] - 2019-03-10
### Added
- base templates and base includes
- deployignore file for excluding files for deployment
- composer scripts for deployment
### Changed
- update to readme
- update to php version is composer


## [1.1.0] - 2019-02-05
### Changed
- update to project config
- update to project environmental vars and general config


## [1.0.9] - 2019-02-04
### Changed
- update to project config


## [1.0.8] - 2019-02-04
### Changed
- updated project config.yaml to work and extended environmental vars


## [1.0.7] - 2019-02-04
### Changed
- included a var for sitename in project config

## [1.0.6] - 2019-02-04
### Changed
- Cleaning up project config

## [1.0.5] - 2019-02-04
### Added
- Adding base translations file
- Adding base templates and includes


## [1.0.4] - 2019-01-23
### Added
- Adding base craft config and base setup using new Craft 3.1 environment yaml file

## [1.0.3] - 2019-01-03
### Changed
- Added storage folder as a base folder with gitkeep


## [1.0.2] - 2019-01-03
### Changed
- Added type to composer.json


## [1.0.1] - 2019-01-03
### Changed
- Fixed composer details in 'composer.json', added name, description and version


## [1.0.0] - 2019-01-03
### Added
- Initial release

