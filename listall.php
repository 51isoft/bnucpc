<?php
include("db_conn.php");
session_start();
include("header.php");
if ($_SESSION['isroot']==1) {
?>
      <div class="mainbar" style="width:100%">
        <div class="article">
          <h2>人员列表</h2><div class="clr"></div>
          <table width="100%" class="orglist" id="myTable">
            <thead><tr><th>姓名</th><th>院系</th><th>年级</th><th>学号</th><th>手机</th><th>Email</th><th>激活？</th></tr></thead>
            <tbody>
<?php
    $sql="select * from user";
    $res=mysql_query($sql);
    while ($row=mysql_fetch_array($res)) echo "<tr><td>".$row['realname']."</td><td>".$row['depart']."</td><td>".$row['grade']."</td><td>".$row['sno']."</td><td>".$row['mobilephone']."</td><td>".$row['mailaddress']."</td><td>".$row['activation']."</td></tr>\n";
?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"> Developed by <a href="http://acm.bnu.edu.cn/">BNU ACM/ICPC Team</a>. Layout by <a target="_blank" href="http://www.iwebsitetemplate.com/">Website Templates</a>, modified by <a href="http://acm.bnu.edu.cn/">51isoft</a>.</p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
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
    include("footer.php");
}
?>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script> 
<script type="text/javascript">
$(".menu_nav #signup").addClass("active");
$("#myTable").tablesorter(); 
$("input:submit").button();
</script>
