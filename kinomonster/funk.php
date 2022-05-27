<?php

  function sum ($a, $b) {
    return $a + $b;
  }

  echo sum(2, 3);

?>


/*
use LDAP\Result;

  function sum ($a, $b) {
    $result = false;

    if(!is_numeric($a)) {
      $result = "Ошибка, значение 'a' не является числом";
    } else if (!is_numeric($b)){
      $result = "Ошибка, значение 'b' не является числом";
    } else {
      $result = $a + $b;
    }

    return $result;
  }

  function maxSum($sum) {
    $result = false;

    if($sum > 30) {
      $result = "Сумма больше 30";
    } else {
      $result = "Сумма меньше 30";
    }
    return $result;

  }

  echo maxSum(sum(6, 3));
*/


//подключение к базе даных
/*
$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

if(mysqli_connect_errno()) {
  printf("Соединение не установлено", mysqli_connect_errno());
  exit();
}

$mysqli->set_charset('utf8');*/
/*
$query = $mysqli->query('SELECT * FROM movie');

while ($row =mysqli_fetch_assoc($query) ) {
  echo $row['name'].$row['year']. "<br>";
}*/

/*
Добавляэм запись в таблицу
$query = "INSERT INTO movie VALUES(null, 'Безумный Макс', 'Описание фильма Безумный Макс', '2015', Now())";
$mysqli->query($query);
*/

 /*
Изменяем год 3 елемента
$query = "UPDATE movie SET year = 1990 WHERE id = 3";
$mysqli->query($query);*/
/*
$query = "DELETE FROM movie WHERE id = 3";
$mysqli->query($query);

$mysqli->close(); */
