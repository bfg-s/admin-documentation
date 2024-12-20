<?php

use Admin\Controllers\AuthController;
use Admin\Controllers\DashboardController;
use Admin\Controllers\UploadController;
use Admin\Controllers\UserController;
use Admin\Models\AdminUser;

return [

    /**
     * Admin secret panel key
     */
    'key' => env('ADMIN_KEY', ''),

    /**
     * The theme of admin panel
     */
    'theme' => 'admin-lte',

    /**
     * The dark mode by default for administrator
     */
    'dark_mode' => true,

    /**
     * Language mode for admin panel
     */
    'lang_mode' => true,

    /**
     * Supported languages
     */
    'languages' => ['en', 'uk', 'ru'],

    /**
     * Default home route
     */
    'home-route' => 'admin.dashboard',

    /**
     * Admin application namespace.
     */
    'app_namespace' => 'App\\Admin',

    /**
     * Package work dirs.
     */
    'paths' => [
        'app' => app_path('Admin'),
        'view' => 'admin',
    ],

    /**
     * Global rout configurations.
     */
    'route' => [
        'domain' => '',
        'prefix' => 'bfg',
        'name' => 'admin.',
        'layout' => 'admin_layout',
    ],

    /**
     * Admin server list for monitoring.
     */
    'servers' => [
        [
            'name' => env('APP_NAME'),
            'host' => env('APP_URL'),
        ]
    ],

    /**
     * Admin panel force 2fa secure.
     */
    'force-2fa' => false,

    /**
     * Authentication settings for all admin pages. Include an authentication
     * guard and a user provider setting of authentication driver.
     */
    'auth' => [
        'guards' => [
            'admin' => [
                'driver' => 'session',
                'provider' => 'admin',
            ],
        ],
        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model' => AdminUser::class,
            ],
        ],
    ],

    /**
     * Admin upload setting.
     *
     * File system configuration for form upload files and images, including
     * disk and upload path.
     */
    'upload' => [
        'disk' => 'admin',
        /**
         * Image and file upload path under the disk above.
         */
        'directory' => [
            'image' => 'images',
            'file' => 'files',
        ],
    ],

    /**
     * Admin use disks.
     */
    'disks' => [
        'admin' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'visibility' => 'public',
            'url' => env('APP_URL').'/uploads',
        ],
    ],

    /**
     * Fine-tuning the default model table.
     */
    'model-table' => [
        'per-page' => 15,
        'per-pages' => [10, 15, 20, 50, 100, 500, 1000],
        'order_field' => 'id',
        'order_type' => 'desc',
    ],

    /**
     * Footer data
     */
    'footer' => [
        'copy' => 'Developed by <a href="https://swipex.ua/" target="_blank">Swipex</a>.
                    All rights reserved. <strong>Copyright &copy; 2020 - '.date('Y').'.</strong>',
    ],
];
