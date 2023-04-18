<?php
class Strategy
{   
  private $strategyId;
  private $strategyTitle;
  private $timeDate;
  private $tesks; // going to be a list

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