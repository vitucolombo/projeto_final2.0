<?php
    require "model/UsuarioModel.php";
    require "controller/Controller.php";

    class Restrito{

        function __construct(){
            $this->usuario = new UsuarioModel();
        }

        function login(){
            include "view/template/cabecalho.php";
            include "view/restrito/form.php";
            include "view/template/rodape.php";
        }

        function entrar(){
            if(isset($_POST['login']) && isset($_POST['senha'])){
                $usuario = $this->usuario->buscarPorLogin($_POST['login']);
                if(password_verify($_POST['senha'], $usuario['senha'])){
                    session_start();
                    $_SESSION['usuario'] = $usuario['login'];
                    header('Location: ?c=categoria');
                }else{
                    header('Location: ?c=restrito&m=login');
                }
            }

        }

        function logout(){
            session_start();
            unset($_SESSION['usuario']);
            session_destroy();
            header('Location: ?c=restrito&m=login');
        }
    }

?>