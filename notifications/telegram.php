<?php

function sendTelegramMessage(string $token, string $chatId, string $message): bool
{
    if ($token === '' || $chatId === '' || $message === '') {
        return false;
    }

    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $payload = http_build_query([
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML',
    ]);

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $payload,
            'timeout' => 10,
        ],
    ]);

    return file_get_contents($url, false, $context) !== false;
}
