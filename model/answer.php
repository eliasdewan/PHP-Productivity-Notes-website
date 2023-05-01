<?php
class Answers
{   
  private $answerId;
  private $question;
  private $answer;
  private $category;
  private $taskId;
  private $userId;
  private $timestamp;



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