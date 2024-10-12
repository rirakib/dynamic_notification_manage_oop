<?php

function autoLoader($className)
{

    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

  
    if (file_exists($filePath)) {
        require $filePath;
    }
  
}


spl_autoload_register('autoLoader');
