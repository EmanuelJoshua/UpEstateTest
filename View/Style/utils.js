

function addLinhaCadInq(){

    let seq;

    if($("#TABLE_INQUILINOS_CAD").children('tbody').children().length==0){
        seq = 1
    }
    else{
        
        seq = Number($("#TABLE_INQUILINOS_CAD").children('tbody').children().last().children().eq(0).children().attr("id").split("___")[1]) + 1

    }
    
    let str = " <tr> "+
    " <td> "+
    "     <button type='button' class='btn btn-danger' id='REMOVE_INQ_CAD___"+seq+"' name='REMOVE_INQ_CAD___"+seq+"' onclick='removeLinhaCadInq(this)'>X</button>"+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='text' placeholder='Nome' id='NOME_INQ_CAD___"+seq+"' name='NOME_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='text' placeholder='CPF' id='CPF_INQ_CAD___"+seq+"' name='CPF_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='text' placeholder='Telefone' id='TEL_INQ_CAD___"+seq+"' name='TEL_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " <td> "+
    "     <input class='form-control' type='date' placeholder='Data Nascimento' id='DATA_INQ_CAD___"+seq+"' name='DATA_INQ_CAD___"+seq+"'/> "+
    " </td> "+
    " </tr> "

    $("#TABLE_INQUILINOS_CAD").children('tbody').append(str)


}

function removeLinhaCadInq(obj){

    $(obj).parent().parent().remove()

}