<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Event\EventInterface;
use PhpParser\Node\Expr\FuncCall;

class MainController extends AppController
{
    // Set layout for all
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('main');
    }

    public function home()
    {
    }

    public function about()
    {
    }

    public function contact()
    {
    }
}
