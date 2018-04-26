<?php
require_once('vendor/autoload.php');
$data = new \Controllers\IndexController();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>HMD :: Challenge Two</title>
        <link rel="stylesheet" href="app/Resources/css/default.css" >
    </head>
    <body>
        <section class="content">
            <div class="title">
                Challenge Two :: Hugo Minari Diniz
            </div>
            <?php echo $data->showContent(); ?>
        </section>
    </body>
</html>