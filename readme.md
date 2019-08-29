
  

# Laradminator

  

**_[Laravel](https://laravel.com/) PHP Framework with [Adminator](https://github.com/puikinsh/Adminator-admin-dashboard)_** as admin dash

  

  

## Setup:

  

All you need is to run these commands:

  

```bash

  

git clone https://github.com/kossa/laradminator.git

  

cd laradminator

  

composer install # Install backend dependencies

  

sudo chmod 777 storage/ -R # Chmod Storage

  

php artisan storage:link # Enable link to storage

  

cp .env.example .env # Update database credentials configuration

  

php artisan key:generate # Generate new keys for Laravel

  

php artisan migrate:fresh --seed # Run migration and seed users and categories for testing

  

yarn install # or npm i to Install node dependencies(>= node 9.x)

  

npm run production # To compile assets for prod

  

```

  

  

## Demo:

  

- Online demo: Can be found at [laradminator.bel4.com/admin](http://laradminator.bel4.com/admin)

  

- Local demo:

  

`php artisan serve # Check installation (optional)`

  

Open browser at [localhost:8000/admin](http://localhost:8000/admin)

  

  

**Note:**

  

Username: test@example.com

  

Password: 123456

  

  

> All the data are reset each 30mn ;)

  

>  **please d'ont forget to remove [this](https://github.com/kossa/laradminator/blob/master/app/Console/Kernel.php#L27-L28) function in your app**

  

  

***

  

  

## Included Packages:

  

#### Laravel (php):

  

  

*  [Laravel Framework](https://github.com/laravel/laravel/) (5.8.*)

  

*  [Forms & HTML](https://github.com/laravelcollective/html) : for forms

  

*  [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) : for debugging

  

*  [Intervention Image](https://github.com/intervention/image) : image handling and manipulation

  

  

#### JS plugins:

  

  

* All ADMINATOR plugins [here](https://github.com/puikinsh/Adminator-admin-dashboard#built-with)

  

*  [sweetalert2](https://github.com/limonte/sweetalert2)

  

*  [Axios](https://github.com/mzabriskie/axios)

  

  

## Page size optimization:

  

- Using [Laravel Mix](http://laravel.com/docs/master/mix), all CSS and JS are in minified to one file each.

  

- Laradminator leverages browser caching, using `.htaccess` file from [html5-boilerplate](https://github.com/h5bp/html5-boilerplate)

  

- GZip compression is activated by default(APP_DEBUG=false => only onfile for js, and one file for css).

  

-  `app.css`: 107 KB with gzip (943 Kb without)

  

-  `app.js` : 427 KB with gzip (1.4 Mb without)

  

  

*__Note:__ If you're using Nginx check: [server-configs-nginx](https://github.com/h5bp/server-configs-nginx)*

  

  

![alt text](https://content.screencast.com/users/kouycela/folders/Jing/media/c2cf99d2-5a82-40d8-a18f-5f8dfaaafaa6/00000596.png  "Logo Title Text 1")

### HTTPS Support
Support HTTPS, but disabled by default. To enable it, set HTTPS to true on your `.env` file.

### RTL support
Uncomment [this](https://github.com/kossa/laradminator/blob/master/resources/views/admin/default.blade.php#L15) line and you have the RTL version

  ![enter image description here](https://content.screencast.com/users/kouycela/folders/Jing/media/a95fbdc6-6131-4fb2-8fe4-f16fff2c34b8/00001805.png)
  

#### How can I use custom CSS and JS ?

The current architecture of assets are inspired from [adminator](https://github.com/puikinsh/Adminator-admin-dashboard/tree/master/src/assets/scripts), so all assets(css and js) are located in [resources](https://github.com/kossa/laradminator/tree/master/resources). if you want to add new component, like [select2](https://select2.org/) juste create file like [`resources/js/select2/index.js`](https://github.com/kossa/laradminator/blob/master/resources/js/select2/index.js), and don't forget to load it in [bootstrap.js](https://github.com/kossa/laradminator/blob/master/resources/js/bootstrap.js#L54)

  

If you want to update the CSS, you can put them directly in [`resources/sass/app.scss`](https://github.com/kossa/laradminator/blob/master/resources/sass/app.scss#L72) or create new file under `resources/sass` and import it in [resources/sass/app.scss

](https://github.com/kossa/laradminator/blob/master/resources/sass/app.scss#L5)

  

> VERY IMPORTANT: Any change you make on resources you have to run : `npm run dev` or `npm run prod`.

> If you have a lot of changes it's much better to run: `npm run watch` to watch any changes on your files, take a look on [browersync](https://laravel.com/docs/5.8/mix#browsersync-reloading)

  
  

#### Create new CRUD

  

Creating CRUD in your application is the job you do most. Let's create Post CRUD:

  

  

* Add new migration and model : `php artisan make:model Post -m`

  

* Open migration file and add your columns

  

* Create PostsController : `php artisan make:controller PostController`. fill your resource (you can use UserController with some changes) or, if you are a lazy developer like me, use a [snippet](https://github.com/kossa/st-snippets/blob/master/kossa_php/Laravel/lcontroller.sublime-snippet) and make only 2 changes

  

* Duplicate `resource/views/admin/users` folder to `posts`, make changes in `index.php`, `create.blade.php`, `edit.blade.php`

  

  

#### Move Image and file ?

  

To move images im using a [helper](https://github.com/kossa/laradminator/blob/master/app/Http/helpers.php#L4) function based on [intervention/image](https://github.com/intervention/image) and [variables.php](https://github.com/kossa/laradminator/blob/master/config/variables.php#L20)

  

you can check full example in [User.php](https://github.com/kossa/laradminator/blob/master/app/User.php#L70)

  

  

#### Do you have question ?

  

Not hesitate, [open](https://github.com/kossa/laradminator/issues/new) new issue ;)
