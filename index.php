<?php
session_start();
ob_start();

$seguranca = true;
// BIBLIOTECA AUXILIARES
include_once 'config/config.php'; // inclui o arquivo config onde tem a url host para o caso de  mudar o servidor
include_once 'config/conexao.php'; //inclui o arquivo de conexao PDO
include_once 'lib/lib_valida.php'; // neste arquivo tem uma função que limpa a url tirando caracteres especiais;
$pdo = conectar(); //criei a conexao com banco de dados

$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING);
//echo $url; //imprime oq esta na url no momento;

//limpar $rul
$ur_limpa = limparUrl($url);
$endereco = explode('/', $ur_limpa); //transforma a string em um array, separando o valor da url na posicao 0 o nome do arquivo existente e na posicao 1 o nome do artigo ex curso-php
$sts_situacoes = 1;
//select usando pdo
//esse select busca no banco as paginas cadastradas com o valor da situacao da pagina igual a 1 (ativo).
//o endereco[0] aqui indica o valor do nome do arquivo da pagina cadastrado no banco de dados.
$cmd = $pdo->prepare("SELECT * FROM sts_paginas WHERE endereco=:endereco AND sts_situacaos_pg_id=:sts_situacoes");
$cmd->bindValue(':endereco', $endereco[0]);
$cmd->bindParam(':sts_situacoes', $sts_situacoes, PDO::PARAM_INT);
$cmd->execute();
$result_paginas = $cmd->fetchAll(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<html lang="pt-br">
    <?php
    //INCLUSÃO DO ARQUIVO DA PAGINA HOME USANDO URL AMIGAVEL

    
    
    //esse if verifica se existem paginas cadastradas no banco, se não o else redireciona para a pagina home.
    if(($result_paginas)){

        //neste caso eu percorri o array matriz e mandei ele trazer o cadastro da pagina na posição do index/nomedacoluna.
        for ($i=0; $i <count($result_paginas) ; $i++) {

            $file = 'app/'.$result_paginas[$i]['tp_pagina'].'/'.$endereco[0].'.php';
        }
        
        //ao abrir o site o index inclui a pagina home como esta informando nesse if
        //se caso for passado um valor na url que não existe o sistema redireciona para pagina home.
        if(file_exists($file)){
            include $file;
    
        }else{
            //include 'app/sts/home.php'; NESSE CASO ELE INCLUI O ARQUIVO DA PAGINA MAS 
            //NO CASO EU QUERO QUE ELE SEJA REDIRECIONADO SE CAIR NESSE IF
            $url_destino = pg."/home";
            header("Location: $url_destino");
    
        }
    }else{
        $url_destino = pg."/home";
        header("Location: $url_destino");
    }
    
    
    ?>

</html>