/*let botao = document.querySelector('.menu-principal__btn');
let menuPrincipal = document.querySelector('.menu-principal');
botao.addEventListener("click", abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('menu-principal--fechado');
}*/
$(document).ready(function(){
    //botao toggle menu
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });

    //slide depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    //validação do formulario de contato
    $('.formulario').validate({
        rules:{
            nome: 'required',
            email:{
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages:{
            nome: 'Por favor preencha o campo nome',
            email:{
                required: 'Por favor preencha o e-mail.',
                email: 'Por favor preencha um e-mail válido'
            },
            mensagem: 'Por favor preencha o campo mensagem'
        }
    });

});