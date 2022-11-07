<?php
$lines = range(1,10);
$numberLines = count($lines);
$columns = range(2,10);
$numberColumns = count($columns);
?>

<table border="1">
    <?php
        for($i = 0; $i < $numberLines; $i++) {
            $line = $lines[$i];
    ?>
            <tr>
                <td>
                    <?=$line?> 
                </td>
                <?php
                    for ($j = 0; $j < $numberColumns; $j++) {
                        echo "<td>". $line * $columns[$j] ."</td>";
                    }
                ?>
            </tr>
    <?php
        }
    ?>
</table>
