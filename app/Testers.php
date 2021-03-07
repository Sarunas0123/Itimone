<?php
namespace ITApp;

class Testers extends Workers{
    protected $isheworking;
    protected $experience;

    public function __construct($name, $surname, $id, $living, $isheworking, $experience)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->living = $living;
        $this->experience = $experience;
        $this->isheworking = $isheworking;
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
            "experience: " =>$this->experience,
            "Status: " =>$this->isheworking,
            "Comment: " => $this->comment
        ];
    }
}
