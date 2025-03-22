<?php 

class Livro{

private $titulo;
private $autor;
private $ano_publicacao;
private $preco;

public function _construct($titulo, $autor, $ano_publicacao, $preco){
    $this->$titulo = $titulo;
    $this->$autor = $autor;
    $this->$ano_publicacao = $ano_publicacao;
    $this->$preco = $preco;
}

public function getTitulo(){
    return $this->titulo;
}

public function getAutor(){
    return $this->autor;
}

public function getAno_publicacao(){
    return $this->ano_publicacao;
}
public function getPreco(){
    return $this->preco;
}

public function setPreco($arg){
    $this->preco = $valor;
}

public function setTitulo($arg){
    $this->titulo = $valor;
}

public function setAutor($arg){
    $this->autor = $valor;
}

public function setAno_publicacao($arg){
    $this->ano_publicacao = $valor;
}


$Book = new Livro();
$Book2 = new Livro();

$Book->getTitulo('Os Miseraveis');
$Book->getAutor('Victor Hugo');
$Book->getAno_publicacao('1862');
$Book->getPreco('R$ 50,00');
//------------------------------------------------------
echo "Livro : " .$Book->getTitulo();
echo "Autor : " .$Book->getAutor();
echo "Ano de Publicação :" .$Book->getAno_publicacao();
echo "Preco : " .$Book->getPreco();
//------------------------------------------------------

}



?>