<?php

$content = $_POST['content'];
$username = $_POST['username'];

if( trim($content) =='' || trim($username) == '')
{
    echo '用户名、留言内容不能为空';
    exit;
}
if( $username == 'admin' || $username == 'root' || $username == '领导人')
{
    echo '用户名不能为敏感字';
    exit;
}

require('db.php');
$sql = "insert into msg (username,content) values('{$username}','{$content}')";

write($pdo,$sql);


header('location:pic.php');
?>

