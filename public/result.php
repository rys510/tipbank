<?php

require('functions.php');

date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d H:i:s");
$tip = filter_input(INPUT_POST, 'tip');
$shopname = filter_input(INPUT_POST, 'shopname');

$filename = 'sendlist.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $date."\t".$shopname."\t". $tip."円\n");
fclose($fp);

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
  <title>About</title>
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
      <h1>Chip Sent</h1>
      <div class="flex">
        <div class="shop-box">
          <h3>チップが送信されました！</h3>
          <h2><?= h($tip); ?>円</h2>
          <a href="status.php"><button>チップ送信履歴</button></a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <small>(C)2021 Ryusei Yamamoto</small>
  </footer>
  
</body>
</html>