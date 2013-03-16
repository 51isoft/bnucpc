<?php
include("header.php");
?>
      <div class="mainbar">
        <div class="article">
          <h2>登录</h2><div class="clr"></div>
          <form action="myinfo.php" method="post">
            <table width="100%">
              <tr><th width="20%">用户名：</th><td><input type="text" name="username" /></td></tr>
              <tr><th>密码：</th><td><input type="password" name="password" /></td></tr>
              <tr><th></th><td><input type="submit" value="登陆" /></td></tr>
            </table>
          </form>
        </div>
      </div>
<?php
include("footer.php");
?>

<script type="text/javascript">
$(".menu_nav #signup").addClass("active");
$("input:submit").button();
</script>
