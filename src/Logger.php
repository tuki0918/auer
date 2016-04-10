<?php

namespace Auer\Log;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger as MonologLogger;
use RuntimeException;

/**
 * Logger
 * @package Auer\Log
 */
class Logger
{
    /** @var MonologLogger */
    protected static $monolog;

    /**
     * init
     * @param string $name
     * @param resource|string $stream
     * @return MonologLogger
     */
    public static function init(
        $stream,
        string $name = 'app',
        int $level = MonologLogger::DEBUG,
        int $maxFiles = 0
    ): MonologLogger {
        if (static::$monolog == null) {
            $monolog = new MonologLogger($name);
            $monolog->pushHandler(new RotatingFileHandler($stream, $maxFiles, $level));
            static::$monolog = $monolog;
        }
        return static::$monolog;
    }

    /**
     * $monolog accessor
     * @return MonologLogger
     */
    public static function push(): MonologLogger
    {
        if (static::$monolog == null) {
            throw new RuntimeException('Logger not set for static instance.');
        }
        return static::$monolog;
    }
}
