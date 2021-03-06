<?php
if (!isset($seguranca)) {
    exit;
}
include_once 'app/sts/header_blog.php'; // incui o arquivo header na pagina blog.
include_once 'app/sts/menu_blog.php'; // inclui o menu do blog
require_once '../renderize/index.php';

$sts_situacoe = 1;
    $cmd = $pdo->query("SELECT masth.*, 
                        cor.cor FROM `sts_masthead` 
                        masth INNER JOIN sts_cors cor ON cor.id=masth.sts_cor_id 
                        WHERE  sts_situacoe_id=$sts_situacoe AND masth.id=2");

    $result_masthead = $cmd->fetchAll(PDO::FETCH_ASSOC);

    
?>

<body>
    

    <!-- Page Header-->

    <?php
        if ($result_masthead ) {
            for ($i=0; $i <count($result_masthead) ; $i++) { 
                ?>
                <header class="masthead" style="background-image: url('<?php echo pg.'/assets/img/blog/'. $result_masthead[$i]['imagem'];  ?>')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1><?php echo $result_masthead[$i]['titulo']?></h1>
                        <span class="subheading"><?php echo $result_masthead[$i]['descricao']?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
            }
        }
    
    ?>
    <!-- Main Content-->
    <section>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php
                    // ESSA QUERY BUSCA AS TALBELAS NO BANCO REFERENTE A TABELA STS_ARTIGOS
                    $cmd = $pdo->query("SELECT id, titulo, descricao, slug, author, created FROM sts_artigos 
                                    WHERE sts_situacoe_id=1
                                    ORDER BY id DESC");
                    $result_post = $cmd->fetchAll(PDO::FETCH_ASSOC);

                    ?>
                    <!-- Post preview-->
                    <?php
                    //PERCORRER A TABELA QUE VEIO EM UMA MATRIZ COMO RESULTADO E IMPRIMIR OS VALORES EM ORDEM DESC
                    //NO LINK ELE MANDA PARA A PAGINA POST INFORMANDO O NOME DO SLUG NA URL DO SITE.
                    if ($result_post) {
                        for ($i = 0; $i < count($result_post); $i++) {

                            foreach ($result_post[$i] as $k => $v) {
                                if ($k == 'id') {

                    ?>

                                    <div class="post-preview" id="noticias">
                                        <a href="<?php echo pg.'/post';?><?php echo "/".$result_post[$i]['slug'];?>">
                                            <h2 class="post-title"><?php echo $result_post[$i]['titulo']?></h2>
                                            <h3 class="post-subtitle"><?php echo $result_post[$i]['descricao']?></h3>
                                        </a>
                                        <p class="post-meta">
                                            Posted by
                                            <a href="#!"><?php echo $result_post[$i]['author']?></a>
                                            <?php echo $result_post[$i]['created']?>
                                        </p>
                                    </div>
                                    <!-- Divider-->
                                    <hr class="my-4" />
                    <?php


                                }
                            }
                        }
                    }
                    
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'app/sts/footer_blog.php';
    ?>

</body>