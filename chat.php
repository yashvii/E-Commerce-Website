<?php
require_once 'vendor/autoload.php';
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
$config = [
// Your driver-specific configuration
// "telegram" => [
// "token" => "TOKEN"
// ]
];
DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
$botman = BotManFactory::create($config);
// Give the bot something to listen for.
$botman->hears('Hello', function (BotMan $bot) {
$bot->reply('Hello too');
});
$botman->hears('whats colours are in trend for men?', function (BotMan $bot) {
$bot->reply(' warm palettes');
});
$botman->hears('whats styles are in trend for women?', function (BotMan $bot) {
$bot->reply('crop tops, mom jeans, corsetts styled dresses , boots ,string lace heels etc');
});
$botman->hears('sizes for shoes available', function (BotMan $bot) {
$bot->reply('usually UK5-11');
});
$botman->fallback(function($bot) {
$bot->reply('Sorry, I did not understand these commands.');
});
// Start listening
