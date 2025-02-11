<!-- GETメソッド -->
<p>--GETメソッド--</p>
<form action="get.php" method="GET">
  <label for="username">username : </label>
  <input type="text" name="username">
  <br>
  <label for="pwd">pwd : </label>
  <input type="password" name="pwd">
  <br>
  <button type="submit">GETメソッド</button>
</form>

<!-- POSTメソッド -->
<p>--POSTメソッド--</p>
<form action="post.php" method="POST">
  <label for="username">username : </label>
  <input type="text" name="username">
  <br>
  <label for="pwd">pwd : </label>
  <input type="password" name="pwd">
  <br>
  <button type="submit">POSTメソッド</button>
</form>
 
<!-- フォームで配列を送る -->
<p>--フォームで配列を送る--</p>
<form action="receive.php">
  <div>
    <label for="account[id]">ID</label>
    <input type="text" name="account[id]">
  </div>
  <div>
    <label for="account[name]">name</label>
    <input type="text" name="account[name]">
  </div>
  <div>
    <label for="account[pwd]">password</label>
    <input type="text" name="account[pwd]">
  </div>
 <input type="submit" value="配列を送信">
</form>

<!-- 隠しフィールド
画面には入力欄を表示したくないが、値をサーバーに送りたいフィールドのこと
隠しフィールドは開発者ツールで値を変えて改ざんすることができるため、改ざんされたくない値はサーバー内に保存している値を使用する -->
<p>--隠しフィールド--</p>
<form action="post.php" method="POST">
  <div>
    個数：<input id="" type="number" name="num">
  </div>
  <div>
    価格：<input id="" type="price" name="price">
  </div>
  <div>
    割引：10%
  </div>
  <!-- 10%という値もサーバーに送りたいため、隠しフィールドを使う -->
  <input type="hidden" name="discount" value="10">
  <input type="submit" value="合計">
</form>

<p>--Cookie--</p>
<?php
setcookie('VISIT_COUNT', 1, [
  //有効期限一ヶ月に設定
  'expires' => time() + 60 * 60 * 24 * 30,
  //cookieが有効なパスを指定
  //'path' => '/',
]);
echo "var_dump()でサーバーに送信されたCOOKIEの値\$_COOKIEの中身を確認<br>";
var_dump($_COOKIE['VISIT_COUNT']);

echo "<br>\$_COOKIEに値を代入してもサーバーのCOOKIEの値は変更されないため注意"
?>

<p>--Session--</p>
<?php
session_start();
$_SESSION['VISIT_COUNT'] = 1;

echo "echo \$_SESSION['VISIT_COUNT']は" , $_SESSION['VISIT_COUNT'] , "です<br>";

echo "セッションファイルはupload_tmp_dirに保存される";
phpinfo();
