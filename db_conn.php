<?php
    include("config.php");
    include("cookie.php");
    function db_connect() {
        global $db_addr, $db_user, $db_pass, $db_table;
        $con = mysql_connect($db_addr,$db_user,$db_pass);
        mysql_query('SET NAMES "utf8"',$con);
        if (!$con)  {
            return false;
        }
        $sql = mysql_select_db($db_table,$con);
        if (!$sql) return false;
    }
    function convert_str ($str) { 
       if ($str===null) return "";  
       if (get_magic_quotes_gpc()) 
       { 
          return $str; 
       } 
       return mysql_real_escape_string ($str); 
    }
    function convert_all_str($arr) {
        if ($arr==null) return null;
        if (!is_array($arr)) {
            return convert_str($arr);
        }
        foreach ($arr as $k=>$a) {
            if (is_array($a)) $arr[$k]=convert_all_str($a);
            else if ($k!="op_content") $arr[$k]=convert_str($a);
            else $arr[$k]=$a;
        }
        return $arr;
    }
    function pwd($a) {
        return sha1(md5($a."dfs;j90i")."1p304uijoek");
    }

    function db_user_match($user, $password) {
        //if ($user==""||$password="") return false;
        $result = mysql_query("select * from user where username = '$user' and password='$password'");
        $row = @mysql_num_rows($result);
        if ($row == 1) return true;
        else return false;
    }
    function db_user_exist($username) {
        $result = mysql_query("select username from user where username = '$username'");
        $row = @mysql_num_rows($result);
        if ($row==1) return true;
        else return false;
    }
    function db_user_isroot($username) {
        if (!db_user_exist($username)) return false;
        $result = mysql_query("select isroot from user where username = '$username'");
        $row = mysql_fetch_array($result);
        if ($row[0]==1) return true;
        else return false;
    }

    db_connect();
    $_COOKIE=convert_all_str($_COOKIE);
    $_GET=convert_all_str($_GET);
    $_POST=convert_all_str($_POST);
?>
