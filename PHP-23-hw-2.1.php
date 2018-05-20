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
    $filename = "ftp://mmarkelov:neto1755@university.netology.ru/me/lesson-2.1/phonebook.json";
    if (file_exists($filename)/*true*/) {
        $phonebook_json = file_get_contents($filename);
        $phonebook_arr = json_decode($phonebook_json, true);
        ?>

        <?php foreach($phonebook_arr as $item) { ?>
            <tr>
              <td><?php echo $item["name"]; ?></td>
              <td><?php echo $item["lastname"]; ?></td>
              <td><?php echo $item["phone"]; ?></td>
              <td><?php echo $item["address"]; ?></td>
              <td><?php echo $item["email"]; ?></td>
            </tr>
        <?php }
    } else {
        echo "Телефонная книга не найдена";
    }

    ?>

    </table>
  </body>
</html>




