<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?= base_url('node_modules/flag-icons/css/flag-icons.css');?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include("layout/css");?> 
    <?= $this->include("layout/js");?>
</head>
<body>
<?= $this->include("layout/navbar");?>
<div class="container"> 
<?= $this->renderSection("content"); ?> 
</div>
</body>
</html>