<?php
$dsn = 'mysql:dbname=sampledb;host=localhost;';
$user = 'Ryusei';
$password = 'Ryusei44237';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);
    $stmt->execute($params);

    header('Location: index.php?it=1');

} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?it=2?err='. $e->getMessage());
    exit();
}
?>
