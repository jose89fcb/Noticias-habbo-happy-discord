<?php
$pagina= file_get_contents("https://www.habbo-happy.net/");

$HabboHabboNoticias = explode ('<div class="chbxtitlebig">', $pagina);
$HabboHabboNoticias = explode ('</div>', $HabboHabboNoticias[2]);


$imagen = explode ('<div class="chbxavatarbig" style="background:url(//', $pagina);
$imagen = explode (')', $imagen[2]);

$url = explode ('https://www.habbo-happy.net/noticias/', $pagina);
$url = explode ('"', $url[7]);

$texto = $HabboHabboNoticias[0];
$texto = preg_replace('(&iacute;)', 'í', $texto);
$texto = preg_replace('(&Aacute;)', 'Á', $texto);
$texto = preg_replace('(&Eacute;)', 'É', $texto);
$texto = preg_replace('(&Iacute;)', 'Í', $texto);
$texto = preg_replace('(&Oacute;)', 'Ó', $texto);
$texto = preg_replace('(&Uacute;)', 'Ú', $texto);
$texto = preg_replace('(&aacute;)', 'á', $texto);
$texto = preg_replace('(&eacute;)', 'é', $texto);
$texto = preg_replace('(&oacute;)', 'ó', $texto);
$texto = preg_replace('(&uacute;)', 'ú', $texto);
$texto = preg_replace('(&Ntilde;)', 'Ñ', $texto);
$texto = preg_replace('(&ntilde;)', 'ñ', $texto);
 


?>
{
"noticias":"<?php echo $texto;?>",

"imagen":"http://<?php echo $imagen[0];?>",
"url":"https://www.habbo-happy.net/noticias/<?php echo $url[0];?>"
}
