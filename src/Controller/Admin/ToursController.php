<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\EventInterface;

class ToursController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('tours');
    }
    public function index()
    {
    }
    public function add()
    {
    }
}
