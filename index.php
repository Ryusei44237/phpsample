<?php
$dsn = 'mysql:dbname=sampledb;host=localhost;';
$user = 'Ryusei';
$password = 'Ryusei44237';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from user";
    $result = $dbh->query($sql);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>hello</h1>
  </body>
</html>
