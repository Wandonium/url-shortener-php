<?php
$pdo = new PDO('mysql:dbname=my_db;host=mysql', 'root', 'root@123', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];