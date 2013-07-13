<?php

class core{
    
    public function loadModulo($modulo){
        if (file_exists("modulos/" . $modulo . "/index.php")) {
            require("modulos/" . $modulo . "/index.php");
        }else{
            echo 'Modulo <b>'.$modulo. '</b> no encontrado';
        }
    }
    
}
?>
