<?php
if (!isset($seguranca)) {
    exit;
}

include_once 'app/sts/header.php'; // incui o header 
?>

<body id="page-top">
    <?php

    include_once 'app/sts/menu_renderize.php'; // inclui o menu do site renderize.

    // esse select busca os dados da tabela masthead cadastrada no banco de dados
    //na variavel $result_masthead contem uma matriz com o resultado de cada linha da tabela.
    //com isso é possível trabalhar com esses valores tornando o site dinamico.
    //** como precisei informar a cor no botão, fiz o relacionamento das tabelas sts_masthead e sts_cors usando INNER JOIN */
    $sts_situacoe = 1;
    $cmd = $pdo->query("SELECT masth.*, 
                        cor.cor FROM `sts_masthead` 
                        masth INNER JOIN sts_cors cor ON cor.id=masth.sts_cor_id 
                        WHERE  sts_situacoe_id=1 ");

    $result_masthead = $cmd->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">

            <?php
            if ($result_masthead) {
                for ($i = 0; $i < count($result_masthead); $i++) {
            ?>
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center <?php echo $result_masthead[$i]['posicao_text']; ?> ">
                        <div class="col-lg-8 align-self-end ">
                            <h1 class="text-white font-weight-bold"><?php echo $result_masthead[$i]['titulo'] ?></h1>
                            <hr class="divider" />
                        </div>
                        <div class="col-lg-8 align-self-baseline ">
                            <p class="text-white-75 mb-5">
                                <?php echo $result_masthead[$i]['descricao'] ?>
                            </p>

                            <a class="btn btn-<?php echo $result_masthead[$i]['cor']; ?> btn-xl" href="<?php echo $result_masthead[$i]['link'] ?>"><?php echo $result_masthead[$i]['titulo_botao'] ?></a>
                        </div>
                    </div>

            <?php

                }
            }

            ?>
        </div>
    </header>
    <!--About -->

    <section class="page-section text-white" id="quemsomos">
        <>
            <?php

            // fiz o mesmo codigo acima porem trazendo as informações da sts_sobre relacionado com a tabela cor.
            $sts_situacoe = 1;
            $cmd = $pdo->query("SELECT about.*, 
                        cor.cor FROM `sts_sobre` 
                        about INNER JOIN sts_cors cor ON cor.id=about.sts_cor_id 
                        WHERE  sts_situacoe_id=1 ");

            $result_about = $cmd->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <div class="container-fluid px-4 px-lg-5">
                <?php
                if ($result_about) {
                    for ($i = 0; $i < count($result_about); $i++) {

                ?>
                        <div class="<?php echo $result_about[$i]['posicao_text'] ?>">
                            <h2 class="mt-0 text-<?php echo $result_about[$i]['cor'] ?>"><?php echo $result_about[$i]['titulo'] ?></h2>
                            <hr class="divider" />
                        </div>
                        <div class="row g-0 card-about">
                            <div class="col-lg-6 col-sm-6">
                                <p class="text-<?php echo $result_about[$i]['cor'] ?>"><?php echo $result_about[$i]['descricao_um'] ?>
                                    <a target="_blanck" href="<?php echo $result_about[$i]['link'] ?>" class=" text-muted mr-4">
                                        <i class="fab fa-linkedin"></i>
                                    </a>,
                                    <?php echo $result_about[$i]['descricao_dois'] ?>
                                </p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="text-<?php echo $result_about[$i]['cor'] ?>">
                                    <?php echo $result_about[$i]['descricao_tres'] ?>

                                </p>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </div>
    </section>

    <!--Vantagens-->
    <?php

    // fiz o mesmo codigo acima porem trazendo as informações da sts_vantagem relacionado com a tabela cor.
    $sts_situacoe = 1;
    $cmd = $pdo->query("SELECT vantagem.*, 
                        cor.cor FROM `sts_vantagem` 
                        vantagem INNER JOIN sts_cors cor ON cor.id=vantagem.sts_cor_id 
                        WHERE  sts_situacoe_id=1 ");

    $result_vantagem = $cmd->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <section class="page-section bg-dark " id="vantagens">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0 text-white">Vantagens</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <?php


                if ($result_vantagem) {

                    //esse for percorre o array na posição 0 da matriz.
                    //usei o foreach dentro pra percorer a lista com os valores de dentro da mastriz, onde p k é o id da lista e v é os valores
                    //que existe dentro de cada id nesse caso as colunas da tabela.
                    //depois usei o nome das colunas para pegar os valores.

                    for ($i = 0; $i < count($result_vantagem); $i++) {

                        foreach ($result_vantagem[$i] as $k => $v) {

                            if ($k == "id") {

                ?>

                                <div class="col-lg-3 col-md-6 <?php echo $result_vantagem[$i]['posicao_text']; ?> <?php echo $result_vantagem[$i]['animation']; ?>">
                                    <div class="mt-5">
                                        <div class="mb-2"><i class="<?php echo $result_vantagem[$i]['icone']; ?> fs-1 text-<?php echo $result_vantagem[$i]['cor']; ?> "></i></div>
                                        <h3 class="h4 mb-2 text-white"> <?php echo $result_vantagem[$i]['subtitulo']; ?> </h3>
                                        <p class="text-muted mb-0">
                                            <?php echo $result_vantagem[$i]['descricao']; ?>
                                        </p>
                                    </div>
                                </div>

                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <?php
    $sts_situacoe = 1;
    $cmd = $pdo->query("SELECT * FROM `sts_contato` 
                WHERE  sts_situacoe_id=1 ");

    $result_contato = $cmd->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <section class="page-section " id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php
                if ($result_contato) {
                    for ($i = 0; $i < count($result_contato); $i++) {
                ?>

                        <div class="col-lg-8 col-xl-6 <?php echo $result_contato[$i]['posicao_text']; ?> ">
                            <h2 class="mt-0"><?php echo $result_contato[$i]['titulo']; ?></h2>
                            <hr class="divider" />
                            <p class="text-muted mb-5">
                                <?php echo $result_contato[$i]['descricao']; ?>
                            </p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">

                    <form action="<?php echo pg; ?>/proc_cad_cliente" method="POST" id="contactForm">
                    <?php if (!empty($_SESSION['vazio_sucesso'])) {
                                echo $_SESSION['vazio_sucesso'];
                                unset($_SESSION['vazio_sucesso']);
                            } ?>
                        <!-- Name input-->
                        <div class="form-floating mb-3 port-left">
                            <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome Completo" required/>
                            <label for="nome">Nome Completo</label>
                            <?php if (!empty($_SESSION['vazio_nome'])) {
                                echo $_SESSION['vazio_nome'];
                                unset($_SESSION['vazio_nome']);
                            } ?>
                        </div>

                        <!-- Email address input-->
                        <div class="form-floating mb-3 port-right">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" required/>
                            <label for="email">Email</label>
                            <?php if (!empty($_SESSION['vazio_email'])) {
                                echo $_SESSION['vazio_email'];
                                unset($_SESSION['vazio_email']);
                            } ?>
                        </div>

                        <!-- Phone number input-->
                        <div class="form-floating mb-3 port-left">
                            <input class="form-control" id="telefone" type="tel" name="telefone" placeholder="Telefone" required />
                            <label for="phone">Telefone</label>
                            <?php if (!empty($_SESSION['vazio_telefone'])) {
                                echo $_SESSION['vazio_telefone'];
                                unset($_SESSION['vazio_telefone']);
                            } ?>
                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3 port-right">
                            <textarea class="form-control" id="message" name="message" type="text" style="height: 10rem" required></textarea>
                            <?php if (!empty($_SESSION['vazio_message'])) {
                                echo $_SESSION['vazio_message'];
                                unset($_SESSION['vazio_message']);
                            }

                            ?>
                        </div>

                        <!-- Submit Button-->
                        <div class="d-grid port-bottom"><input class="btn btn-primary btn-xl" name="SendCadCliente" type="submit" value="Enviar"></input></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once 'app/sts/footer_renderize.php';
    include_once 'app/sts/rodape_lib.php';
    ?>
</body>