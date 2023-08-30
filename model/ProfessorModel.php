<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER. '/database/Database.php';


class ProfessorModel {

    public string $nome;

    public int $idade;

    public $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function listarModel(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM professores");
        return $dadosArray;
    }
    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO professores (nome, idade) values ('$nome', '$idade') ";
        $this->database->insert($sql);

    }
}