<?php 
$componentes_url =parse_url($_SERVER["REQUEST_URI"]);
$ruta= $componentes_url['path'];
echo $ruta."<br>";
$partes_ruta=explode("/",$ruta);
$partes_ruta=array_filter($partes_ruta);
$partes_ruta=array_slice($partes_ruta,0);

/* www/    0  /1     /*/
/* www/webGaw/*    */
$ruta_elejida='vistas/404.php';

if ($partes_ruta[0]=='webGaw') { /* compuevo si el indice 1 es correcto ,,,ubicacion array indice */
    if (count($partes_ruta)==1) {  /* contar posisciones del array indice */
        $ruta_elejida="vistas/home.php";
    }else if (count($partes_ruta)==2) {
        switch ($partes_ruta[1]) {
            case 'login':
                $ruta_elejida='vistas/login.php';
                break;
            case 'logout':
                $ruta_elejida='vistas/logout.php';
                break;
            case 'registro':
                $ruta_elejida='vistas/registro.php';
                break;
        }
    }else if (count($partes_ruta)==3) {
        if ($partes_ruta[1]=='registro-correcto') {
            $nombre=$partes_ruta[2];
            $ruta_elejida='vistas/registro-correcto.php';
        }
    }
}
include_once $ruta_elejida;
?>
