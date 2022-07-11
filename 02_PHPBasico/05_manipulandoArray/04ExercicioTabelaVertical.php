<?php
$array = [
    'nome' => 'Yasmin',
    'idade' => 20,
    'empresa' => 'upLexis',
    'cor' => 'Parda',
    'profissao' => 'Developer',
];
?>

<table border="1">
<?php foreach ($array as $key => $value): ?>
    <tr>
        <th width="80"/>
            <?php echo $key; ?>
        </th>
        <td width="80">
            <?php echo $value; ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>