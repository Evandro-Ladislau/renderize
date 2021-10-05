<?php
if(!isset($seguranca)){
    exit;
}
include_once 'app/sts/header_post.php';
include_once 'app/sts/menu_post.php'; // inclui o menu do post
require_once '../renderize/index.php';

$cmd = $pdo->query("SELECT id, titulo, descricao, conteudo, imagem, slug, author, titulo_botao, qnt_acesso, created FROM sts_artigos 
                                    WHERE sts_situacoe_id=1
                                    ORDER BY id DESC");
                    $result_postagem = $cmd->fetchAll(PDO::FETCH_ASSOC);
                   
                    if ($result_postagem) {
                        ?>
        <header class="masthead" style="background-image: url('<?php echo pg.'/assets';?><?php echo "/img/artigo/".$result_postagem[$i]['id']."/".$result_postagem[$i]['imagem'];?>')">
        
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $result_postagem[$i]['titulo'];
                             ?></h1>
                            <h2 class="subheading"><?php echo $result_postagem[$i]['descricao']?></h2>
                            <span class="meta">
                                Posted by
                                <a href="#!"><?php echo $result_postagem[$i]['author']?></a>
                                <?php echo $result_postagem[$i]['created']?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php
                            echo $result_postagem[$i]['conteudo'];
                        ?>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>

                        <hr class="my-4" />
                        <!-- Pager-->
                        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="<?php echo pg."/blog#noticias";?>"><?php echo $result_postagem[$i]['titulo_botao'];?></a></div>
                    </div>
                </div>
            </div>
        </article>

                            <?php
                        }
                        
?>


        <?php
        //IMPLEMENTAÇÃOCONTADOR DE ACESSO DOS ARTIGOS DO BLOG
        $posturl = $endereco[1];

        for ($i=0; $i < count($result_postagem) ; $i++) { 
            foreach ($result_postagem[$i] as $k){

                if ($posturl == $result_postagem[$i]['slug']) {
                    $contador = $result_postagem[$i]['qnt_acesso'] + 1;
                $update = $pdo->prepare("UPDATE sts_artigos SET qnt_acesso=:visitas WHERE slug=:posturl ");
                $update->bindValue(':visitas', $contador);
                $update->bindValue(':posturl',$posturl);
                $update->execute();
                }
                
            }

        }
        
        
        
        
        include_once 'app/sts/footer_blog.php';
        ?>   

