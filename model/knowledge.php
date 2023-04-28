<?php
class Knowledge
{
    private $knowledgeId;
    private $knowledgeTitle;
    private $knowledgeDescription;
    private $knowledgeCategory;
    private $sortOrder;
    private $isDocument;
    private $fixed;

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
