<?php
require_once('BD.php');

abstract class Crud extends BD{
    protected string $tabela;

    abstract function insert();
    abstract function update($id);

    public function select($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id=?";
        $sql = BD::prepare($sql);
        $sql->execute(array($id));
        $dados = $sql->fetch();

        return $dados;
    }

    public function selectAll() {
        $sql = "SELECT * FROM $this->tabela";
        $sql = BD::prepare($sql);
        $sql->execute();
        $dados = $sql->fetchAll();

        return $dados;
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id=?";
        $sql = BD::prepare($sql);
        return $sql->execute(array($id));
    }
}