<?php

namespace App\Presenters;

use App\Model\ITaskManager;
use Nette;

class TaskPresenter extends Nette\Application\UI\Presenter {

    /** @var TaskManager */
    private $taskManager;


    public function __construct(ITaskManager $taskManager)
    {
        $this->taskManager = $taskManager;
    }

    public function actionDetail() {
        $this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', '*');
        $this->sendJson($this->taskManager->getTaskDetail($this->presenter->getParameter('id')));
    }
}
