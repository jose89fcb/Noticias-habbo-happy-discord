<?php
$pagina= file_get_contents("https://www.habbo-happy.net/");

$HabboHabboNoticias = explode ('<div class="chbxtitlebig">', $pagina);
$HabboHabboNoticias = explode ('</div>', $HabboHabboNoticias[2]);


$imagen = explode ('<div class="chbxavatarbig" style="background:url(//', $pagina);
$imagen = explode (')', $imagen[2]);

$url = explode ('https://www.habbo-happy.net/noticias/', $pagina);
$url = explode ('"', $url[7]);



?>
{
"noticias":"<?php echo $HabboHabboNoticias[0];?>",

"imagen":"http://<?php echo $imagen[0];?>",
"url":"https://www.habbo-happy.net/noticias/<?php echo $url[0];?>"
}