<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>Seznam Poláků</h1>
<?php
$table = new \CodeIgniter\View\Table();
$template = array(
    'table_open'=> '<table class="ta;ble table-bordered">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=>' </tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
    );
    
    $table->setTemplate($template);
$table->setHeading('Jméno','Výška','Váha','Země');
foreach($hraci as $row){
    $table->addRow($row->jmeno, $row->vyska, $row->vaha, $row->country);
}
echo $table->generate();
?>
</div>
</body>
</html>


