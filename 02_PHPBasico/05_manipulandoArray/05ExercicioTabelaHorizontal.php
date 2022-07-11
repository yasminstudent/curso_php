<?php
$array = [
    'nome' => 'Yasmin',
    'idade' => 20,
    'empresa' => 'upLexis',
    'cor' => 'Parda',
    'profissao' => 'Developer',
];

$keys = array_keys($array);
$values = array_values($array);
?>

<table border="1">
    <tr>
        <?php foreach ($keys as $key): ?>
            <th width="80"> 
                <?php echo $key; ?> 
            </th>
        <?php endforeach; ?>
    </tr>
    <tr align="center">
        <?php foreach ($values as $value): ?>
            <td width="80"> 
                <?php echo $value; ?> 
            </td>
        <?php endforeach; ?>
    </tr>
</table>