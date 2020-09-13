<?php namespace Custom\Bootstrap;

use Backend;
use System\Classes\PluginBase;
use Custom\Bootstrap\Bootstrap\ExtendBlog;

/**
 * Bootstrap Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bootstrap',
            'description' => 'October CMS bootstrap project',
            'author'      => 'Custom',
            'icon'        => 'icon-leaf',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        (new ExtendBlog())->init();
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Custom\Bootstrap\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'custom.bootstrap.some_permission' => [
                'tab'   => 'Bootstrap',
                'label' => 'Some permission',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'bootstrap' => [
                'label'       => 'Bootstrap',
                'url'         => Backend::url('custom/bootstrap/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['custom.bootstrap.*'],
                'order'       => 500,
            ],
        ];
    }
}
