<?php

namespace UnknownRori\Singleton\Tests;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * Get instance of dummy class
     * @covers \UnknownRori\Singleton\Singleton
     * @test
     */
    public function getInstanceDummyClass()
    {
        $instance = DummyClass::getInstance();
        $this->assertInstanceOf(DummyClass::class, $instance);
    }

    /**
     * Get instance of dummy class twice
     * @covers \UnknownRori\Singleton\Singleton
     * @test
     */
    public function getInstanceDummyClass2()
    {
        $instance1 = DummyClass::getInstance();
        $instance2 = DummyClass::getInstance();
        $this->assertInstanceOf(DummyClass::class, $instance1);
        $this->assertInstanceOf(DummyClass::class, $instance2);

        $instance1 = spl_object_id($instance1);
        $instance2 = spl_object_id($instance2);

        $this->assertEquals($instance1, $instance2);
    }

    /**
     * Get instance of dummy class twice
     * @covers \UnknownRori\Singleton\Singleton
     * @test
     */
    public function getInstanceDummyClassTrait()
    {
        $instance = DummyClassTrait::getInstance();
        $this->assertInstanceOf(DummyClassTrait::class, $instance);
    }

    /**
     * Get instance of dummy class twice
     * @covers \UnknownRori\Singleton\Singleton
     * @test
     */
    public function getInstanceDummyClassTrait2()
    {
        $instance1 = DummyClassTrait::getInstance();
        $instance2 = DummyClassTrait::getInstance();

        $this->assertInstanceOf(DummyClassTrait::class, $instance1);
        $this->assertInstanceOf(DummyClassTrait::class, $instance2);

        $instance1 = spl_object_id($instance1);
        $instance2 = spl_object_id($instance2);

        $this->assertEquals($instance1, $instance2);
    }
}
