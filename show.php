<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>留言板</title>
</head>
<body>
<?php
   include("config.php");
   $sql = "SELECT * FROM users ORDER BY 'id' DESC"; //排序 后留言的在前面显示 
   $result = mysql_query($sql);
   while($row = mysql_fetch_row($result))
   {  // ----if语句判断男女------
          if($row[2]==1)
      {   $gender = '男';}
        else
      {   $gender = '女'; }
 ?>
<form method="POST" action="input.php" >
  <p>你的留言内容:</p>
        <p><textarea rows="9" name="info" cols="35"></textarea></p>
        <p><input type="submit" value="提交" name="B1"/><input type="reset" value="重设" name="B2" /></p>
</form>
<table width="752" border="1">
   <tr>
     <td height="32"><p><?=$row[6]?> <?=$row[5]?> </p>
     <p><?=$row[1]?>(<?=$gender?>)  <?=$row[3]?></p></td>
   </tr>
   <tr>
     <td height="45"><?=nl2br($row[4])?><p><a href="change.php?id=<?=$row[0]?>">[修改]</a> <a href="del.php?id=<?=$row[0]?>">[删除]</a></p></td>
   </tr>
 </table>
 <hr /> 
 }
 <?php
   mysql_free_result($result);
 ?>
</body>
</html>