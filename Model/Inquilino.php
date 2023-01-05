<?php 
require_once('Imovel.php');
class Inquilino
{
    // atributes
        private $pessoaID = '';
        private $nomeCompleto = '';
        private $cpf = '';
        private $telefone = '';
        private $dataNascimento = '';
        private $imovelID = 0;

    // methods
        public function __construct($imovelID, $nomeCompleto, $cpf, $telefone, $dataNascimento)
        {
            $this->nomeCompleto = $nomeCompleto;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->dataNascimento = $dataNascimento;
            $this->imovelID = $imovelID;
        }

    //getters and setters
        public function getNomeCompleto()
        {
        return $this->nomeCompleto;
        }
        public function getCpf()
        {
        return $this->cpf;
        }
        public function getTelefone()
        {
        return $this->telefone;
        }
        public function getDataNascimento()
        {
        return $this->dataNascimento;
        }
        public function getPessoaID()
        {
        return $this->pessoaID;
        }
        public function getImovelID()
        {
        return $this->imovelID;
        }
}
?>