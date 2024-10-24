<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\Post;
use App\Observers\PostObserver;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // registro el observer
        Post::observe(PostObserver::class);
        
        // Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
        //     // Add some items to the menu...
        //     $event->menu->add('MAIN NAVIGATION');

        //     $event->menu->add('Notificaciones', [
        //         'key' => 'account_settings_notifications',
        //         'text' => 'Notifications',
        //         'url' => 'account/edit/notifications',
        //     ]);
        
        // });
    }
}
