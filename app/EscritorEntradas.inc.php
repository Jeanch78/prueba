<?php
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/Entrada.inc.php';

class EscritorEntradas
{
    public static function escribir_entradas()
    {
        $entradas = RepositorioEntrada::obtener_todas_por_fecha_descendiente(Conexion::obtener_conexion());
        echo count($entradas); //---------------testeo------------
        if (count($entradas)) {
            foreach ($entradas as $entrada) {
                self::escribir_entrada($entrada);
            }
        }
    }

    public static function escribir_entrada($entrada)
    {
        if (!isset($entrada)) {
            return;
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                        echo nl2br($entrada->obtener_titulo());
                        ?>
                    </div>
                    <div class="panel-body">
                        <p>
                            <strong>
                                <?php
                                echo nl2br($entrada->obtener_fecha());
                                ?>
                            </strong>
                        </p>
                        <div class="text-justify" id="cuerpo_entradas">
                            <?php
                            echo nl2br(self::resumir_texto($entrada->obtener_texto()));
                            echo "...";
                            ?>
                        </div>
                        <br>
                        <div class="text-left">
                            <a href="#" class="btn btn-primary" role="button">seguir leyendo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
    public static function resumir_texto($texto)
    {
        $longitud_maxima = 400;
        $resultado = '';
        if (strlen($texto) >= $longitud_maxima) {

            /*for ($i=0; $i <$longitud_maxima ; $i++) { 
               $resultado.=substr($texto,$i,1);
            }
            $resultado.='...';*/
            $resultado = substr($texto, 0, $longitud_maxima);
        } else {
            $relultado = $texto;
        }
        return $resultado;
    }
}
?>