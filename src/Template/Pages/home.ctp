<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">            
            <div class="item active" style="background-image: url(img/banner.jpg);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">SODA<span> PREMIER</span>!</h2>
                    <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/Gaseosas </span> de ALTA calidad</h3>
                    <p data-wow-duration="1000ms" class="wow slideInRight animated">Producto con todas las licencias y certficaciones del rubro</p>

                    <ul class="social-links text-center">
                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="item" style="background-image: url(img/banner.jpg);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">JUGOS<span> PREMIER</span>!</h2>
                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/JUGOS</span> de ALTA calidad</h3>
                    <p data-wow-duration="500ms" class="wow slideInRight animated">Producto con todas las licencias y certficaciones del rubro</p>

                    <ul class="social-links text-center">
                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>            
        </div>        
    </div>
</section>
<?= $this->Flash->render('not') ?>
<section id="features" class="features">
    <div class="container">
        <div class="row">        
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2>MISION Y VISION</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <!-- service item -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-github fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3>MISION</h3>
                        <p>Brindar a las familias Bolivianas diversos productos de calidad y excelencia.<br>
                            Diversificar nuestos mercados proyectando una solida imagen coorporaiva y garantizando la obtención de beneficios de manera sostenible.<br> Llevando adelante nuestra resposabilidad social y empresarial.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-pencil fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3>VISION</h3>
                        <p>Llegar a ser una Fabrica de Refrescos y Jugos de clase mundial con un crecimiento continuo capaz de proyectar su presencia en los mercados más competitivos expandiendonos nestras posiciones de liderazgo desde El Alto - Bolivia a todo el mundo.</p>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</section>

<section id="works" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2>GASEOSAS Y JUGOS</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p>BEBIDA GASEOSA ANALCOHOLICA HECHA A BASE DE:<BR>
                    Agua tratada y carbonatada, antioxidante: Benoato de Sodio E211,Edulcorante: Sacarina de Sodio 3954(II),<br> Ácido Citrico E330, Ácido Fosfórico E338 y esencias permitidas. </p>
            </div>

            <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                <ul class="text-center">
                    <li><a href="javascript:;" data-filter="all" class="active filter">Todas</a></li>
                    <li><a href="javascript:;" data-filter=".branding" class="filter">Gaseosas</a></li>
                    <li><a href="javascript:;" data-filter=".web" class="filter">Jugos</a></li>
                    <li><a href="javascript:;" data-filter=".logo-design" class="filter">Pomelo</a></li>
                    <li><a href="javascript:;" data-filter=".photography" class="filter">gINGER</a></li>
                </ul>
            </div>            
        </div>
    </div>

    <div class="project-wrapper">    
        <figure class="mix work-item branding">
            <img src="img/works/item-1.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item branding">
            <img src="img/works/item-1.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item web">
            <img src="img/works/item-2.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
            <img src="img/works/item-3.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item photography">
            <img src="img/works/item-4.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item branding">
            <img src="img/works/item-5.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item web">
            <img src="img/works/item-6.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
            <img src="img/works/item-7.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>

        <figure class="mix work-item photography">
            <img src="img/works/item-8.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Imagen expandida" href="img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
                <h4>Expandir Imagen</h4>
                <p>Fotografia</p>
            </figcaption>
        </figure>        
    </div>
</section>		

<section id="facts" class="facts">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row number-counters">                
                <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                    <h2>VIENDO (PENDIENTE)</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="counters-item">
                        <i class="fa fa-clock-o fa-4x"></i>
                        <strong data-to="3125">0</strong>
                        <p>Numero de Visitas</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="counters-item">
                        <i class="fa fa-users fa-4x"></i>
                        <strong data-to="100">0</strong>
                        <p>Clientes Satisfechos</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="counters-item">
                        <i class="fa fa-rocket fa-4x"></i>
                        <strong data-to="80">0</strong>
                        <p>Proyectos Realizados </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="counters-item">
                        <i class="fa fa-trophy fa-4x"></i>
                        <strong data-to="200">0</strong>

                        <p>Reconocimientos</p>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</section>	

<section id="order" class="order">
    <div class="container">
        <div class="row mb50">
            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Pedidos</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="contact-form">
                    
                    <?= $this->Flash->render('order') ?>
                    <h3>Formulario de pedido</h3>
                    <?= $this->Form->create(null,['url' => '/addOrder']) ?>
                    <fieldset>
                        <legend><?= __('Add Order') ?></legend>
                        <?php
                        echo $this->Form->control('full_name');
                        echo $this->Form->control('ci');
                        echo $this->Form->control('phono');
                        echo $this->Form->control('email');
                        echo $this->Form->control('status',['type'=>'hidden','value'=>'pendiente']);
                        echo $this->Form->control('user_id',['type'=>'hidden', 'value'=>1])
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                    <form action="" id="contact-form">
                        <div class="input-group name-email">
                            <div class="input-field">
                                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Correo" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea name="message" id="message" placeholder="Mensaje" class="form-control"></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" id="form-submit" class="pull-right" value="Enviar Mensaje">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="row mb50">            
            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>deja tu sugerencia</h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p>Queremos interactuar con tigo asi que deja tu sugerencia que el personal encargado transferira el mismo a administracion y asi nos ayudas a seguir creciendo.</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                <div class="contact-address">
                    <h2>Nuestras Oficinas  </h2><br>
                    <center><p>Zona Tahuantinsuyo </p></center>
                    <center><p>El Alto - Bolivia</p></center>

                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="contact-form">
                    <?= $this->Flash->render('comment') ?>
                    <h3>SUGERENCIAS</h3>
                    <form action="#" id="contact-form">
                        <div class="input-group name-email">
                            <div class="input-field">
                                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Correo" class="form-control">
                            </div>
                        </div>
                        <div class="input-group">
                            <textarea name="message" id="message" placeholder="Mensaje" class="form-control"></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" id="form-submit" class="pull-right" value="Enviar Mensaje">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Google map -->
    <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
    <!-- End Google map -->

</section>