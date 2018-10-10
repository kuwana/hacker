<?php
session_start();
$content = $_GET['content'];
?>
<html>
<body>
  <h1>掲示板</h1>
  <form action="bbs.php" method="get">
    内容:<input type="text" name="content"><br/>
    <input type="submit" value="確認">
    <input type="reset" value="リセット">
  </form>
  <h2>投稿一覧</h2>
  <ul>
      <li><?php echo $content; ?></li>
  </ul>
</body>
</html>
