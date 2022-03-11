<?php
$a = 0;
$a1 = 1;
$b = 0;
$b1 =1;
?>

<br>
<p>Таблица Истинности в PHP</p>
    <table class="truths">
        <tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A & B</th><th>A xor B</th></tr>          
        <tr><td><?php echo $a;?></td><td><?php echo $b;?></td><td><?php echo !$a;?></td><td><?php echo $a || $b;?></td><td><?php echo $a & $b;?></td><td><?php echo $a ^ $b;?></td></tr>
        <tr><td><?php echo $a;?></td><td><?php echo $b1;?></td><td><?php echo !$a;?></td><td><?php echo $a || $b1;?></td><td><?php echo $a & $b1;?></td><td><?php echo $a ^ $b1;?></td></tr>
        <tr><td><?php echo $a1;?></td><td><?php echo $b;?></td><td><?php echo !$a1;?></td><td><?php echo $a1 || $b;?></td><td><?php echo $a1 & $b;?></td><td><?php echo $a1 ^ $b;?></td></tr>
        <tr><td><?php echo $a1;?></td><td><?php echo $b1;?></td><td><?php echo !$a1;?></td><td><?php echo $a1 || $b1;?></td><td><?php echo $a1 & $b1;?></td><td><?php echo $a1 ^ $b1;?></td></tr>
    </table> 