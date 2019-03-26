<?php

namespace App\Presenters;

use App\Model\TaskManager;
use Nette;
use Nette\Application\Responses\JsonResponse;

class TaskPresenter extends Nette\Application\UI\Presenter {

    /** @var TaskManager */
    private $taskManager;


    public function __construct(TaskManager $taskManager)
    {
        $this->taskManager = $taskManager;
    }

    public function actionDetail() {
        $this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', '*');
        $response = new JsonResponse($this->taskManager->getTaskDetail(1));
        $this->sendResponse($response);
    }
}
