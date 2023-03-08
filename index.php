<?php
 // PHP Data Objects – это прослойка, которая предлагает универсальный способ работы с несколькими базами данных.»
try {
    $connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root","root");
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );

    # запись к бд
    $query = "INSERT test ( name) VALUE ( 'reer')";
    $connection->exec($query);

# c бд
    $queryShow = "SELECT * FROM test";

    $statement = $connection->query($queryShow);

// get all publishers
    $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($publishers) {
        // show the publishers
        foreach ($publishers as $publisher) {
            echo $publisher['id']. " - ";
            echo $publisher['name'] . '<br>';
        }
    }

    # STH означает "Statement Handle"
    $STH = $connection->prepare("INSERT INTO folks ( first_name ) values ( 'Cathy' )");
    $STH->execute();

// PDO::FETCH_ASSOC: возвращает массив с названиями столбцов в виде ключей
//PDO::FETCH_BOTH (по умолчанию): возвращает массив с индексами как в виде названий стобцов, так и их порядковых номеров
//PDO::FETCH_BOUND: присваивает значения столбцов соответствующим переменным, заданным с помощью метода ->bindColumn()
//PDO::FETCH_CLASS: присваивает значения столбцов соответствующим свойствам указанного класса. Если для какого-то столбца свойства нет, оно будет создано
//PDO::FETCH_INTO: обновляет существующий экземпляр указанного класса
//PDO::FETCH_LAZY: объединяет в себе PDO::FETCH_BOTH и PDO::FETCH_OBJ
//PDO::FETCH_NUM: возвращает массив с ключами в виде порядковых номеров столбцов
//PDO::FETCH_OBJ: возвращает анонимный объект со свойствами, соответствующими именам столбцов

    # закрывает подключение
    $connection = null;



}
catch(PDOException $e) {
    echo "у нас проблемы.";
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}





