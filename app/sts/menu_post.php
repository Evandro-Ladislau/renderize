<?php
if(!isset($seguranca)){
    exit;
}

//arquivo menu que é incluido somente no home no blog
?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo pg; ?>/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="#midia">Midias</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>