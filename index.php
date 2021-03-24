<?php 
    global $tituloPagina;
    $tituloPagina = "";
    include('partes/cabecalho.php'); 
?>
            <header class="cabecalho-home">
                <h2 class="cabecalho-home__titulo">Bem-vindo!</h2>
                <p class="cabecalho-home__subtitulo">Esse e meu site pessoal, aqui você me conhecera um pouco mais.</p>
                <a class="cabecalho-home__role" href="#servicos">role para ver mais</a>
            </header>
            <section id="servicos" class="servicos">
                <div class="container">
                        <h2 class="home__titulo">Um pouco da minha stack de conhecimento</h2>
                        <section class="servicos__item">
                            <img src="img/icones/icone-desenvolvimento-web.png" alt="planeta">
                            <h3>Desenvolvimento web</h3>
                            <p class="servicos__texto">Atualmente para desenvolvimento web tenho conhecimento nas linguagens de HTML5, CSS3, JSP, JavaScript, além das bibliotecas que compoem o javaScript, tambem tenho conhecimento basico em alguns frameworks como Angular e React. </p>
                        </section>
                        <section class="servicos__item">
                            <img src="img/icones/icone-carrinho-compras.png" alt="Carrinho">
                            <h3>Desenvolvimento Back-end</h3>
                            <p class="servicos__texto">Desenvolvimento back-end e minha atual area de atuação tenho conhecimento avançado em Java e tenho conhecimento Basico em C# e NodeJS, além do conhecimentos nos seus frameworks como Spring(Intermediario) e ASP.NET Core(Basico).</p>
                        </section>
                        <section class="servicos__item">
                            <img src="img/icones/icone-cafe.png" alt="cafe">
                            <h3>Banco de Dados</h3>
                            <p class="servicos__texto">Essa e uma area que vem enxendo muito meus olhos, tenho bom conhecimento em SQL, PostegreSQL, MySQL e atualmente estou buscando conhecimento nos bancos Oracle, e estudando para certificação do Microsoft Azure.</p>
                        </section>
                </div><!--fim do container-->
            </section><!--Fim da seção o que fazemos-->
            <section class="depoimentos">
                <div class="container">
                    <h2 class="home__titulo home__titulo--branco">O que falam sobre mim</h2>
                    <div class="depoimentos__caixa">
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/renan/pessoni.jpg" style="max-width:200px; max-height:150px; width: auto; height: auto;" alt="pessoa-1">
                            <p class="depoimentos__texto">Um profissional extremamente esforçado e de um conhecimento sem igual.</p>
                            <p class="depoimentos__pessoa">Rafael Pessoni  - CTO SMN</p>
                        </section>
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/renan/corrales.jpg" style="max-width:200px; max-height:150px; width: auto; height: auto;" alt="pessoa-1">
                            <p class="depoimentos__texto">E um exemplo para os que estão ingressando na area, chegou e ganhou seu espaço com muito merito.</p>
                            <p class="depoimentos__pessoa">Ricardo Corrales  - CEO SMN</p>
                        </section>
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/renan/gilmar.jpg" style="max-width:200px; max-height:150px; width: auto; height: auto;" alt="pessoa-1">
                            <p class="depoimentos__texto">O tempo que esteve conosco mostrou que era diferenciado, sempre nos surpreendia com seu talento e resultados.</p>
                            <p class="depoimentos__pessoa">Gilmar Vasconcelos  - CEO GMI</p>
                        </section>
                    </div><!--depoimentos__caixa-->
                </div><!--fim do container-->
        </section>
<?php include('partes/rodape.php'); ?>