
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

You can now modify the new `metadata.php` configuration file inside `config` folder with your preferred default values.

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

## Advanced

You can include or exclude metadata by simply activating flags values inside your config file or at runtime.

```
    'facebook' => [
        'is_active' => true,

...

    'twitter' => [
        'is_active' => true,
```

Setting `true` to these directives enable a default facebook or twitter injection of metadata.

You can opt-in deactivate these section at runtime for a singular content in your website:

```php
// push metadata view on the stack
@push('metadata')
    @include('metadata::metadata', [
        'title' => $article->title,
        'author' => $article->author->name,
        'twitter' => false, // don't use twitter metadata for a specific content
    ])
@endpush
```

## Flags

* `facebook.is_active` as `facebook`  
Activate the facebook metadata section

* `twitter.is_active` as `twitter`  
Activate the twitter metadata section

## Properties

Metadata package manage the following list of properties:

* `robots`  
Defines the behaviour that cooperative crawlers, or "robots", should use with the page.  
Possible values: index, noindex, follow, nofollow, none, noodp, noarchive, nosnippet, noimageindex, nocache

* `referrer`  
Controls the Referer HTTP header attached to requests sent from the document.  
Possible values: no-referrer, origin, no-referrer-when-downgrade, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-URL

* `canonical`  
Define the canonical url of your content.

* `description`  
Contains a short and accurate summary of the content of the page.

* `og:title` as `title`  
This metadata is used inside head section to assign a title for search engine and <u>does not modify the main page title</u>.

* `og:url`
* `og:description` as `description`
* `og:type` as `type`  
Describe the type of the content.  
Possible values: website, article, music, video, book, profile

* `og:locale`

* `fb:app_id`  
Facebook App Id.

* `twitter:card` as `card_type`  
Twitter card type.  
Possible values: summary, summary_large_image, app, player

* `twitter:site` as `site`  
Twitter referred @site.

* `twitter:creator` as `author`  
Twitter referred @username.

* `og:image` as `image_url`  
An image URL which should represent your object within the graph.

* `og:image:type` as `image_type`  
A MIME type for the image.

* `og:image:width` as `image_width`  
The number of pixels wide.

* `og:image:height` as `image_height`  
The number of pixels high.

* `og:image:alt` as `image_alt`  
A description of what is in the image (not a caption). If the page specifies an og:image it should specify this property.
