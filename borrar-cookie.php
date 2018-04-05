<?php

//No hay una función específica para borrar una cookie.
//Lo que haremos será forzar la caducidad de la cookie dándole al tiempo 
//un valor negativo (para que sea un tiempo pasado).
setcookie("idioma_solicitado", "", time()-1, "/" );
?>

<a href="usar-cookie.php">REGRESAR</a>
