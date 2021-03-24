<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";
    include('partes/cabecalho.php'); 
?>
            <header class="pagina-cabecalho">
                <h1 class="pagina-cabecalho__titulo">Portfolio</h1>
            </header>
            <section class="pagina-conteudo">
                <p class="text-center">
                    Essa é uma estratégia muito usada por designers e arquitetos para promover seus serviços. <br>
                    ara redatores, no entanto, isso também serve como uma boa ferramenta de apresentação de trabalho. <br>
                    Basicamente, um portfólio é a forma mais adequada de você mostrar a qualidade.
                </p>
                <nav>
                    <ul class="lista-trabalhos">
                        <li class="lista-trabalhos__items">
                            <a href="https://dsdeliverrenanmendonca.netlify.app" target="_blank">
                                <img class="lista-trabalhos__img" src="img/portfolio/dsinicial.png" style="margin-bottom: -3px;" alt="aviao">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                        <li class="lista-trabalhos__items">
                            <a data-fancybox="gallery" href="img/portfolio/flappybird.png">
                                <img class="lista-trabalhos__img" src="img/portfolio/flappybird.png" alt="">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                        <li class="lista-trabalhos__items">
                            <a data-fancybox="gallery" href="img/portfolio/loginasset.png">
                                <img class="lista-trabalhos__img" src="img/portfolio/loginasset.png" alt="hong-kong">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                        <li class="lista-trabalhos__items">
                            <a data-fancybox="gallery" href="img/portfolio/pastelilogin.png">
                                <img class="lista-trabalhos__img" src="img/portfolio/pastelilogin.png" alt="landscape">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                        <li class="lista-trabalhos__items">
                            <a data-fancybox="gallery" href="img/portfolio/pasteliinicio.png">
                                <img class="lista-trabalhos__img" src="img/portfolio/pasteliinicio.png" alt="saddle">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                        <li class="lista-trabalhos__items">
                            <a data-fancybox="gallery" href="img/portfolio/pastelitarefa.png">
                                <img class="lista-trabalhos__img" src="img/portfolio/pastelitarefa.png" alt="town">
                                <h2 class="lista-trabalhos__titulo">Nome trabalho</h2>
                            </a>   
                        </li>
                    </ul>
                </nav>
            </section>
<?php include('partes/rodape.php'); ?>