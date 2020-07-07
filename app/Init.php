<?php

namespace Wpvr;

final class Init
{
    /**
     * Declare all classes that need to init.
     *
     * @return array
     */
    private static function getServices()
    {
        return [
            Base\Menu::class,
            Base\Enqueue::class,
            Base\Routes::class,
        ];
    }

    /**
     * Register the service by calling method register() inside their class.
     *
     * @return void
     */
    public static function registerServices()
    {
        foreach (self::getServices() as $class) {
            $service = new $class();
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
}
