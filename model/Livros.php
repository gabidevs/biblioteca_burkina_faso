<?php
require_once('Crud.php');

class Livros extends Crud{
    protected string $tabela = 'livros';
 

    function __construct(
        public string $titulo = '',
        public string $editora = '',
        public string $imagem = '',
        public string $autor = '',
        public array $erro=[]
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
            $sql->execute(array($this->titulo, $this->editora, $this->imagem, $this->autor));

            $this->status['sucess'] = "Livro cadastrado com sucesso";

        } else {
            $this->status['erro'] = "Livro já cadastrado";
        }

    }

    public function update($sql)
    {

    }

    public function select($id)
    {
            $sql = "SELECT * FROM $this->tabela WHERE titulo LIKE '%$this->titulo%'";
            $sql = BD::prepare($sql);
            $sql->execute();

            $valor = $sql->fetch(PDO::FETCH_ASSOC);

            if(!$valor) {
                
                $valor = "Livro não encontrado";

                return $valor;
            } else {

                return $valor;

            }
            
            
            /*
            Condição caso seja inserido nome do autor no lugar de nome do
            
            else {
                

            }

        } elseif (isset($this->autor)) {
            $sql = "SELECT * FROM $this->tabela WHERE titulo LIKE '%$this->autor%'";
            $sql = BD::prepare($sql);
            $sql->execute();

            $valor = $sql->fecth(PDO::FETCH_ASSOC);

            return $valor;
        }*/

    }

    public function selectAll()
    {
        
    }

    public function delete($id)
    {
        
    }
}