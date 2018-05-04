<?php
//$this->layout = 'login';
$cakeDescription = 'SB Admin - Start Bootstrap Template';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?php
        $css = array(
            'admin/bootstrap.css',
            'admin/font-awesome.css',
            'admin/sb-admin.css',
        );
        ?>
        <?= $this->Html->css($css, ['plugin' => false]); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>

    <body class="bg-dark">
        <?= $this->Flash->render() ?>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
        <?php
            $script = array(
                'admin/jquery.js',
                'admin/bootstrap.bundle.js',
                'admin/jquery.easing.js'
            );
            ?>
            <?= $this->Html->script($script, ['plugin' => false]) ?>
            <?= $this->fetch('script') ?>
    </body>

</html>
