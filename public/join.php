<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Join</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/script.js"></script>
</head>
<body id="join">

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
    <div class="content">
      <div id="contents" class="main-center">
        <h1>ユーザー登録</h1>
        <section>
          <h2 class="icon">Join us</h2>
          <!-- タブ表示 -->
          <ul>
            <li><a id="tab" href="#tab1" class="current">利用者</a></li>
            <li><a id="tab" href="#tab2">飲食店</a></li>
          </ul>
          <div id="tab1" class="form">
            <form method="POST">
              <dl>
                <dt><span class="required">お名前</span></dt>
                <dd><input type="text" name="name" class="name" required></dd>
                <dt><span class="required">メールアドレス</span></dt>
                <dd><input type="email" name="email" class="email" required></dd>
                <dt>メッセージ（任意）</dt>
                <dd><textarea name="message" class="message"></textarea></dd>
              </dl>
              <button type="submit">送信</button>
            </form>
            <div class="attention">
              <p>※ テストサイトのためダミーの情報を入力ください。</p>
            </div>
          </div>
          <div id="tab2" class="form">
            <form>
              <dl>
                <dt><span class="required">店名</span></dt>
                <dd><input type="text" name="name" class="name" required></dd>
                <dt><span class="required">メールアドレス</span></dt>
                <dd><input type="email" name="email" class="email" required></dd>
                
                <dt><span class="required">カテゴリ</span></dt>
                <dd>
                  <input type="checkbox" name="category" value="restaurant" required>レストラン
                  <input type="checkbox" name="category" value="cafe" required>カフェ
                  <input type="checkbox" name="category" value="bar" required>バー
                </dd>
                <dt>メッセージ（任意）</dt>
                <dd><textarea name="message" class="message"></textarea></dd>
              </dl>
              <button type="submit">送信</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>

  <footer>
    <small>(C)2021 Ryusei Yamamoto</small>
  </footer>

</body>
</html>