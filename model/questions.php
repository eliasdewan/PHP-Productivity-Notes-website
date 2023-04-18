<?php
class Questions
{   
  private $questionId;
  private $questionDetail;
  private $category;


function __construct()
{
    // Nothing here yet
}
function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }

}
?>