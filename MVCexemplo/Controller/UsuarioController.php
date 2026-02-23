<?php
//pega os dados do formulario e envia pra model salvar, depois busca os dados da controller e retorna pra tela
session_start(); //bando de dados
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];


        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        //redirecionar depois de salvar
        header('Location: /PB_PHP/MVCexemplo/usuario/telaCadastro');
        exit;
    }

    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';
    }
}
