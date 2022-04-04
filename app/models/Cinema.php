<?php

namespace app\models;
use app\core\Model;

class Cinema extends Model{
    public function lista(){
        $sql = "SELECT * FROM tblfilmes";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

    public function inserir(){
        $sql = "INSERT INTO tblfilmes SET
        filme        =:filme,
        preco        =:preco,
        tempo        =:tempo,
        sessao       =:sessao,
        artistas     =:artistas,
        diretor      =:diretor,
        sinopse      =:sinopse,
        dia          =:dia
    ";

    $qry = $this->db->prepare($sql);

    $qry->bindValue(":filme", $cinema->filme);
    $qry->bindValue(":preco", $cinema->preco);
    $qry->bindValue(":tempo", $cinema->tempo);
    $qry->bindValue(":sessao", $cinema->sessao);
    $qry->bindValue(":artistas", $cinema->artistas);
    $qry->bindValue(":diretor", $cinema->diretor);
    $qry->bindValue(":sinopse", $cinema->sinopse);
    $qry->bindValue(":dia", $cinema->dia);

    $qry->execute();
    return $this->db->lastInsertId();

    }

    public function getCinema($id){
        $sql = "SELECT * FROM tblfilmes WHERE idfilme = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);

    }

    public function editar($cinema){
        $sql = "UPDATE tblfilmes SET
            filme         =:filme,
            preco         =:preco,
            tempo         =:tempo,
            sessao        =:sessao,
            artistas      =:artistas,
            diretor       =:diretor,
            sinopse       =:sinopse,
            dia           =:dia,
            WHERE idfilme =: id
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":filme", $cinema->filme);
        $qry->bindValue(":preco", $cinema->preco);
        $qry->bindValue(":tempo", $cinema->tempo);
        $qry->bindValue(":sessao", $cinema->sessao);
        $qry->bindValue(":artistas", $cinema->artistas);
        $qry->bindValue(":diretor", $cinema->diretor);
        $qry->bindValue(":sinopse", $cinema->sinopse);
        $qry->bindValue(":dia", $cinema->dia);
        //$qry->bindValue(":id", $cinema->idfilme);

        $qry->execute();
        return $cinema->idfilme;

    }

    public function excluir(){
        $sql = "DELETE FROM tblfilmes WHERE idfilme=$id";
        $qry = $this->db->query($sql);

    }

}