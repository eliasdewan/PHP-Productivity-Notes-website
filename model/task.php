<?php
class Task
{
    private $taskId;
    private $taskTitle;
    private $taskDescription;
    private $timeAllocation;
    private $priority;
    private $dueDate;
    private $projectId; // for database foreign code
    private $userId;
    private $progress;
    private $isDocument;

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
