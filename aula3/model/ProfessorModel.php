<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/database/Database.php';

class ProfessorModel {
    public string $nome;
    public int $idade;
    public $database;

    public function __construct(){
        $this->database = new Database();

    }


    public function salvar(string $nome, int $idade){
        $sql = "INSERT INTO professores (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);

    }

    public function listar(){
        $dadoArray = $this->database->executeSelect("SELECT * FROM professores");
        return $dadoArray;
    }
    public function buscarPeloId(int $id){
        $professorArrey = $this->database->executeSelect("SELECT * FROM professores WHERE id='$id'");
        return $professorArrey[0];

    }

    public function atualizarModel(int $id, string $nome, int $idade){
        $sql = "UPDATE professores set nome='$nome', idade='$idade' WHERE id = '$id'";
        $this->database->insert($sql);

    }

    public function excluirModel(int $id){
        $sql = "DELETE FROM professores WHERE id = '$id'";
        $this->database->insert($sql);


    }
}