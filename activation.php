<?php
include("header.php");
include("db_conn.php");
?>
      <div class="mainbar">
        <div class="article">
          <h2>邮箱激活</h2><div class="clr"></div>
          <p>
<?php
$sql="select mailaddress from user where username='".$_GET['user']."'";
$row=mysql_fetch_array(mysql_query($sql));
if ($row==null||base64_encode($row[0])!=$_GET['code']) {
    echo "激活失败，请与管理员<a href='mailto:acm@mail.bnu.edu.cn'>联系</a>。\n";
}
else {
    $sql="update user set activation=2 where username='".$_GET['user']."'";
    mysql_query($sql);
    echo "激活成功，请点击<a href='login.php'>此处</a>登录。\n";
}
?>
          </p>
        </div>
      </div>
<?php
include("footer.php");
?>

<script type="text/javascript">
$(".menu_nav #signup").addClass("active");
</script>
