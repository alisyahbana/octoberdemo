<?php namespace Acme\Demo\Components;

use Cms\Classes\ComponentBase;
use Acme\Demo\Models\Task;
use Flash;

class Todo extends ComponentBase
{
    /**
    * This is a person's name
    * @var string
    **/
    public $name;

    /**
    * The collection of tasks
    * @var array
    **/
    public $tasks;

    /**
    * The collection of tasks
    * @var array
    **/
    public $dataTasks;

    public function componentDetails()
    {
        return [
            'name'        => 'Todo Component',
            'description' => 'A Database Driven Todo List'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
      
        $this->name = 'Bana';

        $this->tasks= Task::get();
        
    }

    public function onAddItem()
    {
        $taskName=post('task');
        $task = new Task;
        $task->title=$taskName;
        $task->save();

        $this->page['tasks'] = Task::get();
    }

    public function onDelete()
    {
        $id=post('id');
        Task::where('id', $id)->delete();

        Flash::success('Data deleted!');

        $this->page['tasks'] = Task::get();



        
    }

}