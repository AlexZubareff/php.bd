<?php
// Подключаем базу данных из файла подключения coonect_db.php
require_once 'connectbd.php';
// Подключаем style.css


if ($connect){
    if (isset($_GET['number'])) {
   $number = $_GET['number']; //Получаем id картинки из GET запроса
   $querySelectImages = "SELECT * FROM products LIMIT $number,1";
   $res = mysqli_query($connect, $querySelectImages); // Получаем ссылку на данные из БД
   $result = [];
   while ($row = mysqli_fetch_assoc($res)) {          // Преобразуем в массив
      $result[] = $row;
      $resJson = json_encode($result);
   }
   var_dump($resJson);
   mysqli_close($connect);
} else {
   die("Соединение с Базой данных не установлено!");
};
}
