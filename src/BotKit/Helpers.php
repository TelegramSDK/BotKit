<?php

declare(strict_types=1);

namespace TelegramSDK\BotKit;

class Helpers
{
    public static function array_filter(array $arr): array
    {
        return array_filter($arr, fn ($value) => !is_null($value));
    }

    public static function html_to_text(string $str)
    {
        return trim(html_entity_decode(strip_tags($str)));
    }
}
