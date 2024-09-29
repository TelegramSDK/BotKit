<?php

declare(strict_types=1);

namespace TelegramSDK\BotKit\Tools;

class Logger
{
    public const COLOR_RESET = "\033[0m";
    public const COLOR_SUCCESS = "\033[32m";
    public const COLOR_ERROR = "\033[31m";
    public const COLOR_WARNING = "\033[33m";
    public const COLOR_INFO = "\033[34m";

    public static function success($message)
    {
        self::log("SUCCESS", $message, self::COLOR_SUCCESS);
    }

    public static function error($message)
    {
        self::log("ERROR", $message, self::COLOR_ERROR);
    }

    public static function warning($message)
    {
        self::log("WARNING", $message, self::COLOR_WARNING);
    }

    public static function info($message)
    {
        self::log("INFO", $message, self::COLOR_INFO);
    }

    private static function log($type, $message, $color)
    {

        if (self::supportsColors()) {
            echo "{$color}[$type]: $message" . self::COLOR_RESET . PHP_EOL;
        } else {
            echo "[$type]: $message" . PHP_EOL;
        }
    }

    private static function supportsColors()
    {

        return DIRECTORY_SEPARATOR === '/' &&
            getenv('TERM') &&
            getenv('TERM') !== 'dumb';
    }
}
