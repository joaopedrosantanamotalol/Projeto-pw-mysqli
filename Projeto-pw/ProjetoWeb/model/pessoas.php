<?php
require_once '../controller/conexao.php';

class Pessoa{//atribuindo as variaveis
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;
    //

//fazendo o get & set das variaveis

    public function getId(){
        return $this->$id;
    }

    public function setId(){
        $this->id = $id;
    }

    public function getNome(){
        return $this->$nome;
    }

    public function setNome(){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->$endereco;
    }

    public function setEndereco(){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->$bairro;
    }

    public function setBairro(){
        $this->bairro = $bairro;
    }

    public function getCep(){
        return $this->$cep;
    }

    public function setCep(){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->$cidade;
    }

    public function setCidade(){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->$estado;
    }

    public function setEstado(){
        $this->estado = $estado;
    }

    public function getTelefone(){
        return $this->$telefone;
    }

    public function setTelefone(){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->$celular;
    }

    public function setCelular(){
        $this->celular = $celular;
        
    }  

    public function __construct(){
        $this->conexao = new Conexao();
    }
//
//função para inserir cada endereço no banco de dados
public function inserir(){
$sql = "INSERT INTO pessoa (`nome`, ` bairro`, `cep`, `cidade`, `estado `, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $this->conexao->getConexao()->prepare($sql);
$stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
return $stmt->execute();
}
//
}

?>