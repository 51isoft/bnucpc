<?php
$title=$_POST['title'];
$content=$_POST['content'];
include("db_conn.php");
session_start();
include("header.php");
require_once('class.phpmailer.php');
if ($_SESSION['isroot']==1) {
    $sql="select realname,mailaddress from user";
    $res=mysql_query($sql);
?>
      <div class="mainbar">
        <div class="article">
          <h2>群发邮件结果</h2><div class="clr"></div>
<?php
    $mail             = new PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = true;
    $mail->Host       = "mail.bnu.edu.cn"; // sets the SMTP server
    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "user"; // SMTP account username
    $mail->Password   = "pass";        // SMTP account password
    $mail->CharSet    = "UTF-8";
    $mail->SetFrom('addr', 'BNUCPC');
    $mail->Subject    = $title;
    $mail->Body       = $content;
    $cnt=1;
    while ($row=mysql_fetch_array($res)) {
        $address = $row['mailaddress'];
        $mail->AddBcc($address, $row["realname"]);
        $cnt++;
        if ($cnt%60==0) {
            if (!$mail->Send()) {
                echo "<p>发送失败！</p>\n";
            }
            else {
                echo "<p>发送成功！</p>\n";
            }
            $mail->ClearAddresses();
        }
    }
    if ($cnt%60!=0) {
        if (!$mail->Send()) {
            echo "<p>发送失败！</p>\n";
        }
        else {
            echo "<p>发送成功！</p>\n";
        }
        $mail->ClearAddresses();
    }
?>
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
