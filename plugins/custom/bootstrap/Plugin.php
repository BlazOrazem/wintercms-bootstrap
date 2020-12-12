<?php namespace Custom\Bootstrap;

use System\Classes\PluginBase;
use Custom\Bootstrap\Bootstrap\ExtendBlog;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Bootstrap',
            'description' => 'October CMS bootstrap project',
            'author'      => 'Custom',
            'icon'        => 'icon-leaf',
        ];
    }

    public function register()
    {
        //
    }

    public function boot()
    {
//        (new ExtendBlog())->init();
    }

    public function registerComponents()
    {
        return [];
    }
}
