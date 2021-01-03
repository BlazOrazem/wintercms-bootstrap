<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Remote connections
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for the remote server connections.
    |
    */

    'connections' => [
        'production' => [
            'key'         => env('REMOTE_PRODUCTION_KEY'),
            'path'        => rtrim(env('REMOTE_PRODUCTION_PATH'), '/'),
            'branch'      => env('REMOTE_PRODUCTION_BRANCH', 'prod'),
            // 'master_branch'    => env('REMOTE_PRODUCTION_MASTER_BRANCH'),
            'host'        => env('REMOTE_PRODUCTION_HOST'),
            'username'    => env('REMOTE_PRODUCTION_USERNAME'),
            'keyphrase'   => env('REMOTE_PRODUCTION_KEYPHRASE', ''),
            'timeout'     => 600,
            'permissions' => [
                'root_user'   => env('REMOTE_PRODUCTION_ROOT_USER'),
                'www_user'    => env('REMOTE_PRODUCTION_WWW_USER'),
                'www_folders' => env('REMOTE_PRODUCTION_WWW_FOLDERS'),
            ],
            'database'    => [
                'name'     => env('REMOTE_DB_DATABASE'),
                'username' => env('REMOTE_DB_USERNAME'),
                'password' => env('REMOTE_DB_PASSWORD'),
                'tables'   => [
                    // Numencode
                    'numencode_blogextension_files',
                    'numencode_blogextension_pictures',
                    'numencode_widgets_features_groups',
                    'numencode_widgets_features_items',
                    'numencode_widgets_highlights_groups',
                    'numencode_widgets_highlights_items',
                    'numencode_widgets_promotions_groups',
                    'numencode_widgets_promotions_items',
                    // Rainlab
                    'rainlab_blog_categories',
                    'rainlab_blog_posts',
                    'rainlab_blog_posts_categories',
                    'rainlab_sitemap_definitions',
                    'rainlab_translate_attributes',
                    'rainlab_translate_indexes',
                    'rainlab_translate_locales',
                    'rainlab_translate_messages',
                    // System
                    'system_files',
                    'system_mail_layouts',
                    'system_mail_partials',
                    'system_mail_templates',
                ],
            ],
        ],
    ],

];
