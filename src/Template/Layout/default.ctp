<?php
$cakeDescription = 'Soda Premier - Bolivia';
?>
<!DOCTYPE html>
<html lang="es" class="no-js"> 
    <head>
        <?= $this->Html->charset() ?>
        <meta name="description" content="Pagina creada para clientes selectivos de distribución por mayor y menor de Gaseosas é Jugos">
        <meta name="keywords" content="Refrescos, Gaseosas, jugos, niños, cumpleaños, fiestas">
        <meta name="author" content="jhonaleo77@gmail.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <?php
        $css = array(
            'font-awesome.min.css',
            'bootstrap.min.css',
            'jquery.fancybox.css',
            'animate.css',
            'main.css',
            'media-queries.css',
        );
        ?>
        <?= $this->Html->css($css); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>

    <body id="body">
        <div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>
        <?= $this->element('header') ?>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <?= $this->element('footer') ?>

        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        <?php
        $script = array(
            'jquery-1.11.1.min.js',
            'jquery.singlePageNav.min.js',
            'bootstrap.min.js',
            'jquery.fancybox.pack.js',
            'jquery.mixitup.min.js',
            'jquery.parallax-1.1.3.js',
            'jquery-countTo.js',
            'jquery.appear.js')
        ?>
        <?= $this->Html->script($script) ?>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <?= $this->Html->script('jquery.easing.min.js') ?>
        <?= $this->Html->script('wow.min.js') ?>
        <script>
            var wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 120, // distance to the element when triggering the animation (default is 0)
                mobile: false, // trigger animations on mobile devices (default is true)
                live: true        // act on asynchronously loaded content (default is true)
            }
            );
            wow.init();
        </script> 
        <?= $this->Html->script('custom.js') ?>
        <script type="text/javascript">
            $(function () {

                $('#contact-form').validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: "come on, you have a name don't you?",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "no email, no message"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function (form) {
                        $(form).ajaxSubmit({
                            type: "POST",
                            data: $(form).serialize(),
                            url: "process.php",
                            success: function () {
                                $('#contact-form :input').attr('disabled', 'disabled');
                                $('#contact-form').fadeTo("slow", 0.15, function () {
                                    $(this).find(':input').attr('disabled', 'disabled');
                                    $(this).find('label').css('cursor', 'default');
                                    $('#success').fadeIn();
                                });
                            },
                            error: function () {
                                $('#contact-form').fadeTo("slow", 0.15, function () {
                                    $('#error').fadeIn();
                                });
                            }
                        });
                    }
                });
            });
        </script>
        <?= $this->fetch('script') ?>
    </body>
</html>
