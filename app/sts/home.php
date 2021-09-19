<?php
if(!isset($seguranca)){
    exit;
}

include_once 'app/sts/header.php'; // incui o header 
?>
<body>
<?php

include_once 'app/sts/menu_renderize.php'; // inclui o menu do site renderize.
?>

<!-- Masthead-->
<header class="masthead">
    
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center ">
                    <div class="col-lg-8 align-self-end ">
                        <h1 class="text-white font-weight-bold">Desenvolvimento de Aplicações Web</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
                            Sua empresa ainda não tem um site? Eu posso criar para você!
                        </p>
                        <a class="btn btn-primary btn-xl" href="#contactForm">ENTRE EM CONTATO</a>
                    </div>
                </div>
            </div>
        </header>

        <!--About -->
        <section class="page-section text-white" id="quemsomos">
            
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center">
                    <h2 class="mt-0 text-black">Sobre Nós</h2>
                    <hr class="divider" />
                </div>
                <div class="row g-0 card-about">
                    <div class="col-lg-6 col-sm-6">
                        <p class="text-black">Da paixão por tecnologia nasceu a Application Web, 
                            criada por Evandro Ladislau 
                            <a target="_blanck" href="https://www.linkedin.com/in/evandro-ladislau/" 
                            class="fab fa-linkedin text-muted mr-4"
                            >
                            </a>, 
                            formado Técnico de Informática Web Design em 2018 pela instituição de ensino SENAC-RJ,
                            iniciou sua jornada como estágiario e foi contratado como Técnico de Suporte 
                            em TI por seu bom desempenho. 
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <p class="text-black">Desde então se manteve estudando desenvolvimento web 
                            e adquirindo conhecimento em diversas skill como HTML,
                             CSS, JavaScript, Bootstrap, Java Orientado a Objetos, PHP, SQL , 
                             banco de dados Mysql e PostgreSQL, 
                             Se tornando um Desenvolvedor Web FullStack Completo. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Vantagens-->

        <section class="page-section bg-dark " id="vantagens">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 text-white">Vantagens</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center port-left">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 text-white">Sua Marca</h3>
                            <p class="text-muted mb-0">
                                Fortaleça sua marca e deixe sua empresa aberta 24h por dia
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center port-bottom">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 text-white">Design Responsivo</h3>
                            <p class="text-muted mb-0">Layout adaptável a qualquer tipo de dispositivo 
                                quando for acessado
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center port-bottom">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 text-white">SEO</h3>
                            <p class="text-muted mb-0">Otimização para alcançar bons rankings orgânicos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center port-right">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2 text-white">Credibilidade</h3>
                            <p class="text-muted mb-0">Site funcional e com bom design, 
                                conquista a confiança do seu público.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section " id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Contato</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Envie-nos uma mensagem e entraremos em contato com você o mais
                             breve possível!
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3 port-left">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nome Completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Campo Obrigatório</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3 port-right">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Campo Obrigatório</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email Invalido</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3 port-left">
                                <input class="form-control" id="phone" type="tel" placeholder="(21) 98456-7890" data-sb-validations="required" />
                                <label for="phone">Telefone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Campo Obrigatório</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3 port-right">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Campo Obrigatório</div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid port-bottom"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include_once 'app/sts/footer_renderize.php';
        ?>
</body>

