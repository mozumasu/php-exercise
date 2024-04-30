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
