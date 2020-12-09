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
        $tour = $this->Tours->newEmptyEntity();
        if ($this->request->is('post')) {
            $tour = $this->Tours->patchEntity($tour, $this->Tours->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour cannot be saved. Please try again later'));
        }
        $this->set(compact('tour'));
    }

    public function settings()
    {
    }
}
