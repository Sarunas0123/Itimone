<?php
namespace ITApp;

class Render{

    static public function Show($data){
        foreach ($data as $item => $here){
            echo $item;
            echo $here." ";
        }
    }
}