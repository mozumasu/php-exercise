<!-- GETメソッド -->
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
