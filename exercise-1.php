<?php
// exercise1: サイトに訪問した回数をカウント
//
// Sessionを使用した場合
session_start();
if(isset($_SESSION['EXERCISE_VISIT_COUNT'])) {
    // 2回目以降の訪問時
    $_SESSION['EXERCISE_VISIT_COUNT']++;
} else {
    // 初回訪問時
    $_SESSION['EXERCISE_VISIT_COUNT'] = 1;
}

?>
  <h1>訪問回数は <?php echo $_SESSION['EXERCISE_VISIT_COUNT'] ?> 回目です。</h1>
<hr>



<?php
// Cookieを使用した場合
$visit_count = 1;
if(isset($_COOKIE['EXERCISE_VISIT_COUNT'])) {
    // 2回目以降の訪問時
    $visit_count = $_COOKIE['EXERCISE_VISIT_COUNT'] + 1;
}
// cookieに値を設定
setcookie('EXERCISE_VISIT_COUNT', $visit_count);

?>
  <h1>訪問回数は <?php echo $_COOKIE['EXERCISE_VISIT_COUNT'] ?> 回目です。</h1>

<!-- NOTE:
$_COOKIEの連想配列に格納されるのはブラウザから来たリクエストヘッダーのクッキーの値。
初回リクエストを受け取った時点ではリクエストのヘッダーにクッキーは設定されていない。-->
