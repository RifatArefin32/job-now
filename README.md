# Job Now
**Job Now** is a beginner project to learn Laravel-11. <br>
Course: [30 Days to Learn Laravel - Laracast](https://laracasts.com/series/30-days-to-learn-laravel-11)


# Learning Notes

### Create project from terminal.
```bash
composer create-project laravel/laravel job-now
```
Start the project. It will start at localhost server and 8000 port. 
```bash
php artisan serve
```
### Creating Routes and views
Create Routes at `./routes/web.php` file. Each route has a method (e.g. GET, POST, PUT, DELETE etc.), routing path and a function. This function defines which action to do while request to this route.
View files are stored at `./app/resources/views/` directory

### Laravel Components
- Create `components/` directory at `./app/resources/views/` that contains files of reusable components can be used in multiple views. 
- Access the component by using `<x-component_name></x-component_name>` tag and inside it we can pass values. These values are captured by the component in a variable called `$slot` and we can use `$slot`variables in our layout usning `{{ $slot }}` or `<php? echo "$slot" ?>`
- We can also use slot variables using `<x-slot:variable_name> </x-slot:variable_name>` and use the variable in the component file using `{{ $variable_name }}`
- `@props` are used as the external variables or attributes passed to the element to blade
- `$attributes` variables are used to catch all the attributes passed to the element

### Create Model in laravel
```bash
php artisan make:model Job
```

## Laravel Column Types and Functions

### String Types
- string('column_name', 255): Creates a VARCHAR column with a length of 255 characters by default.
- char('column_name', 4): Creates a CHAR column with a specified length.
- text('column_name'): Creates a TEXT column for larger text.
- mediumText('column_name'): Creates a MEDIUMTEXT column.
- longText('column_name'): Creates a LONGTEXT column.

### Integer Types
- integer('column_name'): Creates an INT column.
- bigInteger('column_name'): Creates a BIGINT column.
- mediumInteger('column_name'): Creates a MEDIUMINT column.
- smallInteger('column_name'): Creates a SMALLINT column.
- tinyInteger('column_name'): Creates a TINYINT column.
- unsignedInteger('column_name'): Creates an UNSIGNED INT column.
- unsignedBigInteger('column_name'): Creates an UNSIGNED BIGINT column.

### Boolean Type
- boolean('column_name'): Creates a BOOLEAN column.

### Date and Time Types
- date('column_name'): Creates a DATE column.
- dateTime('column_name'): Creates a DATETIME column.
- timestamp('column_name'): Creates a TIMESTAMP column.
- time('column_name'): Creates a TIME column.
- year('column_name'): Creates a YEAR column.

### Decimal Types
- float('column_name', 8, 2): Creates a FLOAT column with a precision of 8 and a scale of 2.
- double('column_name', 15, 8): Creates a DOUBLE column with a precision of 15 and a scale of 8.
- decimal('column_name', 8, 2): Creates a DECIMAL column with a precision of 8 and a scale of 2.

### Binary Type
- binary('column_name'): Creates a BLOB column.

### JSON Type
- json('column_name'): Creates a JSON column.

## Create Model item from tinker
```bash
php artisan tinker

App\Models\Job::create(['title'=>'Associate Software Engineer', 'salary'=>50000.00, 'currency'=>'BDT', 'description'=>'Test Description']);
```
## Create Factory
```bash
App\Models\User::factory()->create();
App\Models\User::factory(20)->create();

```

# About Laravel

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

