# Steps

## Controllers

- add a page controller `php artisan make:controller Guests/PageController` (Guests é il namespace dove inserire il controller)
- update the route in web.php

from

```php

Route::get('/', function(){
return view('your_view_name_here');
});
```

to

```php

Route::get('/', [PageController::class, 'index'])->name('home');
```

- define the index method inside the PageController

```php
public function index()
    {

        return view('welcome');
    }
```

## Model/DB data

- add db credentials to `.env`
- create a model `php artisan make:model Book`
- add db `mysql -uyour_user_name_here -p` create the db `CREATE DATABASE your_db_name_here`
- open phpmyadmin create a new `books` table
- add some records to the table using php my admin
- open tinker `php artisan ti`
- read the data inside tinker (CLI) `App\Models\Book::all()` returns all data from the table
- uypdate the controller method to show all data taken form the db table

```php
public function index()
{

    return view('welcome', ['books' => Book::all(), 'heading' => 'Our Books']);
}

```
