<?php
if (!isset($seguranca)) {
    exit;
}

$sandCadCliente = filter_input(INPUT_POST, 'SendCadCliente', FILTER_SANITIZE_STRING);

if($sandCadCliente){
   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   echo "Nome ".$nome;
}else{
    echo "Error";
}