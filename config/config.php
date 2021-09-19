<?php
if(!isset($seguranca)){
    exit;
}
//variavel url_host recebe o nome do host que no caso é "localhost"
$url_host = filter_input(INPUT_SERVER, 'HTTP_HOST');
define('pg', "http://$url_host/renderize"); // ao alterar o servidor basta apena mudar essa variavel $url_host pois no site sera usado a define pg que é uma constante