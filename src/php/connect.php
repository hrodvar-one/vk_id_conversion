<?php
// создаём новую базу (процедурный интерфейс)
$db = sqlite_open("db.sqlite");

// создаём таблицу foo
sqlite_query($db, "CREATE TABLE foo (id INTEGER PRIMARY KEY, name CHAR(255))");

// добавляем что-нибудь для примера
sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia')");
sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia2')");
sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia3')");

// выполняем запрос
$result = sqlite_query($db, "SELECT * FROM foo");
// проходим в цикле выборкой по ячейкам
while ($row = sqlite_fetch_array($result)) {
    print_r($row);
    /* каждый результат будет выглядеть примерно так
   Array
   (
       [0] => 1
       [id] => 1
       [1] => Ilia
       [name] => Ilia
   )
*/
}

// закрываем соединение с базой
sqlite_close($db);
