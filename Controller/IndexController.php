<?php
require_once('../Model/Inquilino.php');
require_once('../Model/Imovel.php');
require_once('../Model/DatabaseQueries.php');

//insert Imovel
    $_imovel = new Imovel($_POST["CEP_CAD"], $_POST["UF_CAD"], $_POST["CIDADE_CAD"],
    $_POST["BAIRRO_CAD"], $_POST["RUA_CAD"], $_POST["NUMERO_CAD"], $_POST["COMPLEMENTO_CAD"],
    $_POST["NOME_PROP_CAD"], $_POST["VALUE_CAD"]);
    DatabaseQueries::insertImovel($_imovel);

//insert Inquilinos
   $indices_inquilinos = explode(",", $_POST["ARRAY_ID_INQ"]);

   $imovel_id = DatabaseQueries::getImovelId($_POST["CEP_CAD"], $_POST["RUA_CAD"],$_POST["NUMERO_CAD"]);

    foreach($indices_inquilinos as $indice){
        $_inquilino = new Inquilino($imovel_id, $_POST["NOME_INQ_CAD___".$indice], $_POST["CPF_INQ_CAD___".$indice],
        $_POST["TEL_INQ_CAD___".$indice], $_POST["DATA_INQ_CAD___".$indice]);
        DatabaseQueries::insertInquilino($_inquilino);
    }
