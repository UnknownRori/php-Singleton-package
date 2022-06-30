<?php

namespace UnknownRori\Singleton;

/**
 * A trait contain function that should be protected in singleton
 */
trait SingletonTraitFunction
{
    /**
     * Singleton class should not have public constructor
     */
    protected function __construct()
    {
        //
    }

    /**
     * Singleton class should not be copied
     */
    protected function __clone(): void
    {
        //
    }
}
