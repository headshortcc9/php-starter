<?php
spl_autoload_register('Loader');

function Loader($className){
      include dirname(__DIR__).'/'.'class/'.$className.'.php';
}
?>