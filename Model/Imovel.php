<?php
class Imovel
{
    // atributes
        private $id = 0;
        private $uf = '';
        private $cidade = '';
        private $bairro = '';
        private $rua = '';
        private $numero = 0;
        private $complemento = '';
        private $cep = 0;
        private $valorAluguel = 0.0;
        private $nomeProprietario = '';

    // methods
    public function __construct($uf, $cidade, $bairro, $rua, $numero, $complemento, $cep)
    {
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->cep = $cep;
    }

    //getters and setters
    public function getUf()
    {
       return $this->uf;
    }
    public function getCidade()
    {
       return $this->cidade;
    }
    public function getBairro()
    {
       return $this->bairro;
    }
    public function getRua()
    {
       return $this->rua;
    }
    public function getNumero()
    {
       return $this->numero;
    }
    public function getComplemento()
    {
       return $this->complemento;
    }
    public function getCep()
    {
       return $this->cep;
    }
    public function getvalorAluguel()
    {
       return $this->valorAluguel;
    }
    public function getNomeProprietario()
    {
       return $this->nomeProprietario;
    }
}
?>