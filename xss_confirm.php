<?php
  session_start();
  $name = $_GET['name'];
  $url = $_GET['url'];
?>
<html>
<body>
  <h1>ユーザー情報登録確認</h1>
  <form action="xss_regist.php" method="get">
    名前:<?php echo $name; ?><br/>
    URL:<?php echo $url; ?><br/>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="url" value="<?php echo $url; ?>">
    <input type="submit" value="登録">
    <input type="button" value="戻る" onclick="javascript:history.back();">
  </form>
</body>
</html>
