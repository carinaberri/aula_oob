/**
 * Created by carina on 15/12/15.
 */
$(document).ready(function(){

    $("tr").hover(function(){
        $(this).addClass("linha-hover");
    },
    function(){
        $(this).removeClass("linha-hover");
    });

    $("a.deletar").click(function(){
    var apagar = confirm('Deseja realmente excluir este registro?');
    if (apagar){
        // aqui vai a instrução para apagar registro
    }else{
        event.preventDefault();
    }
    });

    $("a.logoff").click(function(){
        var sair = confirm('Deseja realmente sair do sistema?');
        if (sair){
            // aqui vai a instrução para apagar registro
        }else{
            event.preventDefault();
        }
    });

    $("#PesquisaAvancada").click(function(){

        
            $(".opcoes").toggle();
    });
    $("button.navbar-toggle.collapsed").click(function(){
        $("#navbar").toggle();
    });

    $("input[name='todos_buscaAvancada']").click(function(){
       
         if($('input[name="todos_buscaAvancada"]' ).prop( "checked" ) == true){
            $('input[name="busca_avancada[]"]' ).prop( "checked" , true);
            
        } else {
            $('input[name="busca_avancada[]"]' ).prop( "checked" , false);
            
        }

    });
});
