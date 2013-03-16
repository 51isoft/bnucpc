<?php
include("header.php");
?>
      <div class="mainbar">
        <div class="article">
          <h2>竞赛报名</h2><div class="clr"></div>
          <p><b style="color:red">外校同学请不要在此注册！</b></p>
          <form method="post" action="register_check.php">
            <table width="100%">
              <tr><th width="20%">用户名：</th><td><input type="text" name="username" />（用户名仅可由大小写字母、下划线组成）</td></tr>
              <tr><th>密码：</th><td><input type="password" name="password" /></td></tr>
              <tr><th>确认密码：</th><td><input type="password" name="repassword" /></td></tr>
              <tr><th>姓名：</th><td><input type="text" name="realname" /></td></tr>
              <tr><th>性别：</th><td><input type="radio" name="sex" value="男" checked="true" />男 &nbsp;&nbsp; <input type="radio" name="sex" value="女" />女</td></tr>
              <tr><th>邮箱：</th><td><input type="text" name="mailaddress" />（重要联系方式！请正确填写并经常性的查收邮件。）</td></tr>
              <tr><th>手机：</th><td><input type="text" name="mobilephone" />（重要联系方式！请认真填写。）</td></tr>
              <tr>
                <th>部院系所：</th>
                <td>
                  <select name="depart">
<option value="教育学部">教育学部</option>
<option value="经济与工商管理学院">经济与工商管理学院</option>
<option value="汉语文化学院">汉语文化学院</option>
<option value="文学院">文学院</option>
<option value="艺术与传媒学院">艺术与传媒学院</option>
<option value="化学学院">化学学院</option>
<option value="管理学院">管理学院</option>
<option value="数学科学学院">数学科学学院</option>
<option value="环境学院">环境学院</option>
<option value="外国语言文学学院">外国语言文学学院</option>
<option value="地理学与遥感科学学院">地理学与遥感科学学院</option>
<option value="核科学与技术学院">核科学与技术学院</option>
<option value="法学院">法学院</option>
<option value="信息科学与技术学院">信息科学与技术学院</option>
<option value="物理学系">物理学系</option>
<option value="生命科学学院">生命科学学院</option>
<option value="继续教育与教师培训学院">继续教育与教师培训学院</option>
<option value="天文系">天文系</option>
<option value="资源学院">资源学院</option>
<option value="哲学与社会学学院">哲学与社会学学院</option>
<option value="社会发展与公共政策学院">社会发展与公共政策学院</option>
<option value="体育与运动学院">体育与运动学院</option>
<option value="心理学院">心理学院</option>
<option value="历史学院">历史学院</option>
<option value="马克思主义学院(政治学与国际关系学院)">马克思主义学院(政治学与国际关系学院)</option>
<option value="全球变化与地球系统科学研究院">全球变化与地球系统科学研究院</option>
<option value="中国社会管理研究院">中国社会管理研究院</option>
<option value="人文宗教高等研究院">人文宗教高等研究院</option>
<option value="刑事法律科学研究院">刑事法律科学研究院</option>
<option value="首都基础教育研究院">首都基础教育研究院</option>
<option value="脑与认知科学研究院">脑与认知科学研究院</option>
<option value="水科学研究院">水科学研究院</option>
<option value="医学研究院">医学研究院</option>
<option value="中文信息处理研究所">中文信息处理研究所</option>
<option value="经济与资源管理研究院">经济与资源管理研究院</option>
<option value="农村教育与农村发展研究院">农村教育与农村发展研究院</option>
<option value="高等教育研究所">高等教育研究所</option>
<option value="减灾与应急管理研究院">减灾与应急管理研究院</option>
<option value="国家教育考试评价研究院">国家教育考试评价研究院</option>
<option value="教育部基础教育质量监测中心">教育部基础教育质量监测中心</option>
<option value="北京文化发展研究院">北京文化发展研究院</option>
<option value="数学与数学教育研究所">数学与数学教育研究所</option>
<option value="分析测试中心">分析测试中心</option>
<option value="首都教育经济研究院">首都教育经济研究院</option>
<option value="古籍与传统文化研究院">古籍与传统文化研究院</option>
<option value="基础教育课程研究中心">基础教育课程研究中心</option>
<option value="民俗典籍文字研究中心">民俗典籍文字研究中心</option>
<option value="文艺学研究中心">文艺学研究中心</option>
<option value="北京京师文化创意产业研究院">北京京师文化创意产业研究院</option>
<option value="中国文化国际传播研究院">中国文化国际传播研究院</option>
<option value="出版科学研究院">出版科学研究院</option>
<option value="中国教育政策研究院">中国教育政策研究院</option>
<option value="国民核算研究院">国民核算研究院</option>
<option value="汉语国际推广新师资培养基地">汉语国际推广新师资培养基地</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>年级：</th>
                <td>
                  <select name="grade">
<option value="本科2011级">本科2011级</option>
<option value="本科2010级">本科2010级</option>
<option value="本科2009级">本科2009级</option>
<option value="本科2008级">本科2008级</option>
<option value="硕士2011级">硕士2011级</option>
<option value="硕士2010级">硕士2010级</option>
<option value="硕士2009级">硕士2009级</option>
                  </select>
                </td>
              </tr>
              <tr><th>学号：</th><td><input type="text" name="sno" /></td></tr>
              <tr><th></th><td><input type="submit" value="注册" /></td></tr>
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
