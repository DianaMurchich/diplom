<?php
$conn = new PDO('mysql:host = 127.0.0.1, dbname = diana', 'diana', '123123');

    $data = $conn->prepare("SELECT * FROM diana.product ORDER BY id ");
    $data->execute();
    echo "<pre>"; // 
    foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $key => $value){
        // перебираем в цикле данные из запроса сразу после получения не сохраняя в переменную
        echo $key . "<br>";
        foreach ($value as $k => $v){
            // Воторой цикл нужен, если надо разобрать двухуровневый массив по элементам
            echo $k . "--";
            echo $v . "<br>";
        } ;
        echo "<br>";
    };
    
?>


