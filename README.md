<h1>Despues de instalar laravel 10 especificamente <strong>(11 aún no funciona)<strong></h1>

1-Crear proyecto laravel 10 -> composer create-project laravel/laravel:^10.0 example-app <br>
2-Configurar proyecto -> schema, .env, migraciones, etc.
3-Poner los comandos posteriores
4-composer require open-admin-org/open-admin --with-all-dependencies
5-php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"
6-php artisan admin:install
7-Despues de esto verificar y ejecutar el php artisan serve, entrando a la ruta /admin
8-Por defecto el user es admin y la contraseña admin, de igual forma se puede ver en las tablas.

<h2>Error de configuracion Users</h2>
1-Entrar a la carpeta Config
2-Abrir el archivo php filesystems.php
3-En disks poner lo siguiente 
//esto seria la config simple
'admin' =>[
    'driver' => 'local',
    'root' => storage_path('app'),
],
//Config imagenees
'admin' => [
    'driver' => 'local',
    'root' => public_path('uploads'),
    'visibility' => 'public',
    'url' => env('APP_URL').'/uploads'
],

<strong>Al momento de usar el confi imagenes tambien se debe de modificar los hoks del controlador</strong>

<p>Por ejemplo si esta asi ->//$grid->column('image', __('Image'));</p>
<p>Pasarlo asi -> $grid->column('image')->image();</p>
<p>Para que se logre apreciar las imagenes</p>

<h3>Despues de haber creado un mc </h3>
1-Agregar la ruta a App/Admin/routes.php
2-Importar controloladores, Router, Admin, etc.
3-use Illuminate\Support\Facades\Route;
4-use OpenAdmin\Admin\Facades\Admin
5-la ruta te la dara al crear el controlador el OpenAdmin -> Agg abajo de HomeController@index

<h2>Instalar Helpers -> crear modelos, controladores, etc.</h2> 
1-composer require open-admin-ext/helpers
2-php artisan admin:import helpers


<h2><a href="https://open-admin.org/docs" target="_blank">Documentacipon OpenAdmin</a></h2>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
