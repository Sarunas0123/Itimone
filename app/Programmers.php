<?php
namespace ITApp;

class Programmers extends Workers{
    protected $type;
    protected $experience;

    public function __construct($name, $surname, $id, $living, $type, $experience)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->living = $living;
        $this->type = $type;
        $this->experience = $experience;
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
            "Type: " =>$this->type,
            "Experience: " =>$this->experience
        ];
    }
}