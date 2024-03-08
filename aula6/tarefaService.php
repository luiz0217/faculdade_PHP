<?php

class tarefaService
{
    private $tarefa;
    private $con;

    public function __construct(object $mysql,object $tarefa) {
        $this->con = $mysql->conectar();
        $this->tarefa = $tarefa;
    }

    public function inserir() {
        $sql = $this->con->prepare("INSERT INTO tb_tarefas(tarefa) values(?)");
        $sql->execute([$this->tarefa->__get('tarefa')]);
    }
    
    public function recuperar() {
        $sql = $this->con->prepare("SELECT * FROM tb_tarefas AS t LEFT JOIN tb_status AS s ON(t.id_status = s.id)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

}

