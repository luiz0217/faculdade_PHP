<?php

class tarefaModel
{
    private $id;
    private $idStatus;
    private $tarefa;
    private $data;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo,$valor) {
        $this->$atributo = $valor;
        return $this;
    }
}

