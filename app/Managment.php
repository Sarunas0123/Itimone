<?php
namespace ITApp;

class Managment extends Workers{
    private $deparment;
    private $floor;

    public function __construct($name, $surname, $id, $living, $deparment, $floor)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->living = $living;
        $this->floor = $floor;
        $this->deparment = $deparment;
    }

    public function addComment($comment)
    {
        // TODO: Implement addComment() method.
        $this->comment = $comment;
    }

    public function showProduct()
    {
        return[
            "Name: " => $this->name,
            "Surname: " =>$this->surname,
            "id: " =>$this->id,
            "Living: " => $this->living,
            "Floor: " => $this->floor,
            "Department: " => $this->deparment,
            "Comment: " => $this->comment
        ];
    }
}

