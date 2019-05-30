<?php
 $conn = require_once('db.php');
 $sql = "SELECT `anime_id`,`name`,`text` FROM anime";
  $conn -> exec('SET CHARACTER SET utf8');
 $result = $conn -> query($sql);

 while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo "Позиция: " . $row -> anime_id . " ";
    echo "<br>";
    echo 'Название: '. $row -> name.  ' ';
    echo "<br>";
    echo 'Комментарий: '. $row -> text.  ' ';
    echo "<br>";
    }/**/
