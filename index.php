<?php
// Подключаем базу данных из файла подключения coonectbd.php
require_once 'connectbd.php';

if ($connect){
    if (isset($_GET['number'])) {
   $number = $_GET['number']; //Получаем переменную number из GET запроса
   $querySelectProd = "SELECT * FROM products LIMIT $number,10";
   $res = mysqli_query($connect, $querySelectProd); // Получаем ссылку на данные из БД
  
   $result = [];
   while ($row = mysqli_fetch_assoc($res)) {          // Преобразуем в массив
      $result[] = $row;
   }
      echo json_encode($result);    // отдаем ответ в json формате

   mysqli_close($connect);
} else {
   die("Соединение с Базой данных не установлено!");
};
}
