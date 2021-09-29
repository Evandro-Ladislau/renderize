<?php
if(!isset($seguranca)){
    exit;
}
//arquivo footer que é incluído no site renderize.

//BUSCAR DADOS NO BANCO DE DADOS REFERENTE AS INFORMAÇÕES DO RODAPE
$sts_situacoe = 1;
    $cmd = $pdo->query("SELECT rodape.*, 
                        cor.cor FROM `sts_rodape` 
                        rodape INNER JOIN sts_cors cor ON cor.id=rodape.sts_cor_id 
                        WHERE  sts_situacoe_id=1 ");

    $result_rodape = $cmd->fetchAll(PDO::FETCH_ASSOC);
?>

<footer class=" text-center text-lg-start py-5" id="institucional">
            <!-- Grid container -->
            <div class="container p-4">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                  <?php
                  //PERCORRER OS DADOS USANDO O FOREACH PARA POSIBILITAR PEGAR OS VALORES DE DENTRO DA MATRIZ.
                  if($result_rodape){
                    for ($i=0; $i <count($result_rodape) ; $i++) { 

                      foreach ($result_rodape[$i] as $k => $v) {
                        if ($k == 'id') {
                          ?>
                          <div class="col-lg-6 col-md-12 mb-4 mb-md-0 <?php echo $result_rodape[$i]['class'];?>">
                          <h5 class="text-uppercase"><?php echo $result_rodape[$i]['titulo']; ?></h5>
                          <p>
                        <?php echo $result_rodape[$i]['descricao'];?></p>
                        </div>
                        
                          <?php
                        }
                      }
                    }
                  }
                  ?>
                  </div>
                  </div>
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="small text-center text-muted">
                Copyright &copy; 2018 - Renderize.com 
            </div>
            <!-- Copyright -->
 </footer>

 