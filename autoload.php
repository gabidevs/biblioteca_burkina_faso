<?php

function autoload($nomeClasse) {
    $arquivo = __DIR__.'/model/'.$nomeClasse.'.php';
        if(is_file($arquivo)){
            require_once($arquivo);
        }
}

spl_autoload_register('autoload');