<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12a.php</title>
</head>
<body>
<p></p>
      <table border="1">
<?php
      $i=0;
      $sum=0;
      While ($i<=100) {
       $i=$i+1; //$i++ 也可
       $sum=$sum+$i;
       ?>
       <tr>
            <td style="width:200px;">SUM</td>
            <td style="width:200px;"><?=$sum?></td>
       </tr> <?php } ?>
      </table>
     <p></p>
<hr/>

</body>
</html>