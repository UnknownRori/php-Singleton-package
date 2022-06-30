<?php

namespace UnknownRori\Singleton;

use function array_key_exists;

/**
 * Singleton that used in global scale by extending the desired class
 */
abstract class Singleton
{
    use SingletonTraitFunction;

    /**
     * A collection initialized instance
     */
    public static array $instance = [];

    /**
     * Get instance of the class
     */
    public static function getInstance(): static
    {
        if (!array_key_exists(static::class, self::$instance)) {
            self::$instance[static::class] = new static;
        }

        return self::$instance[static::class];
    }
}
