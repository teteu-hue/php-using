<?php

Class GenderBook
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function setName($name)
    {
        $this-> name = $name;
    }
}



?>