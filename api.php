<?php
// URL внешнего BoredAPI
$bored_api_url = 'https://www.boredapi.com/api/activity/';

// Отправляем GET-запрос к внешнему API
$bored_api_response = file_get_contents($bored_api_url);

if ($bored_api_response !== false) {
    // Декодируем JSON-ответ от внешнего API
    $bored_data = json_decode($bored_api_response, true);

    if ($bored_data !== null) {
        // Отправляем ответ в формате JSON
        header('Content-Type: application/json');
        echo json_encode($bored_data);
    } else {
        echo "Ошибка декодирования JSON от BoredAPI";
    }
} else {
    echo "Ошибка при обращении к BoredAPI";
}
?>