<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Cinema;

class CinemaController extends Controller{
    public function index(){
        $objCinema = new Cinema();
        $dados["lista"] = $objCinema->lista();
        $dados["view"]  = "Cinema/index";

        $this->load("template",$dados);

    }    

    public function edit($id){
        $objCinema = new Cinema();
        $dados["cinema"] = $objCinema->getCinema($id);
        $dados["view"] = "Cinema/Create";
        //echo "<pre>";
        //print_r($dados);
        //exit;
  
        $this->load("template",$dados);
  
     }

    public function create(){
        $dados["view"]  = "Cinema/create";
        $this->load("template",$dados);

    }

    public function salvar(){
        $objCinema = new Cinema();      
        $cinema = new \stdClass();
        
        $cinema->filme          = $_POST["filme"];
        $cinema->preco          = $_POST["preco"];
        $cinema->tempo          = $_POST["tempo"];
        $cinema->sessao         = $_POST["sessao"];
        $cinema->artistas       = $_POST["artistas"];
        $cinema->diretor        = $_POST["diretor"];
        $cinema->sinopse        = $_POST["sinopse"];
        $cinema->dia            = $_POST["dia"];
        $cinema->idfilme        = $_POST["idfilme"];
 
        //print_r($cinema);
        //exit;

        if($cinema->idfilme) {

            $objCinema->inserir($cinema);
           } else {
         $objCinema->editar($cinema);
      }
     header("location:".URL_BASE."cinema");

    }

    public function excluir($id){
        $objCinema = new Cinema();
        $objCinema->excluir($id);
        header("location:".URL_BASE."cinema");
  
  
    }

}