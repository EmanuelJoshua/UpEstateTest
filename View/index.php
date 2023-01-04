<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BIBLIOTECA JQUERY -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>

    
    <!-- BIBLIOTECAS SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- CSS DO FORMULÁRIO -->
    <link rel="stylesheet" type="text/css" href="Style/style.css">

    <!-- JS DO FORMULÁRIO -->
    <script type="text/javascript" src="Style/utils.js"></script>
    <script type="text/javascript" src="Style/documentReady.js"></script>

    <!-- CSS BOOTSTRAP -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    
    <!-- JS BOOTSTRAP -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>

    <!-- TAG PARA CRIAR O FORMULÁRIO -->
    <form name="form" role="form">



        <div class="titulo">
            <h3><strong>C A D A S T R O &nbsp;&nbsp; D E &nbsp;&nbsp; I M O V E I S &nbsp;&nbsp; E &nbsp;&nbsp; I N Q U I L I N O S</strong></h3>
        </div>

        <section>

            <legend class="titulo mt-5">Cadastro de Imóvel</legend>

            <div class="form-group container-fluid dados-imovel col-md-12 row ">

                <div class="col-md-12 row form group">

                    <div class="col-md-5"></div>

                    <div class="col-md-3">
                        <label for="CEP_CAD"><h4>CEP</h4></label>
                        <input class="form-control" type="text" required pattern="\d{5}-?\d{3}" placeholder="CEP" id="CEP_CAD" name="CEP_CAD"/>
                    </div>

                    <div class="col-md-4"></div>

                </div>

                <div class="col-md-12 row form group">

                    <div class="col-md-2"></div>

                    <div class="col-md-3">
                        <label for="UF_CAD"><h4>Estado</h4></label>
                        <input class="form-control" type="text" required placeholder="Estado" id="UF_CAD" name="UF_CAD"/>
                    </div>
        
                    <div class="col-md-3">
                        <label for="CIDADE_CAD"><h4>Cidade</h4></label>
                        <input class="form-control" type="text" required placeholder="Cidade" id="CIDADE_CAD" name="CIDADE_CAD"/>
                    </div>
        
                    <div class="col-md-3">
                        <label for="BAIRRO_CAD"><h4>Bairro</h4></label>
                        <input class="form-control" type="text" required placeholder="Bairro" id="BAIRRO_CAD" name="BAIRRO_CAD"/>
                    </div>

                    <div class="col-md-1"></div>

                </div>

                <div class="col-md-12 row form group">

                    <div class="col-md-2"></div>

                    <div class="col-md-3">
                        <label for="RUA_CAD"><h4>Rua</h4></label>
                        <input class="form-control" type="text" required placeholder="Rua" id="RUA_CAD" name="RUA_CAD"/>
                    </div>
        
                    <div class="col-md-3">
                        <label for="NUMERO_CAD"><h4>Número</h4></label>
                        <input class="form-control" type="text" required placeholder="Número" id="NUMERO_CAD" name="NUMERO_CAD"/>
                    </div>
        
                    <div class="col-md-3">
                        <label for="COMPLEMENTO_CAD"><h4>Complemento</h4></label>
                        <input class="form-control" type="text" placeholder="Complemento" id="COMPLEMENTO_CAD" name="COMPLEMENTO_CAD"/>
                    </div>

                    <div class="col-md-1"></div>

                </div>


            </div>

        </section>

        <section>
            
            <legend class="titulo mt-10">Proprietário</legend>

            <div class="col-md-12 row form group">

                <div class="col-md-3"></div>

                <div class="col-md-3">
                    <label for="CEP_CAD"><h4>Nome proprietário</h4></label>
                    <input class="form-control" type="text" required placeholder="Nome proprietário" id="CEP_CAD" name="CEP_CAD"/>
                </div>

                <div class="col-md-3">
                    <label for="CEP_CAD"><h4>Valor Aluguel</h4></label>
                    <div class="input-group"> 
                        <span class="input-group-addon">$</span>
                        <input type="number" min="0" step="0.01" data-number-to-fixed="2" placeholder="Valor Aluguel" id="VALUE_CAD" name="VALUE_CAD" data-number-stepfactor="100" class="form-control currency" />
                    </div>
                </div>

                <div class="col-md-3"></div>

            </div>
        
        </section>

        <section>

            <legend class="titulo mt-10">Inquilinos</legend>

            <div class="col-md-12 row form-group tabela_cad">

                <table class="table table-striped col-md-10" id="TABLE_INQUILINOS_CAD">
                    <thead>
                    <tr>
                        <th scope="col"><button type="button" class="btn btn-primary" id="ADD_INQ_CAD" name="ADD_INQ_CAD" onclick="addLinhaCadInq()">+</button></th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data Nascimento</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>

        </section>

        <div class="col-md-12 row enviar form group">

            <button type="submit" class="btn btn-primary">Enviar</button>

        </div>

    </form>

</body>
</html>