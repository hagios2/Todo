<?php

class Todo 
{
    
    protected $title;

    protected $description;


    public function __construct($title, $description)
    {

        $this->title = $title;

        $this->description = $description;
    }


  /*   public function getDescription()
    {

        return $this->description;
    }


    public function getTitle()
    {

        return $this->title;;
    }
 */
}