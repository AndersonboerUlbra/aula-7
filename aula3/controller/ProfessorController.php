<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/ProfessorModel.php';

class ProfessorController {

    const  CONTROLLER_FOLDER = '/professor';

    public function listar() {
        $professorModel = new ProfessorModel();
        $listaProfessores = $professorModel->listar();

        $_REQUEST['professores'] = $listaProfessores;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorView.php';
    }
    public function salvar(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorForm.php';
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $professorModel = new ProfessorModel();
        $professorModel->salvar($nome,$idade);   

        header('location: http://localhost:8081/' . FOLDER . '/?class=Professor&acao=salvar');
        exit();
        }

    }

    public function editar(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET["id"];
            $professorModel = new professorModel();
            $professor = $professorModel->buscarPeloId($id);

            $_REQUEST['professor'] = $professor;

            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/ProfessorFormEdit.php';
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET["id"];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $professorModel = new professorModel();
        $professorModel->atualizarModel($id, $nome, $idade);   

        header('location: http://localhost:8081/' . FOLDER . '/?class=Professor&acao=salvar');
        exit();

        }
    }
    public function excluir(){
        $id = $_GET["id"];
        
        $professorModel = new professorModel();

        $professorModel->excluirModel($id);

        header('location: http://localhost:8081/' . FOLDER . '/?class=Professor&acao=salvar');
        exit();



    }




}