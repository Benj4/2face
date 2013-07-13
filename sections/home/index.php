<?php

    $core->loadModulo('head');
    $core->loadModulo('caca');
    $core->loadModulo('head');

    echo 'El home';
    echo '<pre>';
    echo var_dump($defaultGet);
    echo '</pre>';
    echo '<pre>';
    echo var_dump($_GET);
    echo '</pre>';

?>