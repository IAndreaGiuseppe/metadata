
# Metadata

> Use this package if you don't need complex implementation over SEO metadata.

This package provides a way to include metadata tags and other SEO related values inside a view.

This is the most flexible way of inject metadata inside webpages without the need of a database.

## Setup

0. Require this package inside your `composer.json` file.

```composer
{
    "iag/metadata": "^0.1.0"
}
```

1. Opt-in publishing metadata config file.

```bash
php artisan vendor:publish
```

## Usage

This package is a metadata management suite to include metadata tags and related SEO values inside a view.

0. Before start using this package update the configuration file `config/metadata.php` with your default SEO informations.

1. Include a new stack inside your base layout view. This stack will collect all your SEO metadata.

```php
// main layout

<!DOCTYPE html>
<html>
    <head>
        <!-- Metadata -->
        @stack('metadata')

    </head>
    <body></body>
</html>
```

Now you're ready to include your metadata.

2. Choose a public view of your website content (ex. views/articles/page.blade.php) and include the `metadata::metadata` view entry point when you need it.

```php
@extends('layouts.page')

@section('content')
<section>
    <h2>{{ $article->title }}</h2>

    <div>{{ $article->body }}</div>
</section>
@endsection

// push metadata view on the stack
@push('metadata')
    @include('metadata::metadata', [
        'title' => $article->title, // <- use the model title to contextualize the title metadata
        'author' => 'John Doe'      // <- or simply overrides default author value at runtime
    ])
@endpush
```
