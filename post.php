<!-- POSTメソッドの確認 -->
<?php echo "--POSTメソッド--<br>";?>
<div>
  名前：<?php echo $_POST['username']; ?>
</div>
<div>
  パスワード：<?php echo $_POST['pwd']; ?>
</div>
<div>
  個数：<?php echo $_POST['username']; ?>
</div>
<div>
  価格：<?php echo $_POST['pwd']; ?>
</div>
 
<!-- 隠しフィールドを使用してみる -->
<?php
echo "<br>--隠しフィールド--<br>";
// var_dump($_POST);
$num = $_POST['num'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$sum = $num * $price;
$sum -= $sum * $discount / 100;
echo '合計：' , round($sum) , '円';
?>
