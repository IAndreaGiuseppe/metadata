<?php

return [

    /*
     | Robots
     |
     | Defines the behaviour that cooperative crawlers, or "robots", should use with the page
     |
     | Possible values:
     | index, noindex, follow, nofollow, none, noodp, noarchive, nosnippet, noimageindex, nocache
     |
     | ! This attribute has not been formally accepted yet
     */
    'robots' => 'all',

    /*
     | Referrer
     |
     | Controls the Referer HTTP header attached to requests sent from the document
     |
     | Possible values:
     | no-referrer, origin, no-referrer-when-downgrade, origin-when-cross-origin,
     | same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-URL
     */
    'referrer' => 'no-referrer-when-downgrade',

    /*
     | Title
     |
     | This metadata is used inside head section to assign a title for search engine
     | ! does not modify the main page title
     */
    'title' => '',

    /*
     | Description
     |
     | Contains a short and accurate summary of the content of the page
     */
    'description' => '',

    'facebook' => [
        /*
         | Activate facebook schema
         */
        'is_active' => false,

        /*
         | Facebook App Id
         */
        'app_id' => '',

        /*
         | Type
         |
         | Describe the type of the content
         |
         | Possible values:
         | website, article, music, video, book, profile
         | https://ogp.me/#types
         */
        'type' => 'website',
    ],

    'twitter' => [
        /*
         | Activate twitter schema
         */
        'is_active' => false,

        /*
         | Twitter card type
         |
         | Possible values:
         | summary, summary_large_image, app, player
         */
        'card_type' => 'summary',

        /*
         | Twitter referred @site
         */
        'site' => '',

        /*
         | Twitter referred @username
         */
        'author' => '',
    ],

    'resources' => [
        'image' => [
            /*
             | An image URL which should represent your object within the graph
             */
            'url' => '',

            /*
             | A MIME type for this image
             */
            'type' => 'image/jpeg',

            /*
             | The number of pixels wide
             */
            'width' => '',

            /*
             | The number of pixels high
             */
            'height' => '',

            /*
             | A description of what is in the image (not a caption).
             | If the page specifies an og:image it should specify this property
             */
            'alt' => '',
        ],
    ],
];
