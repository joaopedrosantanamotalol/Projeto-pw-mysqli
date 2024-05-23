<?php

require_once '../model/pessoas.php'; // Equivalente ao Import do Java, necessário para fazer a linha 9 funcionar por exemplo. Require = import, once = import prioritário

class PessoasController{//classe criada para atribuir dados a pessoa
   //
    private $pessoa;

    public function _construct(){//função construtora para inserir os dados
        $this->pessoa = new Pessoa(); 
        $this->inserir();
    }
//
    public function inserir(){//fazendo conexão da pessoa com as informações
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        $this->pessoa->inserir();
    }//

}    
new PessoasController();//puxando a classe
?>