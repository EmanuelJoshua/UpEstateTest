

function addLinhaCadInq(){

    let seq;

    if($("#TABLE_INQUILINOS_CAD").children('tbody').children().length==0){

        seq = 1

    }
    else{
        
        seq = Number($("#TABLE_INQUILINOS_CAD").children('tbody').children().last().children().eq(0).children().attr("id").split("___")[1]) + 1

    }

    let array = $("#ARRAY_ID_INQ").val()

    if(array==""){
        $("#ARRAY_ID_INQ").val(seq)
    }
    else{
        $("#ARRAY_ID_INQ").val(array+","+seq)
    }
   
    
    let str = " <tr> "+
    " <td> "+
    "     <button type='button' class='btn btn-danger' id='REMOVE_INQ_CAD___"+seq+"' name='REMOVE_INQ_CAD___"+seq+"' onclick='removeLinhaCadInq(this)'>X</button>"+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='text' required placeholder='Nome' id='NOME_INQ_CAD___"+seq+"' name='NOME_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='number' required placeholder='CPF' id='CPF_INQ_CAD___"+seq+"' name='CPF_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='text' required placeholder='Telefone' id='TEL_INQ_CAD___"+seq+"' name='TEL_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='date' required placeholder='Data Nascimento' id='DATA_INQ_CAD___"+seq+"' name='DATA_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " </tr> "

    $("#TABLE_INQUILINOS_CAD").children('tbody').append(str)


}

function removeLinhaCadInq(obj){

    let seq = $(obj).attr("id").split("___")[1]

    let array = $("#ARRAY_ID_INQ").val()

    array = array.split(",")

    if(array.length >1){

        $(obj).parent().parent().remove()

        array.splice(array.indexOf(seq), 1);

        array = array.toString()

        $("#ARRAY_ID_INQ").val(array)

    }
    else{

        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'Necessário informar no minímo 1 inquilino'
        })

    }

}

function carregaCidades(){

    $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+$("#UF_CAD").find("option:selected").attr('data-id')+'/municipios', {id: $("#UF_CAD").find("option:selected").attr('data-id')}, function (json) {
 
        var options = '<option value="">–  –</option>';

        for (var i = 0; i < json.length; i++) {

            options += '<option value="' + json[i].nome + '" >' + json[i].nome + '</option>';

        }

        $("select[name='CIDADE_CAD']").html(options);

    });

}

function retornaCEP(){


    var validacep = /^[0-9]{8}$/;

    var cep = $("#CEP_CAD").val()
    cep = cep.replace("-","")
    console.log(cep)
    validacep.test(cep)

    if(cep!="" && cep!=null && cep!=undefined){

        if(validacep.test(cep)) {

            let url_ = "http://viacep.com.br/ws/"+cep+"/json/?callback=?"

            $.getJSON(url_, function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    
                    console.log(dados)
                    $('#UF_CAD>option[name='+dados.uf+']').attr('selected', true);
                    //$("#UF_CAD").val(dados.uf)
                    carregaCidades()

                    setTimeout(function(){
                        $('#CIDADE_CAD>option[value="'+dados.localidade+'"]').attr('selected', true);
                        //$("#CIDADE_CAD").val(dados.localidade)
                        $("#RUA_CAD").val(dados.logradouro)
                        $("#BAIRRO_CAD").val(dados.bairro)
                        $("#CEP_CAD").val(dados.cep)
                    },500)

                } //end if.
                else {

                    //CEP pesquisado não foi encontrado.
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Erro ao consultar API',
                        footer: 'API indisponível ou sem conexão'
                    })

                    $("#UF_CAD").val("")
                    $("#CIDADE_CAD").val("")
                    $("#RUA_CAD").val("")
                    $("#BAIRRO_CAD").val("")
                    $("#CEP_CAD").val("")
                    $("#NUMERO_CAD").val("")
                    $("#COMPLEMENTO_CAD").val("")

                }
            });  

        }
        else{

            //CEP pesquisado não foi encontrado.
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Erro ao consultar CEP',
                footer: 'CEP inválido ou inexistente'
            })

            $("#UF_CAD").val("")
            $("#CIDADE_CAD").val("")
            $("#RUA_CAD").val("")
            $("#BAIRRO_CAD").val("")
            $("#CEP_CAD").val("")
            $("#NUMERO_CAD").val("")
            $("#COMPLEMENTO_CAD").val("")

        }
    
    }

}

function validaNumero(){

    let numero = Number($("#NUMERO_CAD").val())

    if(numero < 0){

        $("#NUMERO_CAD").val(0)

    }


}