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

    <?php
    $str = "[{
        \"name\": \"Джек\",
  \"lastname\": \"Блэк\",
  \"phone\": \"555 123-1234\",
  \"address\": \"г.Атлантик Сити, ул. Фиаско,2\",
  \"email\": \"Jack.Black@mailb.net\"
}, {
        \"name\": \"Джек\",
  \"lastname\": \"Дэниелс\",
  \"phone\": \"555 246-7134\",
  \"address\": \"г.Эмиратск, ул. Метаноловая,21\",
  \"email\": \"Jack.Daniels@wmail.net\"
}, {
        \"name\": \"Рихард\",
  \"lastname\": \"Зорге\",
  \"phone\": \"555 654-1234\",
  \"address\": \"г.Баку, ул. Фартовая,5\",
  \"email\": \"ramzaj.inson@jmail.ru\"
}, {
       \"name\": \"Макс\",
  \"lastname\": \"Штирлиц\",
  \"phone\": \"555 333-1234\",
  \"address\": \"г.Берлин, ул. 9 мая,1\",
  \"email\": \"Maxim.Isaev@mail.de\"
}, {
        \"name\": \"Михаил\",
  \"lastname\": \"Тульев\",
  \"phone\": \"555 564-7789\",
  \"address\": \"г.Брюгге, ул. Надежды,10\",
  \"email\": \"tula.hope@nato-mail.net\"
}, {
        \"name\": \"Джеймс\",
  \"lastname\": \"Бонд\",
  \"phone\": \"777 123-1234\",
  \"address\": \"г.Лондон, ул. Ми-стрит,8\",
  \"email\": \"007@mail.uk\"
}]";
    //$filename = "D:\Netology-PHP\Homeworks\2.1\phonebook.json";
    //$filename = "https://cloud.mail.ru/public/6Jg6/15JCRMp1A";
    //$filename = "ftp://mmarkelov@university.netology.ru/me/lesson-2.1/phonebook.json";
    if (/*file_exists($filename)*/true) {
        //$phonebook_json = file_get_contents($filename);
        //$phonebook_arr = json_decode ($phonebook_json, true);
        $phonebook_arr = json_decode ($str, true);?>

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




