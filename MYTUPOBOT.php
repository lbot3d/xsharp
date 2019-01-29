<?php
// Telegram Bot тупо бот.
$access_token = '313028938:AAH3HoFMqv_mKX0Sqs3AYRIu-XeP4XbACh0';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
@$chat_id = $output['message']['chat']['id'];
@$message = $output['message']['text'];
// команды тупо-бота
switch($message) {
    case '/start':
        sendMessage($chat_id, "\xF0\x9F\x93\xA1 тупобот на связи!");
    break;
}

function sendMessage($chat_id, $message) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&parse_mode=html');
}
// END