<?php

//86400 -> los segundos que transcurren en 24 horas. La cookie se guardará durante 24 horas.
/*Para que la cookie funcione se tiene que especificar
la ruta del directorio en el cuarto parámetro con "/".
Se entiende que la cookie existirá en todo el directorio del sitio. */
/*Parámetro 1 - Nombre de la cookie
Parámetro 2 - Valor de la cookie
Parámetro 3 - Tiempo que estará vigente la cookie
Parámetro 4 - Hasta donde va a convivir la cookie (Límite en el directorio. 
Parámetro 5 - Dominio en el que existirá la cookie (En este caso no incluímos este parámetro)                                                 Este caso abarca todo el directorio)
 */
setcookie("idioma_solicitado", $_GET["idioma"], time()+86400, "/" ); 

//Redirigimos el flujo de la página con la función header();
header("Location: usar-cookie.php");

