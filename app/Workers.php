<?php
namespace ITApp;

abstract class Workers{
    protected $name;
    protected $surname;
    protected $id;
    protected $living;

    abstract public function addComment($comment);

    abstract public function showProduct();
}