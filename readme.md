
# LaraLTE — Laravel & AdminLTE
-----------------------------------------------

Being a freelancer, starting new projects can be a little repetitive, and often times daunting. This repository includes the awesome [Laravel](http://laravel.com) framework, with the beautiful [AdminLTE](https://github.com/almasaeed2010/AdminLTE) administration template.

## What's Included ?

of course, Laravel 5.1 and AdminLTE template, which itself requires Twitter Bootstrap which is also included here.

In addition, some useful packages are installed out of the box.

 - [Laravel DebugBar](https://github.com/barryvdh/laravel-debugbar)
 - [Intervention Image](https://github.com/intervention/image)
 - [BootForms](https://github.com/adamwathan/bootforms)
 - [Faker](https://github.com/fzaninotto/faker)

**Note!** An important note to take, is that my friend [Kouceyla](https://github.com/kossa) contributed to making an RTL version of the AdminLTE template ([here](https://github.com/almasaeed2010/AdminLTE/pull/489) is the pull request), so I used the CSS file he added, you'll find it in `/resources/assets/sass/admin/app-rtl.scss`.

## The Requirements

 - All the server requirements when using Laravel 5.1 (see [here](http://laravel.com/docs/5.1#installation))
 - Node Package Manager (npm) installed.
 - Gulp installed globally. See the [GulpJS Getting Started Guide](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md).
 - And that's it... Yeah!


## Getting Started
After satisfying all the requirements,

 1. Clone this repo.
 2. run `composer install`
 3. run `sudo npm install`

And you're done. Now start working!

## Customizing

Now, for the front-end automation, we use [Laravel Elixir](http://laravel.com/docs/5.1/elixir), which is just a simplified fluent API to interact with Gulp tasks, without the hassle of installing packages and defining tasks. Check out the documentation for further info.

Look at the `/gulpfile.js` file, and you'll get it all!

**Note!** If you want to change anything about Twitter Bootstrap, you'll find everything inside the `/resources/assets/less/bootstrap/`, and same for the AdminLTE template, anything related to it can be found `/resources/assets/less/admin-lte/`, and for the JavaScript, AdminLTE has a small JavaScript initialisation script, that has some configuration variables, can be found at `/resources/assets/js/admin/admin-lte.js`

Now, when working, run

```
gulp watch --production
```

That will listen for changes, and compile the Bootstrap & AdminLTE `less` files, and everything specified in the `gulpfile.js` file, and minify them (If you don't want them to be minified, remove the `--production` flag, as, that will tell Laravel Elixir to minify all the assets, CSS and JavaScript). For more info, refer the the [Laravel Elixir Documentaiton](http://laravel.com/docs/5.1/elixir)

## That's really It !
Enough talking... Just dig in!
Keep whatever you want, and remove whatever that you don't want!
This is an opinionated repository that I feel comfortable working with, and wanted to share it.
