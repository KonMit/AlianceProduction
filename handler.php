<?php

$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$bot_token = "2080075814:AAFUq_N1MdhRC8o9BlDE2Npy8bCwNfYPj_o";
$chat_id = "-1001705210302";

$input_array = array(
    "ФИО: " => $user_name,
    "Номер телефона: " => $user_phone
);

foreach($input_array as $key => $value ) {
    $text .= $key . "<b>" . urlencode($value). "</b>" . "%0A";
};

function sendMessage($bot_token, $chat_id, $text) { 
    $url_send_message = "https://api.telegram.org/bot{$bot_token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html";

    if (fopen($url_send_message, "r")) {
        echo "success";
    } else {
        echo "error";
    };
};

sendMessage($bot_token, $chat_id, $text);

