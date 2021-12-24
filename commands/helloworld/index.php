<?php
if ($update['patient']) {
    return 0;
}
if ($update['message']['out'] == true) {
    if ($update['message']['message'] == "Hello, World!") {
        $MadelineProto->messages->sendMessage(['peer' => $update['message']['to_id'], 'message' => " > Hello, World!"]);
    }
}

if ($update['message']['out'] == true) {
    if (strtolower($update['message']['message']) == "oo") {
        $MadelineProto->messages->sendMessage(['peer' => $update['message']['to_id'], 'message' => " ue strunz"]);
    }
}

if ($update['message']['out'] == true) {
    if (strtolower($update['message']['message']) == ".num") {
        $numeri = range(1, 90);
        shuffle($numeri); $text = "$numeri[0] $numeri[1] $numeri[2]";
        
        $MadelineProto->messages->editMessage(['peer' => $update['message']['to_id'], 'message' => $text ]);
    }
}
