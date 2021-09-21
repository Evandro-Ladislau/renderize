<?php
if(!isset($seguranca)){
    exit;
}

//arquivo menu que é incluido somente no home do site renderize
?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="">Renderize</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" 
        data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" 
        aria-expanded="false" aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#quemsomos">Quem somos</a></li>
                <li class="nav-item"><a class="nav-link" href="#vantagens">Vantagens</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="#institucional">Institucional</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo pg; ?>/blog">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>