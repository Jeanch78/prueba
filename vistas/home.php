<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
$titulo = "Proyecto Gaw"; //titulo dinamico
include_once 'plantillas/documento-declaracion.inc.php'; //parte de html meta head
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/banner.inc.php';
include_once 'app/EscritorEntradas.inc.php';

?>
<section>
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-12">
                <!-- buscaras--------------------- -->
                <div class="buscar">
                    <input type="text" class="buscar_texto" placeholder="Escribe lo que buscas">
                    <a href="" class="boton">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  section body -->
<br><br><br>
<section class="body">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="body_desc">
                    <h1 class="title">Cusco on</h1>
                    <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex repellat veritatis, porro nostrum ipsa dolores quis sint itaque esse iusto! Est quae tempora laudantium? Reprehenderit facilis ad corrupti id quibusdam.</p>
                    <a href="#" class="btn btn-color">Read More</a>
                    <a href="#" class="btn btn-trans">Explore</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="body_desc">
                    <h1 class="title">Cusco 2</h1>
                    <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex repellat veritatis, porro nostrum ipsa dolores quis sint itaque esse iusto! Est quae tempora laudantium? Reprehenderit facilis ad corrupti id quibusdam.</p>
                    <a href="#" class="btn btn-color">Read More</a>
                    <a href="#" class="btn btn-trans">Explore</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="body_desc">
                    <h1 class="title">Cusco 3</h1>
                    <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex repellat veritatis, porro nostrum ipsa dolores quis sint itaque esse iusto! Est quae tempora laudantium? Reprehenderit facilis ad corrupti id quibusdam.</p>
                    <a href="#" class="btn btn-color">Read More</a>
                    <a href="#" class="btn btn-trans">Explore</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/moray.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Moray</h5>
                        <p class="card-text">lugar turistico de Moray</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/salineras.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Salineras de Maras</h5>
                        <p>Lugar turistico de Maras</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/salineras.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Salineras de Maras</h5>
                        <p>Lugar turistico de Maras</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/moray.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Moray</h5>
                        <p class="card-text">lugar turistico de Moray</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/salineras.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Salineras de Maras</h5>
                        <p>Lugar turistico de Maras</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="img/lugares/salineras.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Salineras de Maras</h5>
                        <p>Lugar turistico de Maras</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="mostar_entradas">
            <div class="col-md-12">
                <?php
                EscritorEntradas::escribir_entradas();
                echo "mantenimiento";
                ?>
            </div>
        </div>
       

    </div>
</section>
<?php include_once "plantillas/documento-cierre.inc.php" ?>