# Amasci Craft 3 Boilerplate with Tailwind CSS
A starting boilerplate for [Craft 3](https://craftcms.com/) projects using [Laravel Mix](https://laravel-mix.com/), [Tailwind CSS](https://tailwindcss.com/)


## Installation

1.  To create a new project, run `composer create-project terryupton/boilerplate-craft <Path>`, substituting <Path> with the path where Composer should create the project.

2. Update a .env file adding the database connections and other settings

3. Run ./craft setup and follow the instructions

4. Refer to new `READdME.md` file for further instructions

## Content Management System (CMS)
- [Craft CMS](https://craftcms.com/)
- [Craft CMS 3.x documentation](https://docs.craftcms.com/v3/)

## Front-end

### Build Tools
- [Laravel Mix](https://github.com/JeffreyWay/laravel-mix)

### CSS
- [Tailwind CSS](https://tailwindcss.com/)
- [Tailwind UI](https://tailwindui.com/)

### JavaScript
- [Alpine JS](https://github.com/alpinejs/alpine)
- [lazySizes](https://afarkas.github.io/lazysizes/index.html)
- [Vue.js](https://vuejs.org/)

## TODO:
- Create proper Readme file and instructions.
<https://github.com/miranj/craft-boilerplate>
<https://github.com/ademers/craft-starter>
<https://github.com/madebyshape/craft-3>
<https://github.com/timkelty/craftcms-boilerplate>
<https://github.com/nystudio107/craft>

- Add default files for composer, package, readme - see this example 
<https://github.com/miranj/craft-boilerplate>
- Add Vue and Apline to package.default once created.
- Create better boilerplate template architecture.  
<https://nystudio107.com/blog/an-effective-twig-base-templating-setup>
- Update `proejct.yaml` to add 1.0.0 schema versions for plugins.
- Update `proejct.yaml` to fix terms block and redactor field.
- Setup Humans.txt defaults in SeoMatic php settings files.
<https://nystudio107.com/blog/tips-for-using-seomatic-effectively>
- Add fallback <title> tag into `head.twig` if SEOmatic fails.
- Add fallback meta tags into `head.twig` if SEOmatic fails.
- Convert Classes in components to arrays
- Convert Email QueryString to an Array (subject and body)
- Set button.twig component to switch between button and a href
- Set and test button.twig to use classes as an array and then apply this approach to other components.


## License
The MIT License (MIT). Please see [License file](./LICENSE.md) for more information.