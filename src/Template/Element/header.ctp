<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="img/logo.png" alt="Brandi">
                </h1>
            </a>
        </div>

        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="#body">INCIO</a></li>
                <li><a href="#features"><?= __('MISION Y VISION') ?></a></li>
                <li><a href="#works"><?= __('PRODUCTOS') ?></a></li>
                <li><a href="#facts"><?= __('RECORD') ?></a></li>
                <li><a href="#order"><?= __('PEDIDOS') ?></a></li>
                <li><a href="#contact"><?= __('CONTACTO') ?></a></li>
                <!--<li><a href="./admin"><?= __('LOGIN') ?></a></li>-->
                <li><?= $this->Html->link('LOGIN','/admin/login', array('class' => 'external')); ?></li>
            </ul>
        </nav>

    </div>
</header>
