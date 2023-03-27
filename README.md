# Laravel dsld-slug-creator
A simple generate SEO-friendly and human-readable URL slugs for your Laravel website with this dsld tools.

## Installation

```sh
composer require dsld/larave-slug-creator
```

## Use from Controller


#### Import first the DsldSlug Facade

```php
use Dsld\LaravelSlugCreator\Facades\DsldSlug;
```


```php

$slug = CreateSlug::generate(App\Models\User::class, 'page name', 'slug');
//output: page-name

//After created this page again we will create a page with same name
$slug = CreateSlug::generate(App\Models\User::class, 'page name', 'slug');
//output: page-name-1

//After created this page again we will create a page with same name
$slug = CreateSlug::generate(App\Models\User::class, 'page name', 'slug');
//output: page-name-2
```




#### Publish Configuration
```sh
php artisan vendor:publish dsld/larave-slug-creator
```


## Contribution
You can use this package on you laravel project.