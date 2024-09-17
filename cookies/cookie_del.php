<?php
    //Eliminamos la cookie modificando su expiración a negativo.
    setcookie("Idioma", "es", time()-60*60*24*30, "/", "localhost", true, true);
?>