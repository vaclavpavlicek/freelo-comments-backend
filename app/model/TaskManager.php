<?php

namespace App\Model;

use Nette;
use Nette\Utils\DateTime;

class TaskManager
{
    use Nette\SmartObject;

    public function getTaskDetail($id)
    {
        return array(
            'task' => array(
                'name' => 'Merchandising stánku snědá tíseň na veletrhu v Mostě',
                'resolved' => false,
                'dueDate' => '03-25-2019',
                'assignee' => array(
                    'nickname' => 'Dáša',
                    'profilePicture' => './images/avatar3.png'
                )
            ),
            'comments' => array(
                0 => array(
                    'id' => 1,
                    'nickname' => 'Dáša',
                    'avatar' => './images/avatar3.png',
                    'text' => '<p>Už mám první vlaštovku merche:</p><p><img src="./images/discussion1.png" className="img-fluid shadow-sm" alt=""/></p><p>Co ty na to brácha? <strong>@Ludan</strong></p>'
                ),
                1 => array(
                    'id' => 2,
                    'nickname' => 'Luďan',
                    'avatar' => './images/avatar1.png',
                    'text' => '<p>Už mám první vlaštovku merche:</p><p><img src="./images/discussion1.png" className="img-fluid shadow-sm" alt=""/></p><p>Co ty na to brácha? <strong>@Ludan</strong></p>'
                ),
                2 => array(
                    'id' => 3,
                    'nickname' => 'Čočkin',
                    'avatar' => './images/avatar2.png',
                    'text' => '<p>Hele a myslíte, že to bude fungovat?</p><p>Třeba já bych si na sebe takovou blbost nepřipnul. Neuděláme něco víc fancy? Třeba šátek?</p><p>Nebo mě ještě napadlo, že bychom mohli vyrábět brejle. Mrkejte:</p><p><img src=./images/discussion2.jpg width="400" className="img-fluid shadow-sm" alt=""/> </p>'
                ),
                3 => array(
                    'id' => 4,
                    'nickname' => 'Luďan',
                    'avatar' => './images/avatar1.png',
                    'text' => '<p>Hele <strong>@Cockin</strong> to mi nepřijde jako nejlepší nápad na to bych se vykašlal.</p>'
                ),
            ),
        );
    }
}