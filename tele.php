<?php
header('Content-Type: application/json');
$config = array(
    'telegramBotToken' => '8168283737:AAElC1wltyQ8aMP40ryHtq6vUJx8Ck-dFAo',
    'telegramChatId' => '5906925079'
);
echo json_encode($config);
?>
