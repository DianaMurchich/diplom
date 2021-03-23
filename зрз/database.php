<?php

require_once('connect.php');

$id = 97; //Тестовые данные, используются в запросах
$id2 = 90; //Тестовые данные, используются в запросах

try {
    //Работу с любыми внешними источниками желательно оборачивать в try..catch

    // ================= SELECT - получить данные из таблицы
    // (в данном случае, сортируем по убыванию стобца id и выводим первые 5 записей)

    $data = $conn->prepare( "SELECT * FROM test.products ORDER BY  id  DESC LIMIT 5 ");
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

    // ================= INSERT - добавляем новую запись в БД. 
    // (в данном случае, добавляем сразу несколько записей. Тестовые данные берём из переменных $id и $id2, которые получаем выше)

    // $data = $conn->prepare("INSERT INTO speed.test (id, countX, countY, xz) VALUES (null, :param1, :param2, :param3), (null, :param4, :param5, :param6)");
    // $values = ['param1' => $id, 'param2' => $id, 'param3' => $id, 'param4' => $id2, 'param5' => $id2, 'param6' => $id2];
    // $data->execute($values);
    // echo $conn->lastInsertId(); // Выводит номер первой добавленной записи


    // ================= UPDATE - перезапишет указанные столбцы в какой-то записи
    // Если не ограничить жадность запроса, то перезапишет одинаковыми данными ВСЕ записи!!! 
    // Обновляем 2 записи, меняем значения 2 столбцов (в данном случае обновляем, 
    // если совпадают $id или $id2, который получаем выше)

    // $data = $conn->prepare( "UPDATE speed.test SET countX = 30, countY = 1 WHERE id = :id OR id = :id2");
    // $values = ['id' => $id, 'id2' => $id2];
    // $data->execute($values);


    // ================= DELETE - удаляет запись из БД
    // Если не ограничить жадность запроса, то удалит ВСЁ!!! 
    // (в данном случае ограничиваем по $id, который получаем выше)

    // $data = $conn->prepare("DELETE FROM speed.test WHERE id = :id_del");
    // $values = ['id_del' => $id];
    // $data->execute($values);

} catch (Exception $e) {
    // Если происходит ошибка в блоке try, то мы попадаем сюда и в переменную $e сохраняем ошибку

    echo $e;    // Выводим ошибку
}

?>
