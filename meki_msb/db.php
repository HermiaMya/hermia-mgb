<?php

include ('db_account.php');
$dsn = $db_host;
$pdo = new PDO($dsn,$db_user,$db_pwd);

function write($pdo,$sql){
    $sth = $pdo->prepare($sql);
    return $sth->execute();
}

function read($pdo,$sql)
{
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $rows = $sth->fetchAll();
    return $rows;
}
?>