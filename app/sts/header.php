<?php
if(!isset($seguranca)){
    exit;
}
require_once '../renderize/index.php'; //requeri a pagina index que contem a conexão para utilizar a variavel que contem os dados da paginas cadastradas no banco.
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    //percorrendo o array com os valores da pagina e colocando das tag referentes a SEO
    if($result_paginas){
        for ($i=0; $i < count($result_paginas) ; $i++) { 
           ?>
    <title><?php echo $result_paginas[$i]['nome_pagina']?></title>
    <meta name="robots" content="<?php echo $result_paginas[$i]['robots']?>"/>
    <meta name="keywords" content="<?php echo $result_paginas[$i]['keywords']?>">
    <meta name="<?php echo $result_paginas[$i]['description']?>"/>
    <meta name="author" content="<?php echo $result_paginas[$i]['autor']?>" />
           <?php
        }
    }

    ?>
     <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo pg;?>/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" 
    rel="stylesheet" type="text/css" 
    />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" 
    rel="stylesheet" 
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo pg; ?>/assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

