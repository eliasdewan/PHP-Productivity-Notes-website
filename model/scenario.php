getScenarioByUserId<?php
class Scenario
{   
  private $scenarionumber ;
  private $question;
  private $category;
  private $color;


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