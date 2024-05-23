<?php

class Conexao {//criando classe para conexão

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    //
//atribuindo variaveis para os endereços do banco

    public function _construct() {//função construtura para linkar ao mysqli
        $this ->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if($this->conexao->connect_error) {
            die("Falha na Conexão : " . $this->conexao->connect_error);
        }
    }
//
    public function getConexao() {//função para receber conexão
        return $this->conexao;
    }    
    //
}

?>