<?php
//salva na memória do computador 

require_once "./database/database.php";

class Usuario{
    private $nome;
    private $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function salvar(){
        $pdo = database::conectar();
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $this->nome, 'email' =>$this->email]);
    }

    public static function listar(){
        $pdo = database::conectar();
        $stmt = $pdo->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
        //select * from usuarios where id = $id
        $pdo = database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = atabase::conectar();
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $stmt->execute(['id' => $id, 'nome' => $this->nome, 'email' => $this->email]);
    }

    public static function excluir($id){
        $pdo = database::conectar();
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}