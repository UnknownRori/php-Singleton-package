<?php

namespace UnknownRori\Singleton;

use function is_null;

/**
 * A singleton trait used on singular class
 */
trait SingletonTrait
{
    use SingletonTraitFunction;

    private static $instance;

    /**
     * Get instance of the class
     */
    public static function getInstance(): static
    {
        if (is_null(self::$instance)) {
            self::$instance = new static;
        }

        return self::$instance;
    }
}
