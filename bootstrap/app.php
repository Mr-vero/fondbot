<?php

require __DIR__.'/../vendor/autoload.php';

$app = new FondBot\Framework\Application(
    realpath(__DIR__.'/../')
);

$app->register(Bot\Providers\EventServiceProvider::class);
$app->register(Bot\Providers\ChannelServiceProvider::class);
$app->register(Bot\Providers\ConversationServiceProvider::class);

return $app;
