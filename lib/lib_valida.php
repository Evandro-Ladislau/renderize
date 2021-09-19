<?php
if(!isset($seguranca)){
    exit;
}

function limparUrl($conteudo){
    //valor da variavel a é subistituido pelo valor da variavel b e colocado em conteudo ct
    $formato_a = '"!@#$%*()+{[}];:,\\\'<>°ºª';
    $formato_b = '____________________________';
    $conteudo_ct = strtr($conteudo, $formato_a, $formato_b);

    //tirando os espacoes em branco que contem em ct e colocando na variaval br
    $conteudo_br = str_ireplace(" ", "",$conteudo_ct);

    //tirando alguma variavel que possa estar na varival br e colocando esse valor sem varivael na variavel st
    $conteudo_st = strip_tags($conteudo_br);

    //retirando os espaços em brando do inicio de do final da variave st e passando para lp
    $conteudo_lp = trim($conteudo_st);

    return $conteudo_lp; // retornando a variavel limpa de todos os valores
}