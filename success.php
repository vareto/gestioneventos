<?php

echo '<h1>Operacion realizada con exito</h1>';
echo '<h4>En unos segundos seras redirigido a la pagina principal</h4>';

sleep(5);
sleep(5);
header("location: index.php");