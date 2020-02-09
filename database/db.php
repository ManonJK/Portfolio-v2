<?php
$param = parse_ini_file('db.ini');
try {
    $pdo = new pdo($param['url'], $param['user'], $param['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e) {
    echo $e->getMessage();
}
?>
