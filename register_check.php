<?php
include("header.php");
include("db_conn.php");
require_once('class.phpmailer.php');
?>
      <div class="mainbar">
        <div class="article">
          <h2>注册结果</h2><div class="clr"></div>
          <p>
<?php
if (true) {
    echo "网上报名已结束。如还需报名请与组委会联系。\n";
}
else if (db_user_exist($_POST['username'])) {
    echo "用户名已存在，请<a href='javascript:window.history.back()'>返回</a>重新选择用户名。\n";
}
else {
    $s = $_POST['username'];
	for ($i = 0; $i < strlen($s); $i++)
	if ( $s[$i] >= '0' && $s[$i] <= '9' || $s[$i] >= 'a' && $s[$i] <= 'z' || $s[$i] >= 'A' && $s[$i] <= 'Z'|| $s[i]=='-' || $s[i]=='_')
	    continue;
	else break;
	if ($i != strlen($s) ) {
        echo "用户名非法，请<a href='javascript:window.history.back()'>返回</a>重新选择用户名。\n";
    }
    else if ($_POST['password']!=$_POST['repassword']) {
        echo "密码不一致，请<a href='javascript:window.history.back()'>返回</a>重新输入。\n";
    }
    else if ($_POST['username']==""||$_POST["password"]==""||$_POST["realname"]==""||$_POST["mailaddress"]==""||$_POST["mobilephone"]==""||$_POST["sno"]=="") {
        echo "信息输入错误，请<a href='javascript:window.history.back()'>返回</a>重新输入。\n";
    }
    else {
        $sql="insert into user set activation = 1, ".
            " username = '". $_POST['username'] ."', ".
            " password = '". pwd($_POST['password']) ."', ".
            " realname = '". $_POST['realname'] ."', ".
            " sex = '". $_POST['sex'] ."', ".
            " mailaddress = '". $_POST['mailaddress'] ."', ".
            " mobilephone = '". $_POST['mobilephone'] ."', ".
            " depart = '". $_POST['depart'] ."', ".
            " sno = '". $_POST['sno'] ."', ".
            " grade = '". $_POST['grade'] ."' ";
        $res=mysql_query($sql);
        if (!$res) {
            echo "注册失败，请与管理员<a href='mailto:acm@mail.bnu.edu.cn'>联系</a>。\n";
        }
        else {
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
        
            $mail->Subject    = "第十届北京师范大学程序设计竞赛帐号激活信";
            $mail->MsgHTML($_POST["realname"]." 同学：<br /><br />
欢迎参加 第十届北京师范大学程序设计竞赛，您的帐户尚未激活，请点击下面的地址激活您的注册帐户！<br />
<a target='_blank' href='http://acm.bnu.edu.cn/bnucpc/activation.php?user=".urlencode($_POST['username'])."&code=".urlencode(base64_encode($_POST['mailaddress']))."'> http://acm.bnu.edu.cn/bnucpc/activation.php?user=".urlencode($_POST['username'])."&code=". urlencode(base64_encode($_POST['mailaddress'])) ." </a><br />
请牢记您的用户名和密码，您的用户名是：".$_POST['username']."<br />
请随时关注您的邮箱，我们会将最新消息发送到您的邮箱。<br />
点击这里<a target='_blank' href='http://acm.bnu.edu.cn'>http://acm.bnu.edu.cn</a>，登录大赛主页，关注大赛实时更新信息。<br />
大赛组委会邮箱：<a href='mailto:acm@mail.bnu.edu.cn'>acm@mail.bnu.edu.cn</a>
");
            
            $address = $_POST['mailaddress'];
            $mail->AddAddress($address, $_POST["realname"]);
        
            $mail->Send();
            echo "注册成功，已发送确认邮件到您的邮箱，请注意查收。点击<a href='signup.php'>这里</a>返回注册页。\n";
        }
    }
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
