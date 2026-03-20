<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
        <title>ch02_17.php</title>
</head>
<body>
    <h1>九九乘法表</h1>
    <table border=1px>
<thead>
    <tr>
        <th>x</th>
        <?php for ($i=1;$i<=9;$i++): ?>
        <th><?=$i?></th>
        <?php endfor; ?>
    </tr>
</thead>
<tbody>
    <?php for ($j=1;$j<=9;$j++): ?>
    <tr><th><?=$j?></th>
    <?php for ($i=1;$i<=9;$i++):?>
        <td><?=$i?>x<?=$j?>=<?= $i*$j?></td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
    <hr>
</tbody>

    </table>
</body>
</html>