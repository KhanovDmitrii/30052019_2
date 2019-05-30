<?php
 $dbloc = 'kodaktor.ru' ;
 $dbuser = 'user5';
 $dbname = 'user5';
 $dbpass = 'Qwerty.123';
 $dsn = "mysql:host={$dbloc};dbname={$dbname}";
 return new PDO($dsn, $dbuser, $dbpass);
