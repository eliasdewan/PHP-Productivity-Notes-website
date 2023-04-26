<?php
class Task
{
    private $taskId;
    private $taskTitle;
    private $taskDescription;
    private $timeAllocation;
    private $priority;
    private $dueDate;
    private $strategyId; // for database foreign code

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
