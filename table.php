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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title></title>
  </head>
  <body>

    <nav class="navber navber-dark bg-dark">
      <div class="container-fluir">
        <div class="navber-header">
          <a href="" class="navber-brand">phpsample</a>
        </div>

      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">DB-manager</h1>
        <p class="lead">LAMP環境を構築し、DBを操作するアプリケーションです<br>
                        デザインはBOOTSTRAPを使用しています。
        </p>
      </div>
    </div>

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="demo2.html">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Active" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="tab1" class="tab-pane active">
        <table class="table table-hover mt-2">
          <thead class="thead-dark">
            <tr>
              <th>id</th>
              <th>name</th>
              <th>age</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($result as $value){?>
              <tr>
                <th><?php echo "$value[id]"?></th>
                <th><?php echo "$value[name]"?></th>
                <th><?php echo "$value[age]"?></th>
              </tr>
            <php)?}
          </tbody>
        </table>
      </div>
    </div>
  <!-- JS, Popper.js, and jQuery -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
