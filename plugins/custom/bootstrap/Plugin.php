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

    public function registerSchedule($schedule)
    {
        $schedule->command('project:backup dropbox')->weeklyOn(1, '01:00');
        $schedule->command('media:backup dropbox')->daily()->at('02:00');
        $schedule->command('db:backup dropbox')->daily()->at('03:00');
        $schedule->command('project:commit')->daily()->at('04:00');
    }

    public function registerComponents()
    {
        return [];
    }
}
