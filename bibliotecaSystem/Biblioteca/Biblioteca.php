<?php

require("Address/Address.php");

Class Biblioteca
{
    private string $name;
    private Address $address;
    private array $books;

    public function __construct($name, $address, $books)
    {
        $this->name = $name;
        $this->address = $address;
        $this->books = $books;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBooks(){
        return $this->books;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    public function showBooks()
    {
        for($i = 0; $i < count($this->books); $i++){
            echo $this->books[$i]->getInfoBook();
        }
    }

    public function getBookById($idBook)
    {
        for($i = 0; $i < count($this->books); $i++){
            if($this->books[$i]->getIdBook() == $idBook){
                return $this->books[$i]->getInfoBook();
            }
        }
    }
}

?>