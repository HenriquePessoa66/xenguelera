<?php


class ClassFornecedor {
    private $codigo;
    private $nome;
    private $email;
	private $cnpj;
	private $stts;
   
                  
    function getCodigo() {
        return $this->Codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }
	
	function getCNPJ() {
        return $this->CNPJ;
    }
	
	function getStatus() {
        return $this->Status;
    }

    
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
	
	function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }
	
	function setStatus($stts) {
        $this->stts = $stts;
    }

   

    
}
