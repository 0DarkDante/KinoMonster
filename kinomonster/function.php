<?php

/* 
$i = 0;

/* while($i <= 10)  {
  echo $i. "<br>";
  $i ++;
}


do {
  echo $i. "<br>";
  $i++;
} while($i <= 10);


for($i=0; $i <= 10; $i ++) {
  echo $i. "<br>";
}
*/
/*
$arr[0] = "Продукты";
$arr[1] = "Бутылка с водой";
*/
/*
echo $arr[0]."<p>"; 
echo $arr[1];

print_r($arr);

echo count($arr)."<p>";

for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i]."<br>";
}
*/

/*$arr = array("product"=>"продукты", "water" =>"бутылка с водой");*/
/*
$arr=["Продукты","Бутылка с водой"];

/*unset($arr[0]);*/
/*
array_push($arr, "яблоко");

array_unshift($arr, "апельсин");

array_push($arr, "апельсин");

$arr = array_unique($arr);

/*$arr = array_reverse($arr);*/

/*sort($arr);*/

/*shuffle($arr);*/
/*
$arr2 = array("кокос", "арбуз");

$newarr = array_merge($arr, $arr2);



foreach ($newarr as $key => $value) {
  echo "Ключ к массиву ".$key." - Значение массива ".$value. "<br>" ;
}

/*$str = implode(" - ", $newarr);
echo "<br>".$str; */
/*
$str = "продукты, бутылка с водой, кокос";
$strtoarr = explode(", ", $str);

echo "<pre>";
print_r($strtoarr);
echo "</pre>";


/*$camera["market1"]["row1"][0] = "продукты";
$camera["market1"]["row1"][1] = "сумка";
$camera["market2"]["row2"][0] = "апельсин";
$camera["market2"]["row2"][1] = "фотоапарат";
$camera["market2"]["row2"][2] = "телефон";*/
/*
$camera = array(
    "market1"=>array(
        "row1"=>array(
            "продукты", "сумка"
        ),
        "row2"=>array(
          "апельсин", "фотоапарат","телефон"
        )    
        ),
        "market2"=>array(
          "row1"=>array(
              "продукты", "сумка"
          ),
          "row2"=>array(
            "апельсин", "фотоапарат","телефон"
          )    
      )
);



echo "<pre>";
print_r($camera);
echo "</pre>";

foreach($camera as $key => $value) {
  foreach ($value as $key2 => $value2) {
    foreach($value2 as $key3 => $value3 ){
    echo $value3;
    }
  }
}
*/






/*
print_r($_POST);
if(isset($_POST['name'])) {
  $nameFilter = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
  echo  "Мое имя, ".$nameFilter;
}
    
/*$user = "   ВаСЯ   ";
echo mb_strtolower(trim($user));*/









?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="/" method="post" >
      <input type="text" name="name" placeholder="Ваше имя">
      <textarea name="comment"></textarea>
      <input type="hidden" name="id_user" value="1313">
      <input type="submit" value="отправить">

  </form>


</body>
</html>




