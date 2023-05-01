<?php
class Project
{
    private $projectId;
    private $title;
    private $description;
    private $priority;
    private $dueDate;
    private $userId;
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
