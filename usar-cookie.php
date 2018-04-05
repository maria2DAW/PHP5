<?php

if(!$_COOKIE["idioma_solicitado"])
{
    header("Location: index.php");
}

else if($_COOKIE["idioma_solicitado"] == "es")
{
    header("Location: spanish.php");
}

else if($_COOKIE["idioma_solicitado"] == "en")
{
    header("Location: english.php");
}

