<?php

require_once('Imovel.php');
require_once('Inquilino.php');
require_once('dbh.inc.php');
class DatabaseQueries{
    public static function insertInquilino(Inquilino $inq){
        $inquilino = $inq;
        $conn = Conection::conection();
        $sql = "INSERT INTO Inquilinos (id_imovel, cpf, nomeCompleto, telefone, dataNascimento)
        VALUES ({$inquilino->getImovelID()}, {$inquilino->getCpf()}, '{$inquilino->getNomeCompleto()}', 
        '{$inquilino->getTelefone()}', '{$inquilino->getDataNascimento()}')";
        if ($conn->query($sql) === TRUE) {
          echo "<h3 style='display:flex; justify-content:center;margin-top:5%'><strong>O inquilino {$inquilino->getNomeCompleto()} foi inserido no banco de dados com sucesso</strong></h3>";
        } else {
          echo "<h3 style='display:flex; justify-content:center;margin-top:5%'><strong>Erro ao inserir o inquilino {$inquilino->getNomeCompleto()} no banco de dados: ' . $conn->error . '</strong></h3>";
        }
        $conn->close();
    }
    //não tive tempo de implementar esta função no site
    /*public static function deleteInquilino(Inquilino $inq){
        $inquilino = $inq;
        $conn = Conection::conection();
        $sql = "DELETE FROM Inquilinos WHERE id_pessoa = {$inquilino->getPessoaID()}";
        if ($conn->query($sql) === TRUE) {
          echo "\nO inquilino foi deletado do banco de dados com sucesso";
        } else {
          echo "\nErro ao deletar o inquilino no banco de dados: " . $conn->error;
        }
        $conn->close();
    }*/
    public static function insertImovel(Imovel $imo){
        $imovel = $imo;
        $conn = Conection::conection();
        $sql = "INSERT INTO Imoveis (uf, cidade, bairro, rua, numero, complemento, cep,
        valor_aluguel, nome_proprietario)
        VALUES ('{$imovel->getUf()}', '{$imovel->getCidade()}', '{$imovel->getBairro()}', '{$imovel->getRua()}', {$imovel->getNumero()},
        '{$imovel->getComplemento()}', {$imovel->getCep()}, {$imovel->getValorAluguel()}, '{$imovel->getNomeProprietario()}')";
        if ($conn->query($sql) === TRUE) {
          echo '<h3 style="display:flex; justify-content:center;margin-top:10%"><strong>O imovel foi inserido no banco de dados com sucesso</strong></h3>';
        } else {
          echo '<h3 style="display:flex; justify-content:center; margin-top:10%"><strong>Erro ao inserir o imovel no banco de dados:'. $conn->error.'</strong></h3>';
        }
        $conn->close();
    }
     //não tive tempo de implementar esta função no site
    /*public static function deleteImovel(Imovel $imo){
        $imovel = $imo;
        $conn = Conection::conection();
        $sql = "DELETE FROM Inquilinos WHERE id_pessoa = {$imovel->getImovelID()}";
        if ($conn->query($sql) === TRUE) {
          echo '<h3 style="display:flex; justify-content:center;margin-top:10%"><strong>O imóvel foi deletado do banco de dados com sucesso</strong></h3>';
        } else {
          echo  '<h3 style="display:flex; justify-content:center;margin-top:10%"><strong>Erro ao deletar o imóvel no banco de dados: '. $conn->error.'</strong></h3>';
        }
        $conn->close();
    }*/
    public static function getImovelId($cep, $rua, $numero){
      $conn = Conection::conection();
      $sql = "SELECT * FROM Imoveis WHERE cep = {$cep} AND rua = '{$rua}' AND numero = {$numero};";
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      return $row['id_imovel'];
      $conn->close();
  }
}

?>
