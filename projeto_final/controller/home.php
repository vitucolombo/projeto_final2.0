<?php

    require "model/CategoriaModel.php";
    require "model/ProdutoModel.php";
    require "controller/Controller.php";

    class Home{

        function __construct(){
            $this->categoria = new CategoriaModel();
            $this->produto = new ProdutoModel();
        }

        function index($id = null){
            $categorias = $this->categoria->buscarTodos();
            if(!$id){
            $produtos = $this->produto->buscarTodos();
            }else{
                $produtos = $this->produto->buscarPorCategoria($id);
            }
            include "view/template/cabecalho.php";
            include "view/template/menu_home.php";
            include "view/home/listagem.php";
            include "view/template/rodape.php"; 
        }

        function ver($id){  
            $categorias = $this->categoria->buscarTodos();
            $produto = $this->produto->buscarPorID($id);
            include "view/template/cabecalho.php";
            include "view/template/menu_home.php";
            include "view/home/ver.php";
            include "view/template/rodape.php";
        }
        function search(){
            $categorias = $this->categoria->buscarTodos();          
            $produtos = $this->produto->buscarPorLikeNome($_POST['search']);
            
            include "view/template/cabecalho.php";
            include "view/template/menu_home.php";
            include "view/home/listagem.php";
            include "view/template/rodape.php"; 
        
        }

    }

?>