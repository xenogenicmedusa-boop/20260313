<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12a1.php</title>
</head>
<body>
   <table border="1">
    <?php
    for ($i=0;$i<=100;$i++){?>
    
           <tr>
       <td style="width:200px;">i
        </td>
        <td style="width:200px;"><?=$i?>
       </td>
       </tr>
<?php
    }?>
</table>
<hr/>

</body>
</html>