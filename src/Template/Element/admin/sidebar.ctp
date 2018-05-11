<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
<!--    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <?= $this->Html->link("<i class=\"fa fa-fw fa-dashboard\"></i><span class=\"nav-link-text\">" . __('Dashboard') . "</span>", ['controller' => 'pages', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']) ?>
    </li>-->
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <?= $this->Html->link("<i class=\"fa fa-fw fa-shopping-cart \"></i><span class=\"nav-link-text\">" . __('Orders') . "</span>", ['controller' => 'orders', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']) ?>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <?= $this->Html->link("<i class=\"fa fa-fw fa-glass\"></i><span class=\"nav-link-text\">" . __('Products') . "</span>", ['controller' => 'products', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']) ?>
    </li>    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <?= $this->Html->link("<i class=\"fa fa-fw fa-tags\"></i><span class=\"nav-link-text\">" . __('Comments') . "</span>", ['controller' => 'comments', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']) ?>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        <?= $this->Html->link("<i class=\"fa fa-fw fa-user\"></i><span class=\"nav-link-text\">" . __('Users') . "</span>", ['controller' => 'users', 'action' => 'index'], ['escape' => false, 'class' => 'nav-link']) ?>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text"><?= __('Settings') ?></span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <?= $this->Html->link(__('General'), ['controller' => 'settings', 'action' => 'edit',1]) ?>
            </li>
<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <?= $this->Html->link(__('Roles'), ['controller' => 'roles', 'action' => 'index']) ?>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <?= $this->Html->link(__('Permissions'), ['controller' => 'permissions', 'action' => 'index']) ?>
            </li>-->
        </ul>
    </li>
</ul>