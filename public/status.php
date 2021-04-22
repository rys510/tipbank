<?php

require('functions.php');

$filename = 'sendlist.txt';
$sendlists = file($filename, FILE_IGNORE_NEW_LINES);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Status</title>
</head>
<body id="shop">
  
  <header>
    <div class="logo">
      <a href="index.php"><h2>tipbank</h2></a>
    </div>
    <nav>
      <ul class="global-nav">
        <li><a href="about.html">About</a></li>
        <li><a href="serch.html">Serch</a></li>
        <li><a href="join.php">Join</a></li>
      </ul>
    </nav>
  </header>

  <div id="wrap">
    <div class="content clearfix">
      <h1>Tip Send List</h1>
      <div class="flex">
        <div class="status-box">
          <ul>
            <?php foreach ($sendlists as $sendlist): ?>
              <li><?= h($sendlist); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <small>(C)2021 Ryusei Yamamoto</small>
  </footer>

</body>
</html>