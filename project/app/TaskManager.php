<?php

namespace Todo;

use Todo\Models\Task;
use Todo\Storage\DatabaseTaskStorage;

class TaskManager
{
    protected $storage;

    public function __construct(DatabaseTaskStorage $storage)
    {
        $this->storage = $storage;
    }

    public  function  addTask(Task $task)
    {
        return $this->storage->store($task);
    }

    public  function  updateTask(Task $task)
    {
        return $this->storage->update($task);
    }

    public  function  getTask(int $id)
    {
        return $this->storage->get($id);
    }

    public  function  getTasks()
    {
        return $this->storage->all();
    }
}