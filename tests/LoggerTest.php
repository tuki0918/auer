<?php

use Auer\Log\Logger;

class LoggerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException RuntimeException
     */
    public function 静的メソッドの確認_セットアップ前()
    {
        Logger::push();
    }

    /**
     * @test
     * @depends 静的メソッドの確認_セットアップ前
     */
    public function セットアップ()
    {
        $stream = __DIR__ . '/../logs/test.log';
        return Logger::init($stream);
    }

    /**
     * @test
     * @depends セットアップ
     * @param Logger $logger
     */
    public function セットアップ後の型確認($logger)
    {
        static::assertInstanceOf(Monolog\Logger::class, $logger);
    }

    /**
     * @test
     * @depends セットアップ後の型確認
     */
    public function 静的メソッドの確認_セットアップ後()
    {
        static::assertInstanceOf(Monolog\Logger::class, Logger::push());
    }
}
