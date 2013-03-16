<?php
include("db_conn.php");
if (db_user_match($_POST['username'],pwd($_POST['password']))&&db_user_isroot($_POST['username'])) {
    session_start();
    $_SESSION['isroot']=1;
}
include("header.php");
if (db_user_match($_POST['username'],pwd($_POST['password']))) {
    $row=mysql_fetch_array(mysql_query("select * from user where username='".$_POST['username']."'"));
?>
      <div class="mainbar">
        <div class="article">
          <h2>我的信息</h2><div class="clr"></div>
          <table width="100%">
              <tr><th>姓名：</th><td><?php echo $row['realname']; ?></td></tr>
              <tr><th>性别：</th><td><?php echo $row['sex']; ?></td></tr>
              <tr><th>邮箱：</th><td><?php echo $row['mailaddress']; ?></td></tr>
              <tr><th>手机：</th><td><?php echo $row['mobilephone']; ?></td></tr>
              <tr><th>部院系所：</th><td><?php echo $row['depart']; ?></td></tr>
              <tr><th>年级：</th><td><?php echo $row['grade']; ?></td></tr>
              <tr><th>学号：</th><td><?php echo $row['sno']; ?></td></tr>
              <tr><th>激活状态：</th><td><?php if ($row['activation']==1) echo "<b style='color:red'>未激活</b>"; else if ($row['activation']==2) echo "<b style='color:green'>已激活</b>"; ?></td></tr>
<?php
    if ($row['activation']==2) {
        if ($row['mark']==0) {
            $crow=mysql_fetch_array(mysql_query("select * from contest where userid_id='".$row['id']."'"))
?>
              <tr><th colspan="2">网络预赛帐号信息</th></tr>
              <tr><th>用户名：</th><td><?php echo $crow['cname']; ?></td></tr>
              <tr><th>密码：</th><td><?php echo $crow['cpass']; ?></td></tr>
<?php
        }
        else {
?>
              <tr><th colspan="2">网络预赛帐号信息</th></tr>
              <tr><th colspan="2">就不告诉你们～</th></tr>
<?php
        }
    }
?>
          </table>
        </div>
<?php
    if ($_SESSION['isroot']==1) {
?>
        <div class="article">
          <h2>控制面板</h2><div class="clr"></div>
          <a href="listall.php">展示名单</a>
          <a href="mailall.php">群发邮件</a>
        </div>
<?php
    }
?>
      </div>
<?php
} else {
?>
      <div class="mainbar">
        <div class="article">
          <h2>我的信息</h2><div class="clr"></div>
          <p>登录失败，请检查用户名密码。<a href="javascript:window.history.back()">返回</a>重试。</p>
        </div>
      </div>
<?php
}
include("footer.php");
?>

<script type="text/javascript">
$(".menu_nav #signup").addClass("active");
$("input:submit").button();
</script>
