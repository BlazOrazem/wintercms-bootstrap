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
            'key'              => env('REMOTE_PRODUCTION_KEY'),
            'path'             => env('REMOTE_PRODUCTION_PATH'),
            'branch'           => env('REMOTE_PRODUCTION_BRANCH', 'prod'),
            // 'master_branch'    => env('REMOTE_PRODUCTION_MASTER_BRANCH'),
            'host'             => env('REMOTE_PRODUCTION_HOST'),
            'username'         => env('REMOTE_PRODUCTION_USERNAME'),
            'keyphrase'        => env('REMOTE_PRODUCTION_KEYPHRASE', ''),
            'timeout'          => 600,
            'permissions'      => [
                'root_user'   => env('REMOTE_PRODUCTION_ROOT_USER'),
                'www_user'    => env('REMOTE_PRODUCTION_WWW_USER'),
                'www_folders' => env('REMOTE_PRODUCTION_WWW_FOLDERS'),
            ],
        ],
    ],

];
