<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/EscritorEntradas.inc.php';

if (isset($_POST['enviar'])) {
    Conexion::abrir_conexion();
    $validador = new ValidadorRegistro(
        $_POST['nombre'],
        $_POST['email'],
        $_POST['clave1'],
        $_POST['clave2'],
        Conexion::obtener_conexion()
    );

    if ($validador->registro_valido()) {
        //echo "todo correcto";

        $usuario = new Usuario(
            '',
            $validador->obtener_nombre(),
            $validador->obtener_email(),
            password_hash($validador->obtener_clave(), PASSWORD_DEFAULT),
            '',
            ''
        );
        $usuario_insertado = RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);

        if ($usuario_insertado) {
            Redireccion::redirigir(RUTA_REGISTRO_CORRECTO."/".$usuario->obtener_nombre());

        }
    }
    Conexion::cerrar_conexion();
}

$titulo = "Registro"; //titulo dinamico
include_once 'plantillas/documento-declaracion.inc.php'; //parte de html meta head
include_once 'plantillas/navbar.inc.php'; //navbar 
?>
<!-----------------------------------------------MODIFICAR REGISTRO-------------------------------->
<section>
    <div class="container">
        <div class="jumbotron" id="registro">
            <h1 class="text-center">Formulario de Registro</h1>
        </div>
    </div>
    <div class="container" id="sectionRegistro">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-tittle">
                            instrucciones
                        </h3>
                    </div>
                    <div class="panel-body">
                        <br>
                        <p class="text-justify">
                            para unirte al gaw introduce un ausuario y contraseña
                            te recomendamos que uses una contraseña qeu contenga letras mayusculas
                        </p>
                        <br>
                        <a href="#">¿ya tienes cuenta?</a>
                        <br><br>
                        <a href="#">¿olvidaste tu contraseña?</a>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-tittle">
                            Introduce tus datos
                        </h3>
                    </div>
                    <div class="panel-body">
                        <!--<form role="form" method="post" action="registro_accion.php"> -->
                        <!--------------------comprobador y registro --------------------->
                        <form role="form" method="post" action="<?php echo RUTA_REGISTRO ?>">
                            <?php
                            if (isset($_POST['enviar'])) {
                                include_once "plantillas/registro_validado.inc.php";
                            } else {
                                include_once "plantillas/registro_vacio.inc.php";
                            }
                            ?>
                        </form>
                        <!--------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once "plantillas/documento-cierre.inc.php" ?>