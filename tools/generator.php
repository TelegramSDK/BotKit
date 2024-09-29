<?php

require dirname(__DIR__) . "/vendor/autoload.php";

$output = dirname(__DIR__) . "/src/BotKit/MethodsTrait.php";

$generator = new TelegramSDK\BotKit\Tools\Generator();

$generator->writeMethodsToFile($generator->getAllMethods(), $output);

$generator->lint();
