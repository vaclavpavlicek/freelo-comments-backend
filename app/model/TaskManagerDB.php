<?php

namespace App\Model;

use Nette;

class TaskManagerDB implements ITaskManager
{
    use Nette\SmartObject;

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function getTaskDetail($id)
    {
        $task = $this->database->query('select tasks.id, tasks.title, tasks."dueDate", tasks.resolved, tasks."assigneeId", people.name from tasks join people on tasks."assigneeId" = people.id where tasks.id = ?', $id)->fetch();
        if ($task) {
            $comments = $this->database->query('select comments.id, comments.text, people.name from comments join people on comments."authorId" = people.id  where "taskId" = ?', $task['id'])->fetchAll();
            $task['assignee'] = ['id' => $task['assigneeId'], 'name' => $task['name']];
            unset($task['assigneeId']);
            unset($task['name']);
            return [
                'task' => $task,
                'comments' => array_map(function ($comment) {
                    return [
                        'id' => $comment['id'],
                        'text' => $comment['text'],
                        'author' => [
                            'name' => $comment['name'],
                        ]
                    ];
                }, $comments)
            ];
        } else {
            return ['message' => 'task-not-found'];
        }
    }
}