<?php
if (!isset($seguranca)) {
    exit;
}

require_once '../renderize/index.php';

$sandCadCliente = filter_input(INPUT_POST, 'SendCadCliente', FILTER_SANITIZE_STRING); // recebe os parametros do formulario

// Se existir a informação do formulario ele acessa esse if
if ($sandCadCliente) {

    //abaixo e passado o filtro de estring, tags e espaços.
    $nome_rc = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nome_st = strip_tags($nome_rc);
    if (empty($nome_st) || $nome_st  == " ") {

        $_SESSION['vazio_nome'] = "<p class='text-danger'>* Campo nome é obrigatório</p>";
        $url = pg . "/home#contact";
        echo "
    <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    }


    $email_rc = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email_st = strip_tags($email_rc);
    $email_tr = trim($email_st);
    if (empty($email_tr) || $email_tr  == " ") {

        $_SESSION['vazio_email'] = "<p class='text-danger'>* Campo email é obrigatório</p>";
        $url = pg . "/home#contact";
        echo "
    <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    }


    $telefone_rc = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $telefone_st = strip_tags($telefone_rc);

    if (empty($telefone_st) || $telefone_st == " ") {
        $_SESSION['vazio_telefone'] = "<p class='text-danger'>* Campo telefone é obrigatório</p>";
        $url = pg . "/home#contact";
        echo "
        <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    }


    $message_rc = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $message_st = strip_tags($message_rc);
    if (empty($message_st) || $message_st  == " ") {

        $_SESSION['vazio_message'] = "<p class='text-danger'>* Campo Mensagem é obrigatório</p>";
        $url = pg . "/home#contact";
        echo "
    <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    }

    //Caso esteja tudo ok com os valores acima ele insere no banco de dados.
    $cmd = $pdo->prepare("INSERT INTO sts_clientes (nome, email, telefone, mensagem, created)  VALUES (:n, :e, :t, :m, now())");
    $cmd->bindValue(":n", $nome_st, PDO::PARAM_STR);
    $cmd->bindValue(":e", $email_tr, PDO::PARAM_STR);
    $cmd->bindValue(":t", $telefone_st, PDO::PARAM_STR);
    $cmd->bindValue(":m", $message_st, PDO::PARAM_STR);
    $cmd->execute();

    //Após inserir no banco ele retorna para a página na parte do formulario informando que foi inserido com sucesso!

    if ($cmd) {
        $_SESSION['vazio_sucesso'] = "<p class='text-primary'>Messagem enviada com sucesso! </p>";
        $url = pg . "/home#contact";
        echo "
    <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    } else {
        $_SESSION['vazio_sucesso'] = "<p class='text-danger'>Erro! A Mensagem não foi enviada!</p>";
        $url = pg . "/home#contact";
        echo "
    <META http-EQUIV=REFRESH CONTENT= '0; URL=$url';
    ";
    }
} else {
    $_SESSION['vazio_sucesso'] = "<p class='text-danger'>Erro! A Mensagem não foi enviada!</p>";;
}
