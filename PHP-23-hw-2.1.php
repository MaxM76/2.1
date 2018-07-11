<?php

$filename = "ftp://mmarkelov:neto1755@university.netology.ru/me/lesson-2.1/phonebook.json";
if (file_exists($filename)) {
    $phonebookJSON = file_get_contents($filename);
} else {
    exit('Телефонная книга не найдена');
}

if ($phonebookJSON === false) {
    exit('Не удалось получить данные');
}

$phonebookArr = json_decode($phonebookJSON, true);
if ($phonebookArr === null) {
    exit('Ошибка декодирования .json файла');
}

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
  </head>

  <body>
    <h1>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</h1>
    <h2>Телефонная книга</h2>
    <table>
      <thead>
       <tr>
           <td>Имя</td>
           <td>Фамилия</td>
           <td>Телефон</td>
           <td>Адрес</td>
           <td>Электронная почта</td>
       </tr>
      </thead>

        <?php
        foreach($phonebookArr as $item) { ?>
            <tr>
              <td><?= $item["name"]; ?></td>
              <td><?= $item["lastname"]; ?></td>
              <td><?= $item["phone"]; ?></td>
              <td><?= $item["address"]; ?></td>
              <td><?= $item["email"]; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
  </body>
</html>




