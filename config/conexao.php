<?php
//CONEXAO COM BANCO DE DADOS;
function conectar(){

    $local_serve = 'localhost';
    $usuario_serve = 'root';
    $senha_serve = 'root';
    $banco_de_dados = 'renderize';

    try {
        $pdo = new PDO("mysql:host=$local_serve;dbname=$banco_de_dados", 
        $usuario_serve, $senha_serve);
        $pdo->exec("SET CHARACTER SET urf8");

    } catch (\Throwable $th) {
        return $th;
        die;
    }

    return $pdo;
}