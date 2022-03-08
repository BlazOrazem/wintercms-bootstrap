<?php namespace Custom\Bootstrap;

use System\Classes\PluginBase;

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
        if (app()->environment() == 'development') {
            app()->register('Laracasts\Cypress\CypressServiceProvider');
        }
    }

    public function boot()
    {
        //
    }

    public function registerSchedule($schedule)
    {
        $schedule->command('project:backup dropbox --folder=files')->weeklyOn(1, '01:00');
        $schedule->command('db:backup dropbox --folder=database')->daily()->at('02:00');
        $schedule->command('media:backup dropbox')->daily()->at('03:00');
        $schedule->command('project:commit')->daily()->at('04:00');
    }

    public function registerComponents()
    {
        return [];
    }
}
