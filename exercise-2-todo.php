<?php
session_start();
// urlの取得は$_SERVER['PHP_SELF']を使う
$self_url = $_SERVER['PHP_SELF'];
?>

<!-- 今いるurlに対して情報を送る -->
<form action="<?php echo $self_url; ?>" method="POST">
  <input type="text" name="title">
  <input type="submit" name="type" value="create">
</form>


<?php
if(isset($_POST['type'])) {
    if($_POST['type'] === 'create') {
        $_SESSION['todos'][] = $_POST['title'];
        echo "新しいタスク [ {$_POST['title']} ] が追加されました。";
    } elseif($_POST['type'] === 'update') {
        $_SESSION['todos'][$_POST['id']] = $_POST['title'];
        echo "タスク [ {$_POST['title']} ] の名前が変更されました";
    } elseif($_POST['type'] === 'delete') {
        array_splice($_SESSION['todos'], $_POST['id'], 1);
        echo "タスク [ {$_POST['title']} ] が削除されました。";
    }
}


// 配列として使用する場合は初期化が必要
if(empty($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
    echo "タスクを入力してください。";
    die();
}
?>

<ul>
  <!-- for分では{}を使って記述するがhtmlと一緒に用いる場合は:を使うことができる -->
  <?php for($i = 0; $i < count($_SESSION['todos']); $i++): ?>
  <li>
    <form action="<?php echo $self_url; ?>" method="POST">
      <input type="hidden" name="id" value="<?php echo $i; ?>">
      <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i]; ?>">
      <input type="submit" name='type' value="delete">
      <input type="submit" name='type' value="update">
    </form>
  </li>
  <?php endfor; ?>
</ul>
