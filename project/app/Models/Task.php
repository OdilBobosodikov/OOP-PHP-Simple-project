<?php

namespace Todo\Models;
use DateTime;

class Task
{
    protected  $id;
    protected $complete = false;
    protected $description;
    protected $due;

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setComplete(string $status = '')
    {
        $this->complete = $status;
    }

    public function getComplete()
    {
        return $this->complete;
    }

    public function setDue(DateTime $due)
    {
        $this->due = $due;
    }

    public function getDue()
    {
        if(!$this->due instanceof DateTime) {
            return new DateTime($this->due);
        }
        return $this->due;
    }

    public function getId()
    {
        return $this->id;
    }
}