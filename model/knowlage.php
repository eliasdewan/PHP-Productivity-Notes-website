<?php
class Knowlage
{   
  private $knowlageId;
  private $knowlageTitle;
  private $knowlageDescription;
  private $knowlageCategory;

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