<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\EventInterface;
use Cake\I18n\FrozenTime;

class CustomersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('customers');
    }

    public function index()
    {
    }

    public function add()
    {
        $time = FrozenTime::now();
        $now = FrozenTime::parse('now');
        $_now = $now->i18nFormat('dd/MM/yyyy');
        $this->set('timenow', $_now);
        $now = FrozenTime::parse('now');
        $nice = $now->nice();
        $this->set('nicetime', $nice);
        $time = FrozenTime::now();
        $this->set("current_year", $time->year);
        $this->set("current_month", $time->month);
        $this->set("current_day", $time->day);
    }
}
