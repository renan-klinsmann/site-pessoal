<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php'); 

    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    if( isset($_POST['submit']) ) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if(
            $nome != '' 
            && $email != '' 
            && $mensagem != '')
        {
            //usuario preencheu corretamento
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail .= 'E-mail: ' . $email . ' - ';
            $mensagemEmail = 'Mensagem: ' . $mensagem;
            if(mail('klins.renan@gmail.com', 'Mensagem do contato', $mensagemEmail)){
                //email enviado
                $sucessoFormulario = 'Mensagem enviada com sucesso!';
            }
            else{
                //email nao enviado
                $erroFormulario = "Falha ao enviar a mensagem, tente novamente mais tarde ou através do e-mail klismann-nan@hotmail.com";
            }
        }else {
            $erroFormulario = "Por favor verifique os campos";
        }
    }
?>
            <header class="pagina-cabecalho">
                <h1 class="pagina-cabecalho__titulo">Contato</h1>
            </header>
            <section class="container pagina-conteudo">
                <p class="text-center">Ola deixe sua mensagem será um prazer ter seu contato, caso queria contato direto role para baixo.</p>
                <form action="contato.php" class="formulario" method="post">
                    <?php if($erroFormulario != ''): ?>
                        <div class="formulario__erro">
                            <?php echo $erroFormulario ?>
                        </div>
                    <?php endif; ?>
                    <?php if($sucessoFormulario != ''): ?>
                        <div class="formulario__sucesso">
                            <?php echo $sucessoFormulario ?>
                        </div>
                    <?php endif; ?>
                    <div class="formulario__grupo formulario__grupo--coluna-esq">
                        <label class="formulario__label" for="nome">Nome</label><br>
                        <input class="formulario__campo" id="nome" type="text" name="nome">
                    </div>
                    <div class="formulario__grupo formulario__grupo--coluna-dir">
                        <label class="formulario__label" for="email">E-mail</label><br>
                        <input class="formulario__campo" id="email" type="email" name="email">
                    </div>
                    <div class="formulario__grupo">
                        <label class="formulario__label" for="mensagem">Mensagem</label><br>
                        <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" class="formulario__botao" value="Enviar" name="submit">
                </form>
                <p class="text-center">
                    E-mail: klins.renan@gmail.com<br>
                    Fone: (83) 98674-1476S
                    
                </p>
            </section>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31668.468280535428!2d-34.85125828152576!3d-7.176918718361871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acc24864132573%3A0x837f988f2b8b40c3!2sMangabeira%2C%20Jo%C3%A3o%20Pessoa%20-%20PB!5e0!3m2!1spt-BR!2sbr!4v1614696338989!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
<?php include('partes/rodape.php'); ?>