<?php
include("db_conn.php");
session_start();
include("header.php");
if ($_SESSION['isroot']==1) {
?>
      <div class="mainbar">
        <div class="article">
          <h2>群发邮件</h2><div class="clr"></div>
          <form action="deal_mailall.php" method="post">
            <table width="100%">
              <tr><th width="70px">标题：</th><td><input style="width:100%" name="title" type="text" /></td></tr>
              <tr><th>内容：</th><td><textarea style="width:100%;height:300px" name="content"></textarea></td></tr>
              <tr><th></th><td><input type="submit" value="发送" /></td></tr>
            </table>
          </form>
        </div>
      </div>
<?php
} else {
?>
      <div class="mainbar">
        <div class="article">
          <h2>非法访问</h2><div class="clr"></div>
          <p>这是管理员界面，您没有权限。<a href="javascript:window.history.back()">返回</a>重试。</p>
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
