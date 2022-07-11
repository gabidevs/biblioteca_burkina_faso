<?php
require_once('Crud.php');

class Livros extends Crud{
    protected string $tabela = 'livros';
 

    function __construct(
        public string $titulo,
        public string $editora,
        public string $imagem,
        public string $autor,
    ){}


    public function insert()
    {
        $sql = "SELECT * FROM $this->tabela WHERE titulo=?";
        $sql = BD::prepare($sql);
        $sql->execute(array($this->titulo));

        $livros = $sql->fetch();

        if(!$livros){
            $sql = "INSERT INTO $this->tabela VALUES (null,?,?,?,?)";
            $sql = BD::prepare($sql);
            return $sql->execute(array($this->titulo, $this->editora, $this->imagem, $this->autor));
        }

    }

    public function update($sql)
    {

    }

    public function select($id)
    {
        if(isset($this->titulo)) {
            $sql = "SELECT * FROM $this->tabela WHERE titulo LIKE '%$this->titulo%'";
            $sql = BD::prepare($sql);
            $sql->execute();

            $valor = $sql->fecth(PDO::FETCH_ASSOC);

            return $valor;
        } elseif (isset($this->autor)) {
            $sql = "SELECT * FROM $this->tabela WHERE titulo LIKE '%$this->titulo%'";
            $sql = BD::prepare($sql);
            $sql->execute();

            $valor = $sql->fecth(PDO::FETCH_ASSOC);
        }
    }

    public function selectAll()
    {
        
    }

    public function delete($id)
    {
        
    }
}