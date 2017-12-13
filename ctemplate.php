    <!-- Main content -->
	
    <section class="content container-fluid">
	<form method="get" action="">
    <label>
        Artículo
    </label>
    <input type = "text" name="c">
    <input type = "submit" value="Crear diseño">
</form>  

<?php
if($_GET["c"]==null) die();
$html1 = file_get_contents("http://192.11.11.1:8080/novalanRP/serv/art/buscar?id=".$_GET["c"]);
$json1 = json_decode($html1);
$kArticulo = $json1->kArticulo;
$luchasReales = $json1->luchasReales;
$luchasFueraTelar = $json1 ->luchasFueraTelar;
$mtsUrdido = $json1->mtsUrdido;
$mtsTejido = $json1->mtsTejido;
$mtsAcabado = $json1->mtsAcabdo;
$grGrasa = $json1->grGrasa;
$mtsGrasa =$json1->mtsGrasa;
$grAcabado = $json1->grAcabado;
$mtsAcabado1 = $json1->mtsAcabado1;
$divisor = $json1->divisor;
$anchoTelar = $json1->anchoTelar;
$prioridad = $json1->prioridad;
$temporada = $json1->temporada;
$kClaseTela = $json1->kClaseTela;
$kSalaTejido = $json1->kSalaTejido;
?>

